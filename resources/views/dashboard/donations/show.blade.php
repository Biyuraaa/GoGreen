@extends('dashboard.layouts.template')

@section('content')
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-truncate" style="max-width: 500px;">Detail Donation</h1>
        </div>
        <a href="{{ route('donations.index') }}" class="btn btn-secondary mb-2">Back</a>
        <div class="card">
            <div class="card-header">
                <h2>User Information</h2>
            </div>
            <div class="card-body">
                <p><strong>User Name:</strong> {{ $user->name }}</p>
                <p><strong>User Email:</strong> {{ $user->email }}</p>
                <p><strong>User Phone:</strong> {{ $user->phone }}</p>
                <p><strong>User Address:</strong> {{ $user->address }}</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Blog Information</h2>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $blog->title }}</p>
                <p><strong>Author:</strong> {{ $blog->user->name }}</p>
                <p><strong>Category:</strong> {{ $blog->category->name }}</p>
                <p><strong>Created at:</strong> {{ $blog->created_at }}</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Donation Information</h2>
            </div>
            <div class="card-body">
                <p><strong>Amount:</strong> Rp. {{ number_format($donation->amount, 0, ',', '.') }}</p>
                <p><strong>Donation at:</strong> {{ $donation->created_at->format('M d, Y') }}</p>
            </div>
        </div>
    </div>
@endsection
