<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWalletRequest;
use App\Http\Requests\UpdateWalletRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Transaction;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wallet = Auth::user()->wallet;
        $lastTransactions = $wallet->transactions()->latest()->take(5)->get();
        return view('pages.wallets.index', compact('wallet', 'lastTransactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->wallet) {
            return redirect()->route('wallets.index');
        } else {
            return view('pages.wallets.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWalletRequest $request)
    {
        $request->user()->wallet()->create($request->validated());

        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wallet $wallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wallet $wallet)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWalletRequest $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wallet $wallet)
    {
        //
    }

    public function deposit()
    {
        return view('pages.wallets.deposit');
    }
    /**
     * Store a newly created deposit in storage.
     */

    public function storeDeposit(Request $request)
    {
        $request->validate([
            'balance' => 'required|numeric|min:1',
            'wallet_id' => 'required|exists:wallets,id'
        ]);

        $wallet = Wallet::find(Auth::user()->wallet->id);
        $wallet->balance += $request->balance;
        $wallet->save();

        Transaction::create([
            'wallet_id' => $wallet->id,
            'amount' => $request->balance,
            'type' => 'deposit'
        ]);

        return redirect()->route('wallets.index')->with('success', 'Wallet balance updated successfully.');
    }
}
