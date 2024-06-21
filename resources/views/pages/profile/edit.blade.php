@extends('layouts.template')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="row">
    <div class="col-md-12">
      <div class="user-profile text-center border p-5 rounded shadow" style="width: fit-content; margin: auto;">
        <h2>Edit Profile</h2>
        <form action="{{ route('profile.update', $user) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="form-group mt-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
          </div>
          <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
          </div>
          <div class="form-group mt-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
          </div>
          <div class="form-group mt-3">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
          </div>
          <div class="form-group mt-3">
            <label for="image">Profile Picture</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary mt-4">Update Profile</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="scroll-to-top scroll-to-target" data-target=".main-header">
  <span class="icon fa fa-angle-up"></span>
</div>
@endsection
