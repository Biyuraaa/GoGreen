<!-- resources/views/wallets/index.blade.php -->

@extends('layouts.template')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 75vh;">
    <div class="row">
        <div class="col-md-12">
            <div class="user-profile text-center border p-5 rounded shadow" style="width: fit-content; margin: auto;">
                <h2>My Wallet</h2>
                <a href="{{ route('wallets.deposit') }}" class="btn btn-primary my-3 align-items-start">Deposit</a>
                <h3>Balance: ${{ number_format($wallet->balance, 2) }}</h3>
                <h4>Last Transactions</h4>
                <ul class="list-group">
                  @if ($lastTransactions->isEmpty())
                    <li class="list-group-item">No transactions yet</li>
                  @else
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Type</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($lastTransactions as $transaction)
                        <tr>
                          <td>{{ $transaction->created_at->format('d M Y H:i') }}</td>
                          <td>{{ ucfirst($transaction->type) }}</td>
                          <td class="{{ $transaction->type == 'deposit' ? 'text-success' : 'text-danger' }}">
                            ${{ number_format($transaction->amount, 2) }}
                          </td> 
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @endif
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="scroll-to-top scroll-to-target" data-target=".main-header">
    <span class="icon fa fa-angle-up"></span>
</div>
@endsection
