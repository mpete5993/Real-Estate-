@include('admin.layouts.header')

        <div class="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 box-container"
                            style="margin-top: 20px; display:flex; justify-content:center; align-items: center;">
                            <!-- general form elements -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title"> <i class="fa fa-plus-square"
                                            style="margin-right:20px;color: #00c0ef;"></i> Edit Property</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form method="POST" action=" {{ route('admin.properties.update' , ['property' => $property->id]  )}} " enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PUT') }}

                                    <div class="form-inputs">
                                        <input type="text" name="title" placeholder="Title" value=" {{$property->title}} ">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-inputs">
                                                <input type="text" name="street" placeholder="Street" value="{{$property->street}} ">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-inputs">
                                                <input type="text" name="city" placeholder="City" value="{{$property->city}} ">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-inputs">
                                                <input type="text" name="zipcode" placeholder="zip code" value="{{$property->zipCode}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-inputs">
                                        <label for="">Select Province</label><br>
                                        <select name="province" id="">
                                            <option value="">Province</option>
                                            <option name="province" value="Northern Cape">Northern Cape</option>
                                            <option name="province" value="Western Cape">Western Cape</option>
                                            <option name="province" value="Eastern Cape">Eastern Cape</option>
                                            <option name="province" value="Gauteng">Gauteng</option>
                                            <option name="province" value="Limpopo">Limpopo</option>
                                            <option name="province" value="Free State">Free State</option>
                                            <option name="province" value="Mpumalanga">Mpumalanga</option>
                                            <option name="province" value="North West">North West</option>
                                            <option name="province" value="Kwa-Zulu Natal">Kwa-Zulu Natal</option>
                                        </select>
                                    </div>
                                    <div class="form-inputs">
                                        <input type="text" name="description" placeholder="Description" value=" {{$property->description}} ">
                                    </div>
                                    <div class="form-inputs">
                                        <input type="text" name="price" placeholder="Price"  value="{{$property->price}}">
                                    </div>
                                    <div class="form-inputs">
                                        <label for="">Select Category</label><br>
                                        <select name="category" id="">
                                            <option value="">Category</option>
                                            @foreach ($categories as $category)
                                                <option name="category" value="{{$category->id}}"> {{$category->name}} </option>
                                            @endforeach
                                        </select>
                                        <label for="">Status</label><br>
                                        <input type="radio" name="status" value="For Sale" >
                                        <span style="color: #777777;">For Sale</span>
                                        <input type="radio" name="status" value="For Rent">
                                        <span style="color: #777777;">For Rent</span>
                                        <input type="radio" name="status" value="Available">
                                        <span style="color: #777777;"> Available</span>
                                        <input type="radio" name="status" value="Sold">
                                        <span style="color: #777777;">Sold</span>
                                    </div>
                                    
                                    <div class="form-inputs">
                                        <label for="Image">Image</label><br>
                                        <img src="{{asset('/'.$property->image)}}" alt=""  width="150px" height="100px" style="object-fit: cover;">

                                            <input type="file" name="image">
                                    </div>
                                    <div class="form-inputs">
                                        <textarea class="ckeditor form-control" name="details"  >
                                            {{$property->details}}
                                        </textarea>
                                    </div>
                                    <div class="form-inputs">
                                        <button><i class="fa fa-plus-square"></i> Update Property </button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
    @include('admin.layouts.footer')