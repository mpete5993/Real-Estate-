@include('admin.layouts.header')

        <div class="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 box-container" style="margin-top: 20px; ">
                            <!-- general form elements -->
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"> <i class="fa fa-plus-square" style="margin-right: 20px;color: #00c0ef;"></i> Edit {{$user->name}} </h3>
                              </div>
                              <!-- /.box-header -->
                              
                              <!-- form start -->
                              <form method="POST" action=" {{ route('admin.users.update', ['user' =>$user->id ]) }} " enctype="multipart/form-data">
                                  @csrf
                                  {{ method_field('PUT') }}

                                <div class="form-inputs">
                                    <input type="text"  name="name" placeholder="Name" value=" {{ $user->name }} " >
                                    <input type="text" name="email" placeholder="Email" value=" {{ $user->email }} " >
                                    
                                </div>
                                <div class="form-inputs">
                                    <label for="Image">Avatar</label><br>
                                    <img src=" {{ asset('Images/'.$user->avatar)}} " alt="" width="100px" height="100px">
                                        <input type="file" name="avatar">
                                </div>
                                    @foreach ($roles as $role)
                                        <div class="">
                                            <input type="checkbox" name="roles[]"
                                             value=" {{ $role->id}} " {{$user->hasAnyRole($role->name)? 'checked': ''}}
                                             style="height:10px;" >
                                            <label for=""  style="height:10px;font-size:12px; font-weight:normal;"> {{$role->name}} </label>
                                        </div>
                                    @endforeach
                                <div class="form-inputs">
                                    <button> Update </button>
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