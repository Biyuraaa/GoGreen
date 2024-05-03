<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
    <div class="side-header">
        <img src="{{asset('assets/images/logo-admin.jpg')}}" width="120" height="120">
        <h5 style="margin-top:10px;">Hello, {{ Auth::user( )->name }}</h5>
    </div>
    <a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home</a>
    <a href="{{route('donations.index')}}"><i class="fa fa-heart"></i> Donation</a>
    <a href="{{route('galleries.index')}}"><i class="fa fa-paint-brush"></i> Gallery</a>
    <a href="{{route('blogs.index')}}"><i class="fa-solid fa-blog"></i> Blog</a>
    <a href="{{route('doLogout')}}"><i class="fa-solid fa-blog"></i> Logout</a>
    
</div>
