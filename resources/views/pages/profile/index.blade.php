@extends('layouts.template')

@section('content')

  <!-- Profile information -->
  <div class="container d-flex justify-content-center align-items-center py-12" style="min-height: 100vh;">
    <div class="row">
      <div class="col-md-12">
        <div class="user-profile text-center border p-5 rounded shadow" style="width: fit-content; margin: auto;">
            <h2>User Information</h2>
            @if ($user->image)
            <img src="{{ asset('assets/images/users/' . $user->image) }}" alt="{{ $user->name }}" />
            @else 
            <img src="{{ asset('assets/images/users/default.png') }}" alt="{{ $user->name }}" style="width:150px; height:150px"/>
            @endif
            <p class="mt-2"><strong>Name:</strong> {{ $user->name }}</p>
            <p class="mt-2"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="mt-2"><strong>Address:</strong> {{ $user->address ?? '-' }}</p>
            <p class="mt-2"><strong>Phone:</strong> {{ $user->phone ?? '-'}}</p>
            @if (Auth::user()->wallet)
            <p class="mt-2"><strong>Wallet:</strong> {{ $user->wallet->balance }}</p>
            <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-primary mt-3">Edit Profile</a>
            <a href="{{route('wallets.index')}}" class="btn btn-primary mt-3">My Wallet</a>
            @else
            <p class="mt-2">You dont have any wallet in your account</p>              
            <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-primary mt-3">Edit Profile</a>
            <a href="{{route('wallets.create')}}" class="btn btn-primary mt-3">Create Wallet</a>
            @endif
        
            <!-- Tambahkan informasi lain yang ingin ditampilkan -->
        </div>
      </div>
    </div>
  </div>

  <div class="scroll-to-top scroll-to-target" data-target=".main-header">
    <span class="icon fa fa-angle-up"></span>
  </div>
@endsection