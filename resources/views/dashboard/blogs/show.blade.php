@extends('dashboard.layouts.template')

@section('content')
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-truncate" style="max-width: 500px;">{{ $blog->title }}</h1>
        </div>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary mb-2">Back</a>
        <div class="card mb-4">
            <div class="card-body">
                @if ($blog->image)
                    <img src="{{ asset('assets/images/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid mb-3 w-100" style="padding: 15px;">
                @else
                    <img src="{{ asset('assets/images/gallery/1.jpg') }}" alt="{{ $blog->title }}" class="img-fluid mb-3 w-100" style="padding: 15px;">
                @endif
                <p>{{ $blog->description }}</p>
                <p>Author: {{ $blog->user->name }}</p>
                <p>Category: {{ $blog->category->name }}</p>
                <hr>
                <div>{!! $blog->content !!}</div>
                <hr>
                <p>Published on: {{ $blog->created_at->format('M d, Y') }}</p>
                <hr>
                <p>Donation Received: {{$donationReceived}}</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Comments</h2>
            </div>
            <div class="card-body">
                @foreach($blog->comments as $comment)
                    <div class="mb-3 d-flex">
                        <div class="mr-3">
                            @if ($comment->user->image)
                                <img src="{{ asset('assets/images/users/' . $comment->user->image) }}" alt="{{ $comment->user->name }}" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 10px;margin-top: 10px;">
                            @else
                                <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; margin-right: 10px;margin-top: 10px;">
                                    {{ getInitials($comment->user->name) }}
                                </div>
                            @endif
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between">
                                <p><strong>{{ $comment->user->name }} </strong></p>
                                <p>{{ $comment->created_at->diffForHumans() }}</p>
                            </div>
                            <p><small> {{ $comment->content }}</small></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection