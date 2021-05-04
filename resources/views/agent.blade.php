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
                    <li>Agent Details</li>
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
                    <img src=" {{ asset('Images/'.$agent->avatar)}} " alt="">
                </div>
                
            </div>
            <div class="col-lg-8 col-md-12  col-sm-12">
                <div class="agentHeader">
                    <h6> {{ $agent->name}} </h6>
                </div>
                <div class="agentDescription">
                    <span class="agent-Status">
                        {{ $agent->status}} 
                    </span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Minima natus qui debitis autem corrupti hic quaerat dicta
                        eum voluptate nulla, incidunt aspernatur iure. Nemo eum
                        autem quaerat iure, odio sint repudiandae recusandae
                        inventore asperiores culpa ipsam cumque. Ad ab dolorum quisquam,
                        voluptas illum facere nostrum earum dolor voluptatum dignissimos
                        iste maxime quaerat perspiciatis exercitationem dolore ea. Eius
                        itaque maiores, dicta aperiam dolore, enim ad eos dolorem autem
                        velit perspiciatis rem ab ipsum nobis quisquam ut esse cupiditate
                        explicabo fugiat quae consequuntur iure eaque tempora praesentium?
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
                        nesciunt voluptatibus accusamus molestias ullam voluptatem.
                    </p>
                </div>
                <div class="property-details">
                    <ul>
                        <li>
                            <i class="fa fa-street-view"></i><span>JHB, Gauteng</span>
                        </li>
                        <li>
                            <i class="fa fa-briefcase"></i><span>BLM Real Estate Corp.</span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><span>(555) 366 - 00 - 00</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i><span>agentExample@gmail.com</span>
                        </li>
                    </ul>
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
                <h5>Listings by {{ $agent->name}} </h5>
            </div>
        </div>

        <div class="row">
            @if ($agent->property->count() > 0 )
                @foreach ($agent->property as $property)
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="property-item">
                        <div class="property-img">
                            <a href="{{ route('properties.show', $property->slug)}} ">
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
                            <a href="{{ route('properties.show', $property->slug)}} " class="status"> {{$property->status}} </a>
                            <span>R{{$property->price}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="property-count"> {{$agent->name}} has no properties yet </h6>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
<!---===== property List ====== ---->

@include('layouts.footer')