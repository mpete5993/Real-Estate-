@include('layouts.header')

<!---===== search property ====== ---->
<div class="search-property">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 property-title">
                <h5>Title Example</h5>
                <ul class="property-bread">
                    <li><a href="/">Home</a></li>
                    <li>-</li>
                    <li>Blog</li>
                </ul>
            </div>
            <div class="col-lg-8 property-search">
                <div class="search-input ">
                    <form action=" {{ route('search') }} " method="get">
                        <input type="text" name="search" id="search" value="{{request()->input('search')}}" placeholder="Location"><button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!---===== search property ====== ---->

<!---===== blog content ====== ---->
<div class="blog-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="row">
                    @if ($posts->count() > 0)
                        @foreach ($posts as $post)
                        <div class="col-lg-6 col-md-6 ">
                            <div class="latest_post_container">
                                <div class="latest_post_img">
                                    <a href=" {{ route('post.show', $post->slug)}} "><img src=" {{asset($post->image)}} " alt=""></a>
                                </div>
                                <div class="latest_post_content">
                                    <div class="">
                                        <h6>{{$post->title}}</h6>
                                    <p>Posted by  <b>{{$post->user->name}}</b>   on {{$post->created_at->diffForHumans()}}</p>
                                    </div>
                                    <div class="">
                                        {!! Str::limit($post->content, 100) !!}
                                    </div>
                                </div>
                                <div class="">
                                    <a href="{{ route('post.show', $post->slug)}} " class="learn_more">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <span class="property-count">No posts found</span>
                    @endif
            </div>
                {{-- {{ $posts->appends(request()->input())->links() }} --}}
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                
                <div class="widget">
                    <div class="keywords">
                        <div class="input">
                            <form action=" {{ route('post.search') }} " method="get">
                                <input type="text" name="postsearch" id="postsearch" value="{{ request()->input('postsearch') }}" placeholder="Enter Keywords"><button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="categories">
                        <h6>Categories</h6>
                        <ul>
                            @foreach ($categories as $category)
                            <li><a href=" {{ route('blog', ['category' => $category->slug]) }} "> {{ $category->name }} </a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="related-blog-container">
                        <h6>Popular Post</h6>
                        
                        @foreach ($popularPosts as $popularPost)
                        <div class="related-blog-post">
                            <div class="related-post-img">
                                <a href="{{ route('post.show', $popularPost->slug)}} "><img src="{{ asset($popularPost->image)}} " alt=""></a>
                            </div>
                            <div class="related-post-content">
                                <h6><a href="{{ route('post.show', $popularPost->slug)}} "> {{ $popularPost->title }} </a></h6>
                                <span>Posted on {{ $popularPost->created_at->diffForHumans() }}</span>
                                {!! Str::limit($popularPost->content, 50) !!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="tags">
                        <h6>Tags</h6>
                        @foreach ($tags as $tag)
                        <a href=" {{ route('blog', ['tag' => $tag->slug]) }} " class="tags_links"> {{ $tag->name}} </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---===== blog content ====== ---->
@include('layouts.footer')