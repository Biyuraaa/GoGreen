@extends('layouts.template')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 75vh;">
  <div class="row">
    <div class="col-md-12">
      <div class="user-profile text-center border p-5 rounded shadow" style="width: fit-content; margin: auto;">
        <h2>Create New Wallet</h2>
        <form action="{{ route('wallets.store') }}" method="POST">
          @csrf
          <div class="form-group mt-3">
            <label for="balance">Balance</label>
            <input type="number" class="form-control" id="balance" name="balance" value="{{ old('balance') }}" required>
          </div>
          <input type="hidden" value="{{Auth::id()}}" name="user_id">
          <button type="submit" class="btn btn-primary mt-4">Create Wallet</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="scroll-to-top scroll-to-target" data-target=".main-header">
  <span class="icon fa fa-angle-up"></span>
</div>
@endsection
