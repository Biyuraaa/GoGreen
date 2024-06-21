@extends('layouts.template')
@section('title')
  <section class="page-title">
      <div class="container">
        <div class="content-box">
          <div class="title">Our <span>blog</span></div>
          <div class="bread-crumb">
            <a href="index.html">Home &nbsp;</a> /&nbsp;<span>blog</span>
          </div>
        </div>
      </div>
  </section>
@endsection
@section('content')
  <section class="blog-classic news-section blog-page">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-12 col-xs-12 content-side">
            <div class="blog-classic-content">
              @foreach ($blogs as $blog)
              <a href="{{route('blogs.show', $blog)}}">
                <div class="single-item">
                <div class="img-box">
                  <figure>
                      @if ($blog->image)
                        <img src="{{ asset('assets/images/blogs/'. $blog->image) }}" alt="{{ $blog->title }}" />
                      @else
                        <img src="{{ asset('assets/images/news/n1.jpg') }}" alt="" />
                      @endif
                      </figure>
                </div>
                <div class="lower-content">
                  <div class="meta">{{$blog->category->name}}</div>
                  <h4>
                    <a href="{{route('blogs.show', $blog)}}"
                      >{{$blog->title}}</a
                    >
                  </h4>
                  <div class="text">
                    <p>
                      {{$blog->description}}
                    </p>
                  </div>
                  <div class="button-content">
                    By {{$blog->user->name}} <span>{{$blog->created_at->diffForHumans()}}</span>
                  </div>
                </div>
              </div>
              </a>
              @endforeach
              <ul class="link-btn">
                <li>
                  <a href="#"><i class="fa fa-angle-left"></i></a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li>
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 sidebar-side">
            <div class="sidebar">
              <div class="sidebar-search sidebar-wideget">
                <div class="sidebar-title"><h4>Search</h4></div>
                <div class="search-box">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="sidebar-categories sidebar-wideget">
                <div class="sidebar-title"><h4>Categories</h4></div>
                <ul class="categories-list">
                  @foreach ($categories as $category)
                    <li>
                      <a href="">{{$category->name}} <span>({{$category->blogs->count()}})</span></a>
                    </li>
                  @endforeach
                </ul>
              </div>
              <div class="sidebar-post sidebar-wideget">
                <div class="sidebar-title"><h4>Recent Blogs</h4></div>
                @foreach ($recentBlogs as $blog)           
                <div class="sinlge-post">
                  <div class="img-box">
                    <a href="{{route('blogs.show', $blog)}}"
                      ><figure>
                        @if ($blog->image)
                          <img src="{{asset('assets/images/blogs/'. $blog->image)}}" alt="{{$blog->title}}" />
                        @else
                          <img src="{{asset('assets/images/news/p1.jpg')}}" alt="" />
                        @endif
                        </figure
                    ></a>
                  </div>
                  <div class="post-title">
                    <a href="{{route('blogs.show', $blog)}}"
                      >{{$blog->title}}</a
                    >
                  </div>
                  <div class="text">{{$blog->created_at->format('M d, Y')}}</div>
                </div>
                @endforeach
              </div>
              <div class="sidebar-tags sidebar-wideget">
                <div class="sidebar-title"><h4>Tags</h4></div>
                <ul class="tag-list">
                  <li><a href="#">Eco System</a></li>
                  <li><a href="#">Solar Enargy</a></li>
                  <li><a href="#">Breads</a></li>
                  <li><a href="#">Agri Plants</a></li>
                  <li><a href="#">Organic</a></li>
                  <li><a href="#">Wind Energy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
