@include('admin.layouts.header')

        <div class="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="admin-header">
                            <h3><i class="fa fa-bookmark" style="margin-right: 20px;color: #00c0ef;"></i>Category</h3>

                        </div>
                        <div class="col-lg-12 col-md-12 box-container" style="margin-top: 20px; ">
                            <!-- general form elements -->
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"> <i class="fa fa-plus-square" style="margin-right: 20px;color: #00c0ef;"></i> Add New Category</h3>
                              </div>
                              <!-- /.box-header -->
                              
                              <!-- form start -->
                              <form method="POST" action=" {{ route('admin.categories.update', ['category' =>$category->id]) }} ">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-inputs">
                                <input type="text" name="category" placeholder="Category" value="{{ $category->name }}">
                                </div>
                                <div class="form-inputs">
                                    <button><i class="fa fa-plus-square"></i> Update Category </button>
                                </div>
                            </form>
                            </div>
                            <!-- /.box -->
                  
                          </div>
                    </div>
                </div>
            </div>
        </div>


@include('admin.layouts.footer')