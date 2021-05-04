@include('admin.layouts.header')

        <div class="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="admin-header">
                            <h3><i class="fa fa-newspaper-o" style="margin-right: 20px;color: #00c0ef;"></i>Post</h3>

                        </div>
                        <div class="col-lg-12 col-md-12 box-container" style="margin-top: 20px; ">
                            <!-- general form elements -->
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"> <i class="fa fa-plus-square" style="margin-right: 20px;color: #00c0ef;"></i> Edit Post</h3>
                              </div>
                              <!-- /.box-header -->
                              <!-- form start -->
                              <form method="POST" action=" {{ route('admin.posts.update',  ['post' =>$post->id])}} " enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-inputs">
                                    <input type="text" name="title" placeholder="Title" id="title" value="{{$post->title}}" required>
                                </div>
                                <div class="form-inputs">
                                    <label for="">Select Category</label><br>
                                    <select name="category_id" id="">
                                        <option value="">Category</option>
                                        @foreach ($categories as $category)
                                        <option name="category_id" value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                <div class="form-inputs">
                                    <label for="Image">Image</label><br>
                                    <img src="{{asset('/'.$post->image)}}" alt=""  width="150px" height="100px" style="object-fit: cover;">
                                    <input type="file" name="image" >
                                </div>
                                <div class="form-inputs">
                                    <label for="tags">Select Tags</label><br>
                                    @foreach ($tags as $tag)
                                    <input type="checkbox" name="tags[]" value="{{$tag->id}}" {{ $post->PostTags($tag->name)?'checked':'' }}>
                                    <span style="color: #777777;">{{ $tag->name }}</span>
                                    @endforeach
                                </div>

                                <div class="form-inputs">
                                    <textarea class="ckeditor form-control" name="content">
                                        {{ $post->content }}
                                    </textarea>
                                </div>
                                <div class="form-inputs">
                                    <button> Update Post </button>
                                </div>
                            </form>
                            </div>
                            <!-- /.box -->
                  
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
            $('.ckeditor').ckeditor();
            });
            </script>
@include('admin.layouts.footer')
