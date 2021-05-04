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
                    <li>Agents</li>
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
            <div class="row" id="property-header">
                <div class="col-lg-6 col-md-6">
                    <h5>Our Agents</h5>
                </div>
            </div>
            <div class="row">
                @foreach ($agents as $agent)
                    <div class="col-lg-3 col-md-4  col-sm-6">
                        <div class="property-item">
                            <div class="property-img">
                                
                                <a href="{{ route('agent.show', $agent->id) }}"><img src=" {{asset('Images/'. $agent->avatar)}} " alt=""></a>
                            </div>
                            <div class="property-info">
                                <div class="title">
                                    <h6> {{ $agent->name}} </h6>
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
                                            <i class="fa fa-envelope"></i><span>{{ $agent->email}} </span>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="property-status">
                                <a href="{{ route('agent.show', $agent->id) }}" class="status">{{ $agent->status}} </a>
                                <span> {{$agent->property->count()}}  Items</span>
                            </div>
                        </div>
                    </div>
                @endforeach
               
            </div>
            <div class="" style="margin-bottom: 30px;">
                {{$agents->links()}}
            </div>
        </div>
    </div>
    <!---===== agents container====== ---->
    @include('layouts.footer')