@include('admin.layouts.header')

        <div class="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 box-container" style="margin-top: 20px; ">
                            <!-- general form elements -->
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"> <i class="fa fa-plus-square" style="margin-right: 20px;color: #4da5e2;"></i> Add New tag</h3>
                              </div>
                              <!-- /.box-header -->
                              <!-- form start -->
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form method="POST" action=" {{ route('admin.tags.store') }} " >
                                    @csrf
                                    {{ method_field('POST') }}
                                  <div class="form-inputs">
                                      <input type="text" name="tag" placeholder="Tag" required>
                                  </div>
                                  <div class="form-inputs">
                                      <button><i class="fa fa-plus-square"></i> Add Tag </button>
                                  </div>
                              </form>
                              </div>
                            </div>
                            <!-- /.box -->
                  
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.footer')