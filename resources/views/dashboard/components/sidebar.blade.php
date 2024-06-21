  <div class="sidebar">
        <div>
            <div class="profile">
              <a href="{{route('profile.edit')}}">
                <img src="{{ Auth::user()->image ? asset('assets/images/' . Auth::user()->image) : 'https://via.placeholder.com/100' }}" alt="Profile Picture">
              </a>
                <h3>{{Auth::user()->name}}</h3>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link active" href="{{route('dashboard')}}">Home</a>
                <a class="nav-link" href="{{route('blogs.index')}}">Blogs</a>
                <a class="nav-link" href="">Galleries</a>
                <a class="nav-link" href="{{route('donations.index')}}">Donations</a>
                <a class="nav-link" href="{{route('categories.index')}}">Categories</a>
            </nav>
        </div>
        <div class="sidebar-footer">
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>