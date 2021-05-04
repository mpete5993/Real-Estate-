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
                    <li>My Profile</li>
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


<!---===== agents container====== ---->
<div class="agents-container">
    <div class="container">
        <div class="row agent-contents ">
            <div class="col-lg-4 col-md-12 col-sm-12 agent-detail-img">
                <div class="">
                    <img src="Images/{{$user->avatar}}  " alt="">
                </div>
                
            </div>
            <div class="col-lg-8 col-md-12  col-sm-12">
                <div class="agentDescription">
                    <div class="tabs">
                        <button onclick="showPanel(0, '#050e0e')">My Profile</button>
                        <button onclick="showPanel(1, '#050e0e')"> <i class="fa fa-edit"></i> Edit Profile</button>
                    </div>
                    <div class="tab-panel">
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <span class="agent-Status">
                                    {{$user->status}}  
                                </span>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Minima natus qui debitis autem corrupti hic quaerat dicta
                                    eum voluptate nulla, incidunt aspernatur iure. Nemo eum
                                    autem quaerat iure, odio sint repudiandae recusandae
                                    inventore asperiores culpa ipsam cumque. Ad ab dolorum quisquam,
                                    voluptas illum facere nostrum earum dolor voluptatum dignissimos
                                    iste maxime quaerat perspiciatis exercitationem dolore ea. 
                                    Ad ab dolorum quisquam,
                                    voluptas illum facere nostrum earum dolor voluptatum dignissimos
                                    iste maxime quaerat perspiciatis exercitationem dolore ea. 
                                    Ad ab dolorum quisquam,
                                    voluptas illum facere nostrum earum dolor voluptatum dignissimos
                                    iste maxime quaerat perspiciatis exercitationem dolore ea. 
                                </p>
                                <p>
            
                                    Illo, numquam delectus deserunt quas, sequi id iure laborum soluta n
                                    emo odio perspiciatis. Similique nesciunt eum asperiores
                                    natus sit illum consequuntur perspiciatis adipisci,
                                    incidunt ducimus odit recusandae corporis tempora
                                    id eligendi, et excepturi quod quo quia laudantium
                                    tempore, vitae maxime voluptatem voluptate. Nobis molestias
                                    temporibus labore asperiores pariatur atque earum id voluptates,
                                    commodi quos animi libero perferendis. Debitis voluptate amet
                                    nesciunt voluptatibus accusamus molestias ullam voluptatem. Ad ab dolorum quisquam,
                                    voluptas illum facere nostrum earum dolor voluptatum dignissimos
                                    iste maxime quaerat perspiciatis exercitationem dolore ea. 
                                    Ad ab dolorum quisquam,
                                    voluptas illum facere nostrum earum dolor voluptatum dignissimos
                                    iste maxime quaerat perspiciatis exercitationem dolore ea. 
                                </p>
                            </div>
                        </div>
                        <div class="property-details">
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i><span>JHB, Gauteng</span>
                                </li>
                                <li>
                                    <i class="fa fa-briefcase"></i><span>BLM Real Estate Corp.</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i><span>(555) 366 - 00 - 00</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i><span>{{$user->email}}  </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-panel">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action=" {{route('profile.edit')}} " method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-inputs">
                                                <input type="text" name="name" value=" {{ old('name',$user->name)}}" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-inputs">
                                                <input type="text" name="email"  value="{{old('email',$user->email)}} "  placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-inputs">
                                        <label for="tags">Change Avatar</label><br>
                                        <input type="file" name="avatar" >
                                        <input type="hidden" name="image_name" value="{{Auth::user()->avatar}}">
                                    </div>
                                    <div class="form-inputs">
                                        <label for="tags">Status</label><br>
                                        <select name="status" id="">
                                            <option value="">Status</option>
                                            <option name="" value="Available">Available</option>
                                            <option name="" value="Busy">Busy</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-inputs">
                                        <input type="text" name="password" placeholder="Password">
                                        <span class="text-info">Leave blank to keep your password</span>
                                    </div>
                                    <div class="form-inputs">
                                        <button>Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---===== agents container====== ---->
<!---===== property List ====== ---->
<div class="property-container">
    <div class="container">
        <div class="row" id="property-header">
            <div class="col-lg-6 col-md-6">
                <h5>My List</h5>
            </div>
        </div>

        <div class="row">

            @if ($user->property->count() > 0)
                @foreach ($user->property as $property)
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="property-item">
                        <div class="property-img">
                            <a href=" {{ route('properties.show', $property->slug)}}">
                                <img src=" {{ asset('/'.$property->image)}} " alt="">
                            </a>
                        </div>
                        <div class="property-info">
                            <div class="title">
                                <h6> {{$property->title}} </h6>
                            </div>
                            <div class="property-details">
                                <ul>
                                    <li>
                                        <i class="fa fa-street-view"></i><span>{{ $property->street}}, {{ $property->city}} </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-map"></i><span> {{ $property->province}} </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i><span>{{ $property->description}}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-expand"></i><span>90 sqft</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="property-status">
                            <a href="{{ route('properties.show', $property->slug)}}" class="status"> {{$property->status}} </a>
                            <span>R{{$property->price}} </span>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="property-count"> {{$user->name}} has no properties yet </h6>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!---===== property List ====== ---->
<script>
    //get all buttons
    let tabButtons = document.querySelectorAll('.tabs button');
    let tabPanels = document.querySelectorAll('.agentDescription .tab-panel');

    //button onclick
    function  showPanel(panelIndex, colorCode){
        //looping through all buttons
        tabButtons.forEach(function(node){
            //setting color & background to null by default
            node.style.backgroundColor = "";
            node.style.color = "";

        });

        //setting background & color of the current button to 
        tabButtons[panelIndex].style.backgroundColor = colorCode;
        tabButtons[panelIndex].style.color = "#ffffff";

        //setting panel display to none by default
        tabPanels.forEach(function(node){
            node.style.display = "none";
            node.style.color = "";

        });
        //setting selected panel to flex by default
        tabPanels[panelIndex].style.display = "block";
    }
    //setting a default panel
    showPanel(0, '#050e0e');
</script>
@include('layouts.footer')