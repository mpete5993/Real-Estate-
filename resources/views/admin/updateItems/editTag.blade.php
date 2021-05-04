@include('admin.layouts.header')

        <div class="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="admin-header">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-2 small-box">
                                        <div class="box-info">
                                            <h6>10</h6>
                                            <span>Users</span>
                                            <!-- <div class="">
                                            <a href="">View users <i class="fa fa-arrow-circle-o-right"></i></a>

                                            </div> -->
                                        </div>
                                        <div class="box-icon">
                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 small-box">
                                        <div class="box-info">
                                            <h6>5</h6>
                                            <span>tags</span>
                                        </div>
                                        <div class="box-icon">
                                            <i class="fa fa-tags"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 small-box">
                                        <div class="box-info">
                                            <h6>2</h6>
                                            <span>categories</span>
                                            <!-- <div class="">
                                            <a href="">View users <i class="fa fa-arrow-circle-o-right"></i></a>

                                            </div> -->
                                        </div>
                                        <div class="box-icon">
                                            <i class="fa fa-bookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 small-box">
                                        <div class="box-info">
                                            <h6>17</h6>
                                            <span>Properties</span>
                                            <!-- <div class="">
                                            <a href="">View users <i class="fa fa-arrow-circle-o-right"></i></a>

                                            </div> -->
                                        </div>
                                        <div class="box-icon">
                                            <i class="fa fa-building"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 small-box">
                                        <div class="box-info">
                                            <h6>8</h6>
                                            <span>Posts</span>
                                            <!-- <div class="">
                                            <a href="">View users <i class="fa fa-arrow-circle-o-right"></i></a>

                                            </div> -->
                                        </div>
                                        <div class="box-icon">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 box-container" style="margin-top: 20px; ">
                            <!-- general form elements -->
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"> <i class="fa fa-plus-square" style="margin-right: 20px;color: #00c0ef;"></i> Add New tag</h3>
                              </div>
                              <!-- /.box-header -->
                              <!-- form start -->
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form method="POST" action=" {{ route('admin.tags.update', ['tag' =>$tag->id]) }} " >
                                    @csrf
                                    {{ method_field('PUT') }}
                                  <div class="form-inputs">
                                      <input type="text" name="tag" placeholder="Tag" value=" {{$tag->name }}">
                                  </div>
                                  <div class="form-inputs">
                                      <button><i class="fa fa-plus-square"></i> Update Tag </button>
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