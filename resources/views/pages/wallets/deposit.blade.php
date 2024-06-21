@extends('layouts.template')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 75vh;">
  <div class="row">
    <div class="col-md-12">
      <div class="user-profile border p-5 rounded shadow" style="width: fit-content; margin: auto;">
        <h2>Deposit</h2>
        <p class="mt-2">Deposit money to your wallet</p>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="{{ route('wallets.storeDeposit') }}" method="POST">
          @csrf
          <div class="form-group mt-3">
            <label for="balance">Balance</label>
            <input type="number" class="form-control" id="balance" name="balance" required>
          </div>
          <input type="hidden" value="{{Auth::user()->wallet->id}}" name="wallet_id">
          <button type="submit" class="btn btn-primary mt-4">Deposit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="scroll-to-top scroll-to-target" data-target=".main-header">
  <span class="icon fa fa-angle-up"></span>
</div>
@endsection
