@extends('dashboard.layouts.template')

@section('content')
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-truncate" style="max-width: 500px;">Create Blog</h1>
        </div>
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::id()}}">
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">Select a Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Blog</button>
        </form>
    </div>
@endsection
