<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Donation;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        if (Auth::user()->role == 'admin') {

            return view('dashboard.blogs.index', compact('blogs'));
        } else {
            $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(2)->get();
            $categories = Category::all();
            return view('pages.blogs.index', compact('blogs', 'categories', 'recentBlogs'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('dashboard.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $request->validated();

        $image_name = null;
        if ($request->hasFile('image')) {
            $image_name = $request->title . '_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/blogs/'), $image_name);
        }

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'image' => $image_name
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        if (Auth::user()->role == 'admin') {
            $donationReceived = Donation::where('blog_id', $blog->id)->sum('amount');
            return view('dashboard.blogs.show', compact('blog', 'donationReceived'));
        } else {
            $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();
            $categories = Category::all();
            return view('pages.blogs.show', compact('blog', 'categories', 'recentBlogs'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('dashboard.blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $request->validated();

        // Menghapus gambar lama jika ada gambar baru yang diupload
        if ($request->hasFile('image')) {
            if ($blog->image) {
                // Hapus gambar lama
                $oldImagePath = public_path('assets/images/blogs/') . $blog->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Simpan gambar baru
            $image_name = $request->title . '_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/blogs/'), $image_name);
        } else {
            $image_name = $blog->image;
        }

        // Update data blog
        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'image' => $image_name
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        // Hapus gambar jika ada
        if ($blog->image) {
            $imagePath = public_path('assets/images/blogs/') . $blog->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
    public function donation(Request $request)
    {
        // Validasi input menggunakan Validator
        $validator = Validator::make(
            $request->all(),
            [
                'amount' => 'required|numeric|min:1',
                'wallet_id' => 'required|exists:wallets,id',
                'blog_id' => 'required|exists:blogs,id',
            ]
        );

        // Periksa apakah validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        // Temukan wallet berdasarkan wallet_id
        $wallet = Wallet::find($validatedData['wallet_id']);

        // Periksa apakah saldo cukup untuk donasi
        if ($wallet->balance < $validatedData['amount']) {
            return redirect()->back()->with('error', 'Insufficient funds');
        }

        // Buat record donasi baru
        $donation = Donation::create([
            'amount' => $validatedData['amount'],
            'wallet_id' => $validatedData['wallet_id'],
            'blog_id' => $validatedData['blog_id'],
        ]);

        // Log informasi donasi yang berhasil
        Log::info('Donation successful', ['donation' => $donation]);

        // Buat record transaksi baru
        Transaction::create([
            'amount' => $validatedData['amount'],
            'wallet_id' => $validatedData['wallet_id'],
            'type' => 'donation',
        ]);

        // Perbarui saldo wallet
        $wallet->update([
            'balance' => $wallet->balance - $validatedData['amount'],
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('wallets.index')->with('success', 'Donation successful');
    }
}
