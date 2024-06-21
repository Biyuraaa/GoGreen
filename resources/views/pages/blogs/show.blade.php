@extends('layouts.template')
    <!-- end main header area -->

    @section('title')
    <!-- page title -->
    <section class="page-title">
      <div class="container">
        <div class="content-box">
          <div class="title">Blog <span>Details</span></div>
          <div class="bread-crumb">
            <a href="index.html">Home &nbsp;</a> /&nbsp;<span
              >Blog Details</span
            >
          </div>
        </div>
      </div>
    </section>
    @endsection
    @section('content')
      <!-- blog classic -->
    <section class="blog-details news-section blog-page">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-12 col-xs-12 content-side">
            <div class="blog-details-content">
              <div class="content-style-one">
                <div class="single-item">
                  <div class="img-box">
                    <figure>
                      @if ($blog->image)
                        <img src="{{ asset('assets/images/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" />
                        @else
                        <img src="{{ asset('assets/images/news/n1.jpg') }}" alt="" />
                      @endif
                    </figure>
                  </div>
                  <div class="lower-content">
                    <div class="meta">{{$blog->category->name}}</div>
                    <h4>{{$blog->title}}</h4>
                    <div class="text">
                      <p>
                        {{$blog->content}}
                      </p>
                    </div>
                    <div class="quote centred">
                      <div class="text">
                        Sooner or later, we will have to <br />
                        recognise that the Earth has rights, too, to live <br />
                        without pollution.
                      </div>
                      <h5>- Zaki</h5>
                    </div>
                    <div class="text">
                      <p>
                        At vero eos et accusamus et iusto odio dignissimos
                        ducimus qui blanditiis praesentium voluptatum deleniti
                        atque corrupti quos dolores et quas molestias excepturi.
                      </p>
                    </div>
                  </div>
                </div>
                <ul class="tag-post">
                  <div class="post-share-option">
                    <div class="donate-box">
                      <button class="donate-box-btn p-3 bg-primary rounded shadow" onclick="">Donate Now</button>
                    </div>
                  </div>
                </ul>
              </div>
              <div class="comment-area">
                <div class="comment-title">COMMENTS(3)</div>
                @foreach ($blog->comments as $comment)
                <div class="single-comment">
                  <div class="comment-img">
                    <figure>
                      @if ($comment->user->image)
                        <img src="{{ asset('assets/images/users/' . $comment->user->image) }}" alt="{{ $comment->user->name }}" />
                      @else
                        <img src="{{ asset('assets/images/news/c1.jpg') }}" alt="{{ $comment->user->name }}" />
                        
                      @endif
                    </figure>
                  </div>
                  <div class="title">{{$comment->user->name}}</div>
                  <div class="time">
                    <div class="text">{{$comment->created_at->diffForHumans()}}</div>
                  </div>
                  <div class="text">
                    <p>
                      {{$comment->content}}
                    </p>
                  </div>
                </div>
                @endforeach
              <div class="comment-form">
                <div class="comment-title">POST A COMMENT</div>
                <form
                  class="default-form"
                  action="{{route('comments.store')}}"
                  method="post"
                >
                  @csrf
                  <input type="hidden" name="user_id" value="{{Auth::id()}}">
                  <input type="hidden" name="blog_id" value="{{$blog->id}}">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <textarea
                        placeholder="Message"
                        name="content"
                        required=""
                      ></textarea>
                    </div>
                  </div>
                  <button
                    type="submit"
                    class="btn-one"
                    data-loading-text="Please wait..."
                  >
                    SEND YOUR MESSAGE
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 sidebar-side">
            <div class="sidebar">
              <div class="sidebar-categories sidebar-wideget">
                <div class="sidebar-title"><h4>Categories</h4></div>
                <ul class="categories-list">
                  @foreach ($categories as $category)
                    <li>
                      <a href="">{{ $category->name }} <span>({{ $category->blogs->count() }})</span></a>
                    </li>        
                  @endforeach
                </ul>
              </div>
              <div class="sidebar-post sidebar-wideget">
                <div class="sidebar-title"><h4>Recent Post</h4></div>
                @foreach ($recentBlogs as $blog)
                <div class="sinlge-post">
                  <div class="img-box">
                    <a href="{{route('blogs.show', $blog)}}"
                      ><figure>
                      @if ($blog->image)
                        <img src="{{ asset('assets/images/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" />
                        @else
                        <img src="{{ asset('assets/images/news/n1.jpg') }}" alt="" />
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
    @include('components.donates')
    @endsection