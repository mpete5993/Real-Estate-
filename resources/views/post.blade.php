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
                <div class="blog-post-container">
                    <article>
                        <h6><a href=""> {{ $post->title}} </a></h6>
                        <div class="blog-post-date">
                            <span style="color: #777">Posted by  {{$post->user->name}}   on  {{ $post->created_at->diffForHumans()}} </span>
                        </div>
                    </article>
                    <div class="blog-post-img">
                        <img src=" {{ asset($post->image)}} " alt="">
                    </div>
                    <div class="blog-post-content">
                        {!! $post->content !!}
                    </div>
                </div>
                <div class="blog-comment-container">
                    <div class="comment-header">
                        <h6><i class="fa fa-comments-o" aria-hidden="true"></i> Comments</h6>
                    </div>
                    @if ($comments->count() > 0)
                        
                    @foreach ($comments as $comment)
                        <div class="post-comment">
                            <div class="comment-img">
                                <div class="">
                                    <img src=" {{ asset('Images/'.$comment->user->avatar)}} " alt="">
                                </div>
                                
                            </div>
                            <div class="comment-content">
                                {!!$comment->comment!!}
                            </div>
                            <div class="comment-user-info">
                                <span><i class="fa fa-user"></i> {{ $comment->user->name}} </span>
                                <span><i class="fa fa-calendar"></i> {{ $comment->created_at->diffForHumans()}} </span>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="comment-user-info">
                        <span class=""> Be the first to comment <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                        </span>
                    </div>
                    @endif
                        <div class="my-2 p-2">
                            {{ $comments->links() }}
                        </div>
                        <div class="comment-user-info">
                            <span class=""> showing {{$comments->count() }} - {{ $comments->total() }} comments</span>
                        </div>
                    <div class="comment-form">
                        @guest
                            <a href=" {{route('login')}} " class="learn_more">
                                <span class="property-count">Login to comment</span>
                            </a>
                        
                        @else
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6><i class="fa fa-comment" aria-hidden="true" style="color: #ddd;"></i> Leave your Comment</h6>
                                </div>
                            </div>
                            <form action=" {{ route('comments.store', $post->id)}} " method="post">
                                @csrf
                                {{ method_field('POST') }}
                                <div class="row comment-input ">
                                        {{-- <div class="col-lg-12 ">
                                            <input type="text" name="name" placeholder="Enter your Name">
                                            <input type="email" name="email" placeholder="Enter your Email">
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <div class="" style="margin-top: 20px; margin-bottom:10px;">
                                                <textarea class="ckeditor form-control" name="comment">
                                        
                                                </textarea>
                                            </div>
                                            <div class="">
                                                <button>send <i class="fa fa-arrow-circle-o-right"></i></button>
                                            </div>
                                        </div>
                                </div>
                            </form>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>

            {{-- Widgets --}}
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="keywords">
                    <div class="input">
                        <form action=" {{ route('post.search') }} " method="get">
                            <input type="text" name="postsearch" id="postsearch" value="{{ request()->input('postsearch') }}" placeholder="Enter Keywords"><button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="widget">
                    <div class="categories">
                        <h6>Categories</h6>
                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="{{ route('blog', ['category' => $category->slug]) }} "> {{ $category->name }} </a></li>
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
                                {!! Str::limit($post->content, 50) !!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="tags">
                        <h6>Tags</h6>
                        @foreach ($tags as $tag)
                        <a href="{{ route('blog', ['tag' => $tag->slug]) }}" class="tags_links"> {{ $tag->name}} </a>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Widgets --}}

        </div>
    </div>
</div>
<!---===== blog content ====== ---->
<script src="{{ asset('CKeditor/ckeditor.js') }}"></script>
        
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@include('layouts.footer')