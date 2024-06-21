@extends('dashboard.layouts.template')

@section('content')
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-truncate" style="max-width: 500px;">All Blogs</h1>
        </div>
        <div class="table-responsive">
            <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-2">Add New Blog</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>
                                @if ($blog->image)
                                    <img src="{{ asset('assets/images/blogs/'. $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid" style="max-width: 100px;">
                                @else
                                    <img src="{{ asset('assets/images/gallery/1.jpg') }}" alt="{{ $blog->title }}" class="img-fluid" style="max-width: 100px;">
                                @endif
                            </td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->category->name }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($blog->description, 50) }}</td>
                            <td>{{ $blog->user->name }}</td>
                            <td>{{ $blog->created_at->format('d M Y') }}</td>
                            <td class="d-flex justify-content-around">
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn mt-1 btn-warning btn-sm mr-1">Edit</a>
                                <a href="{{ route('blogs.show', $blog->id) }}" class="btn mt-1 btn-info btn-sm mr-1">View</a>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline-flex">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn mt-1 btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection