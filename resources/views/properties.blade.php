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
                    <li>Property List</li>
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

<!---===== property List ====== ---->
<div class="property-container">
    <div class="container">
        <div class="row" id="property-header">
            <div class="col-lg-6 col-md-6">
                <h5> Properties List</h5>
            </div>
        </div>

        <div class="row">
            @foreach ($properties as $property)
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="property-item">
                        <div class="property-img">
                            <a href=" {{ route('properties.show', $property->slug)}} "><img src=" {{ asset($property->image)}} " alt=""></a>
                        </div>
                        <div class="property-info">
                            <div class="title">
                                <h6>{{ $property->title}} </h6>
                            </div>
                            <div class="property-details">
                                <ul>
                                    <li>
                                        <i class="fa fa-street-view"></i><span> {{ $property->street}}, {{ $property->city}} </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-map"></i><span> {{ $property->province}} </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i><span>{{ $property->description}} </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-expand"></i><span>90 sqft</span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="property-status">
                            <a href="{{ route('properties.show', $property->slug)}} " class="status">{{ $property->status}} </a>
                            <span>R {{ $property->price}} </span>
                        </div>
                    </div>
                </div>
                @endforeach
            
        </div>
        {{ $properties->links() }}
        
            
    </div>
</div>
<!---===== property List ====== ---->
@include('layouts.footer')