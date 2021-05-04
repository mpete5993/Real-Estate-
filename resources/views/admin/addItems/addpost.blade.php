@include('admin.layouts.header')

        <div class="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 box-container" style="margin-top: 20px; ">
                            <!-- general form elements -->
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"> <i class="fa fa-newspaper-o"" style="margin-right: 20px;color: #4da5e2;"></i> Add New Post</h3>
                              </div>
                              <!-- /.box-header -->
                              <!-- form start -->
                              <form method="POST" action=" {{ route('admin.posts.store')}} " enctype="multipart/form-data">
                                @csrf
                                {{ method_field('POST') }}
                                <div class="form-inputs">
                                    <input type="text" name="title" placeholder="Title" id="title" required>
                                </div>
                                {{-- <div class="form-inputs">
                                    <input type="text" name="slug" placeholder="Slug" id="slug">
                                </div> --}}
                                <div class="form-inputs">
                                    <select name="category_id" id=""  required>
                                        <option value="">Category</option>
                                        @foreach ($categories as $category)
                                            <option name="category_id" value=" {{$category->id}} ">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-inputs">
                                    <label for="tags">Select Tags</label><br>
                                    @foreach ($tags as $tag)
                                    <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                                    <span style="color: #777777;"> {{ $tag->name }} </span>
                                    @endforeach
                                </div>
                                <div class="form-inputs">
                                    <label for="Image">Image</label><br>
                                        <input type="file" name="image" required>
                                </div>

                                <div class="form-inputs">
                                    <textarea class="ckeditor form-control" name="content">
                                        
                                    </textarea>
                                </div>
                                {{-- <div class="form-inputs">
                                    <label for="tags">Publish</label><br>
                                    <input type="checkbox" name="publish" id="">
                                </div> --}}

                                <div class="form-inputs">
                                    <button> Add Post </button>
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
