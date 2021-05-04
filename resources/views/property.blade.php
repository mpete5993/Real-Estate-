@include('layouts.header')
<!---===== search property ====== ---->
<div class="search-property">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 property-title">
                <h5>Title Example</h5>
                <ul class="property-bread">
                    <li><a href="/">Home</a></li>
                    <li>-</li>
                    <li>Property Details</li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-12 property-search" >
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

<!---===== property details ====== ---->
<div class="property-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 bg- property-container">
                <div class="tabs">
                    <button onclick="showPanel(0, '#050e0e')">Photos</button>
                    <button onclick="showPanel(1, '#050e0e')">Street View</button>
                    <button onclick="showPanel(2, '#050e0e')"> Map</button>
                </div>
                <div class="tab-panel">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="details-img">
                                <img src=" {{ asset($property->image) }} " alt="">
                            </div>
                            <div class="details-img">
                                <img src=" {{ asset('Images/26.jpg')}} " alt="">
                            </div>
                            <div class="details-img">
                                <img src=" {{asset('Images/28.jpg')}} " alt="">
                            </div>
                            <div class="details-img">
                                <img src=" {{asset('Images/27.jpg')}} " alt="">
                            </div>
                            <div class="details-img">
                                <img src=" {{ asset('Images/30.jpg')}} " alt="">
                            </div>

                            <div class="img-gallery">
                                <div class="">
                                    <img src=" {{ asset($property->image) }}" alt="" class="img-btn" onclick="showImage(0)">
                                </div>
                                <div class="">
                                    <img src=" {{ asset('Images/26.jpg')}} " alt="" class="img-btn"  onclick="showImage(1)">
                                </div>
                                <div class="">
                                    <img src=" {{asset('Images/28.jpg')}} " alt="" class="img-btn"  onclick="showImage(2)">
                                </div>
                                <div class="">
                                    <img src=" {{ asset('Images/27.jpg')}} " alt="" class="img-btn"  onclick="showImage(3)">
                                </div>
                                <div class="">
                                    <img src=" {{ asset('Images/30.jpg')}} " alt="" class="img-btn"  onclick="showImage(4)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-panel p-1 bg-">
                    https://goo.gl/maps/qhe3dti7Y45r6FVL7
                </div>
                <div class="tab-panel p-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3485.596505858715!2d26.22239741453413!3d-29.117591382228934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e8fc5672a681aed%3A0x9b1c40d98ed6bd3a!2s40%20Fichardt%20St%2C%20Bloemfontein%20Central%2C%20Bloemfontein%2C%209301!5e0!3m2!1sen!2sza!4v1601360937606!5m2!1sen!2sza" 
					width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="col-lg-3 bg- property-infomation">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="property-info">
                            <div class="title">
                                <h6> {{ $property->title}}</h6>
                            </div>
                            <div class="property-details">
                                <ul>
                                    <li>
                                        <i class="fa fa-street-view"></i><span> {{ $property->street}}, {{ $property->city}} </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-map"></i><span> {{ $property->province}}, {{ $property->zipCode}}  </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i><span> {{ $property->description}}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bookmark"></i><span> {{ $property->category->name}}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-expand"></i><span>90 sqft</span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="property-status">
                            <a href="#"  class="status"> {{ $property->status}}</a>
                            <span>R {{ $property->price}} </span>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="agent-header">
                            <h6>Agent Details</h6>
                        </div>
                        <div class="property-agent">
                            <div class="agent-img">
                                <a href=" {{ route('agent.show', $property->user->id)}} "><img src=" {{ asset('Images/'.$property->user->avatar)}} " alt=""></a>
                            </div>
                            <div class="agent-details">
                                <h6> {{ $property->user->name}} </h6>
                                <ul>
                                    <li> <b>P.: </b>(555) 366 - 00 - 00</li>
                                    <li><b>E.: </b> {{ $property->user->email}} </li>
                                    <li><a href=" {{ route('agent.show', $property->user->id)}} ">View profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="more-info">
                            <h6>Get more information</h6>
                        </div>
                        <div class="request-details">
                            <div class="">
                                <input type="text" placeholder="Name">
                            <input type="email" name="" id="" placeholder="Email">
                            </div>
                            <div class="">
                                <button>request more details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
               <div class="general-info">
                <h5>General Information</h5>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Facere libero corrupti sed iusto, saepe aliquid vitae omnis numquam
                     ut ad expedita aliquam, distinctio exercitationem voluptates illum 
                     iure eum perferendis corporis, esse quisquam ipsa in sequi deserunt. 
                     Nemo, earum! Optio expedita itaque quaerat
                     reprehenderit totam necessitatibus ut tempora voluptatem veritatis quas?
                </p>
               </div>

                <div class="features">
                    <h5>Features</h5>
                <ul>
                    <li></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!---===== property details ====== ---->

<!---===== property List ====== ---->
<div class="property-container">
    <div class="container">
        <div class="row" id="property-header">
            <div class="col-lg-6 col-md-6">
                <h5>Related Properties</h5>
            </div>
        </div>

        <div class="row">
            @foreach ($relatedProperties as $relatedProperties)
            <div class="col-lg-3 col-md-4  col-sm-6">
                <div class="property-item">
                    <div class="property-img">
                        <a href=" {{ route('properties.show', $relatedProperties->slug)}} ">
                            <img src="{{ asset($relatedProperties->image) }}" alt=""></a>
                    </div>
                    <div class="property-info">
                        <div class="title">
                            <h6> {{ $relatedProperties->title}} </h6>
                        </div>
                        <div class="property-details">
                            <ul>
                                <li>
                                    <i class="fa fa-street-view"></i><span> {{ $property->street}}, {{ $property->city}} </span>
                                </li>
                                <li>
                                    <i class="fa fa-bed"></i><span> {{ $relatedProperties->description}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-expand"></i><span>90 sqft</span>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="property-status">
                        <a href="{{ route('properties.show', $relatedProperties->slug)}} " class="status"> {{ $relatedProperties->status}}</a>
                        <span>R  {{ $relatedProperties->price}}</span>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
<!---===== property List ====== ---->
<script>
    //get all buttons
    let tabButtons = document.querySelectorAll('.tabs button');
    let tabPanels = document.querySelectorAll('.property-container .tab-panel');

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


/*========= img tab ============== */

    //grab all img buttons & detail Image
    let imgBtn = document.querySelectorAll('.img-btn');
    let detailImage = document.querySelectorAll('.details-img');

    //imgBtn onclick
    function showImage(imgIndex){
        //looping through all imgBtn
        imgBtn.forEach(function(node){
            //setting color & background to null by default
            node.style.opacity = "0.2";
            
        });

        //setting panel display to none by default
    detailImage.forEach(function(node){
            node.style.display = "none";

        });

    //setting selected panel to flex by default
    detailImage[imgIndex].style.display = "block";
    imgBtn[imgIndex].style.opacity = "0.9";
    }
    

    //setting a default panel
    showImage(0);
    
/*========= img tab ============== */


</script>
@include('layouts.footer')