@extends('dashboard.layouts.template')

@section('content')
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-truncate" style="max-width: 500px;">Edit Blog</h1>
        </div>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary mb-2">Back</a>
        <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="hidden" name="user_id" value="{{Auth::id()}}">
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description', $blog->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content', $blog->content) }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*" onchange="previewImage(event)">
                <img id="imagePreview" src="{{ asset('assets/images/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid mt-3" style="max-width: 200px; display: {{ $blog->image ? 'block' : 'none' }}">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">Select a Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Blog</button>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function() {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection
