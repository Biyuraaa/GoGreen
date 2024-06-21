<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $totalDonations = Transaction::where('type', 'donation')->sum('amount');
        $donations = Donation::all();
        return view('dashboard.donations.index', compact('donations', 'totalDonations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonationRequest $request)
    {
        $validatedData = $request->validated();

        $wallet = Wallet::find($request->wallet_id);

        if ($wallet->balance < $validatedData['amount']) {
            return redirect()->back()->with('error', 'Insufficient funds');
        }

        $donation = Donation::create([
            'amount' => $validatedData['amount'],
            'wallet_id' => $request->wallet_id,
        ]);
        Log::info('Donation successful', ['donation' => $donation]);

        Transaction::create([
            'amount' => $validatedData['amount'],
            'wallet_id' => $request->wallet_id,
            'donation_id' => $donation->id,
        ]);


        $wallet->update([
            'balance' => $wallet->balance - $validatedData['amount'],
        ]);

        return redirect()->route('wallets.index')->with('success', 'Donation successful');
    }


    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        // Ambil data user dari wallet terkait
        $user = $donation->wallet->user;
        // Ambil data blog terkait
        $blog = $donation->blog;

        return view('dashboard.donations.show', compact('donation', 'user', 'blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonationRequest $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
