<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Blog;
use App\Models\Donation;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $users = User::all();
            $blogs = Blog::all();
            $totalDonations = Donation::all()->count();
            $totalRevenue = Transaction::where('type', 'donation')->sum('amount');
            $latestUsers = User::orderBy('created_at', 'desc')->take(7)->get();
            $latestBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get();

            // Data untuk grafik
            $userChartLabels = User::select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'))
                ->groupBy('month')
                ->orderBy('month', 'asc')
                ->pluck('month');
            $userChartData = User::select(DB::raw('COUNT(*) as count'))
                ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'))
                ->orderBy('created_at', 'asc')
                ->pluck('count');
            $donationChartLabels = Donation::select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'))
                ->groupBy('month')
                ->orderBy('month', 'asc')
                ->pluck('month');
            $donationChartData = Donation::select(DB::raw('SUM(amount) as total'))
                ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'))
                ->orderBy('created_at', 'asc')
                ->pluck('total');
            // Data untuk grafik perbandingan kategori blog
            $categoryChartLabels = Category::pluck('name');
            $categoryChartData = Category::withCount('blogs')
                ->orderBy('blogs_count', 'desc')
                ->pluck('blogs_count');

            // Data untuk grafik blog terpopuler
            $popularBlogLabels = Blog::withCount('comments')
                ->orderBy('comments_count', 'desc')
                ->take(10)
                ->pluck('title');
            $popularBlogData = Blog::withCount('comments')
                ->orderBy('comments_count', 'desc')
                ->take(10)
                ->pluck('comments_count');

            // Data untuk user yang aktif berdasarkan banyaknya komentar
            $activeUsers = User::withCount('comments')
                ->orderBy('comments_count', 'desc')
                ->take(5)
                ->get();

            // Data untuk user yang paling banyak melakukan donasi
            $topDonors = User::select('users.id', 'users.name', 'users.email', DB::raw('SUM(donations.amount) as total_donated'))
                ->join('wallets', 'users.id', '=', 'wallets.user_id')
                ->join('donations', 'wallets.id', '=', 'donations.wallet_id')
                ->groupBy('users.id', 'users.name', 'users.email')
                ->orderBy('total_donated', 'desc')
                ->take(4)
                ->get();
            return view('dashboard.index', compact(
                'users',
                'blogs',
                'totalDonations',
                'totalRevenue',
                'latestUsers',
                'latestBlogs',
                'userChartLabels',
                'userChartData',
                'donationChartLabels',
                'donationChartData',
                'categoryChartLabels',
                'categoryChartData',
                'popularBlogLabels',
                'popularBlogData',
                'activeUsers',
                'topDonors'
            ));
        } else {
            $users = User::all();
            return view('pages.home', compact('users'));
        }
    }
}
