@include('layouts.header')


    <!---===== slideshow ====== ---->
    <div class="wrapper">
        <div class="prev-btn"><i class="fa fa-chevron-left"></i></div>

        <div class="slides-container">
            <div class="slide-image">
                <img src="Images/main-slider/7.jpg
                " alt=""> 
            </div>
            <div class="slide-image">
                <img src="Images/main-slider/5.jpg
                " alt=""> 
            </div>
            <div class="slide-image">
                <img src="Images/main-slider/4.jpg
                " alt=""> 
            </div>
            <div class="slide-image">
                <img src="Images/main-slider/9.jpg
                " alt=""> 
            </div>
        </div>

        <div class="next-btn"><i class="fa fa-chevron-right"></i></div>

        <div class="navigation-dots">
        </div>
    </div>
    <!---===== slideshow ====== ---->

    <!---===== search section ====== ---->
    <section class="s-section">
        <div class="container">
            <div class="row search-container">
                <div class="col-lg-12 col-md-12 tab-container">
                    <div class="tabs">
                        <button onclick="showPanel(0, '#050e0e')">For Sale</button>
                        <button onclick="showPanel(1, '#050e0e')">For Rent</button>
                    </div>
                    <div class="tab-panel">
                        <form action="" method="get">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 ">
                                    <div class="location">
                                        <span><i class="fa fa-map-marker"></i></span><input type="text" name="Location" id="" placeholder="Location">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 bg-">
                                    <div class="property-type">
                                        <select name="property-type" id="">
                                            <option value="">Property type</option>
                                            <option value="Apartment">Apartment</option>
                                            <option value="Villa">Villa</option>
                                            <option value="House">House</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="row">
                            <div class="col-lg-3 col-md-8">
                                <div class="property-price">
                                    <select name="max-price" id="">
                                        <option value="">Max. Price</option>
                                        <option value="30000">30000</option>
                                        <option value="40000">40000</option>
                                        <option value="50000">50000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="property-price">
                                    <select name="min-price" id="">
                                        <option value="">Min. Price</option>
                                        <option value="1000">1000</option>
                                        <option value="2000">2000</option>
                                        <option value="3000">3000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-8">
                                <div class="property-price">
                                    <select name="bedroom" id="">
                                        <option value="">Bathroom</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4  bedroom">
                                <div class="property-bedroom">
                                    <select name="bathroom" id="">
                                        <option value="">Bathroom</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="">
                                    <button class="search"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="tab-panel">
                        <form action="" method="get">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 ">
                                    <div class="location">
                                        <span><i class="fa fa-map-marker"></i></span><input type="text" name="Location" id="" placeholder="Location">
                                    </div>
                                </div>
                            </div>
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="property-type">
                                    <select name="property-type" id="">
                                        <option value="">Property type</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Villa">Villa</option>
                                        <option value="House">House</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-8">
                                <div class="property-price">
                                    <select name="bedroom" id="">
                                        <option value="">Bathroom</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4  bedroom">
                                <div class="property-bedroom">
                                    <select name="bathroom" id="">
                                        <option value="">Bathroom</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="">
                                    <button class="search">search</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---===== search section ====== ---->


    <!---===== property List ====== ---->
    <div class="property-container">
        <div class="container">
            <div class="row" id="property-header">
                <div class="col-lg-6 col-md-6">
                    <h5>Recent Properties</h5>
                </div>
            </div>

            <div class="row">
                
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="property-item">
                        <div class="property-img">
                            <a href="property"><img src="Images/17.jpg" alt=""></a>
                        </div>
                        <div class="property-info">
                            <div class="title">
                                <h6>Title Example</h6>
                            </div>
                            <div class="property-details">
                                <ul>
                                    <li>
                                        <i class="fa fa-street-view"></i><span>JHB, Gauteng</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i><span>5 bedrooms, 1 bathroom</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-expand"></i><span>90 sqft</span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="property-status">
                            <a href="#" class="status">For Sale</a>
                            <span>$120,000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="property-item">
                        <div class="property-img">
                            <img src="Images/22.jpg
                            " alt="">
                        </div>
                        <div class="property-info">
                            <div class="title">
                                <h6>Title Example</h6>
                            </div>
                            <div class="property-details">
                                <ul>
                                    <li>
                                        <i class="fa fa-street-view"></i><span>CT, Western Cape</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i><span>5 bedrooms, 1 bathroom</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-expand"></i><span>90 sqft</span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="property-status">
                            <a href="#" class="status">For Rent</a>
                            <span>$120,000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="property-item">
                        <div class="property-img">
                            <img src="Images/18.jpg
                            " alt="">
                        </div>
                        <div class="property-info">
                            <div class="title">
                                <h6>Title Example</h6>
                            </div>
                            <div class="property-details">
                                <ul>
                                    <li>
                                        <i class="fa fa-street-view"></i><span>KBY, Northen Cape</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i><span>5 bedrooms, 1 bathroom</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-expand"></i><span>90 sqft</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="property-status">
                            <a href="#" class="status">For Sale</a>
                            <span>$120,000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="property-item">
                        <div class="property-img">
                            <img src="Images/23.jpg
                            " alt="">
                        </div>
                        <div class="property-info">
                            <div class="title">
                                <h6>Title Example</h6>
                            </div>
                            <div class="property-details">
                                <ul>
                                    <li>
                                        <i class="fa fa-street-view"></i><span>BLM, Free State</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i><span>5 bedrooms, 1 bathroom</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-expand"></i><span>90 sqft</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="property-status">
                            <a href="#" class="status">For Sale</a>
                            <span>$120,000</span>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h5 class="viewmore"><a href=" {{ url('properties ')}} ">View more</a></h5>
                </div>
            </div>
        </div>
    </div>
    <!---===== property List ====== ---->

    <!---===== blog post  ====== ---->
    <div class="post-container">
        <div class="container">
            <div class="row" id="property-header">
                <div class="col-lg-6 col-md-6">
                    <h5>Latest posts</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="latest_post_container">
                        <div class="latest_post_img">
                            <a href=" {{ url('post ')}} "><img src="Images/background/1.jpg" alt=""></a>
                        </div>
                        <div class="latest_post_content">
                            <div class="">
                                <h6>Title Example</h6>
                            <p>Posted by Billy Doe on Feb 21, 2012</p>
                            </div>
                            <div class="">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique hic 
                                    quo voluptates dolores tempore,
                                     amet placeat, velit quas modi dignissimos iste alias maxime quos 
                                     nesciunt consequuntur natus consecteturs?
                                </p>

                            </div>
                        </div>
                        <div class="">
                            <a href=" {{ url('post ')}} " class="learn_more">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="latest_post_container">
                        <div class="latest_post_img">
                            <a href=" {{ url('post ')}}"><img src="Images/background/2.jpg" alt=""></a>
                        </div>
                        <div class="latest_post_content">
                            <div class="">
                                <h6>Title Example</h6>
                            <p>Posted by Billy Doe on Feb 21, 2012</p>
                            </div>
                            <div class="">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique hic 
                                    quo voluptates dolores tempore,
                                     amet placeat, velit quas modi dignissimos iste alias maxime quos 
                                     nesciunt consequuntur natus consecteturs?
                                </p>

                            </div>
                        </div>
                        <div class="">
                            <a href=" {{ url('post ')}} " class="learn_more">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="latest_post_container">
                        <div class="latest_post_img">
                            <a href=" {{ url('post ')}}"><img src="Images/background/7.jpg" alt=""></a>
                        </div>
                        <div class="latest_post_content">
                            <div class="">
                                <h6>Title Example</h6>
                            <p>Posted by Billy Doe on Feb 21, 2012</p>
                            </div>
                            <div class="">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique hic 
                                    quo voluptates dolores tempore,
                                     amet placeat, velit quas modi dignissimos iste alias maxime quos 
                                     nesciunt consequuntur natus consecteturs?
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <a href=" {{ url('post ')}} " class="learn_more">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---===== blog post  ====== ---->

    <!---===== testimonial  ====== ---->
    <section>
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                   <div class="Testimonials_header">
                    <h2>Testimonials</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="Testimonials">
                        <div class="quote_icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="single-testimonial-item">

                            <div class="inner-content">
                                <div class="client-info">
                                    <h3>Shelly Johnson</h3>
                                    <span>Bloemfontein</span>
                                </div>
                                <div class="img-box">
                                    <img src="Images/clients/avatar-9.jpg
                                    " alt="Awesome Image">
                                </div>
                                <div class="text-box">
                                    <p>Your guys were great knowledgeable, well experienced, efficient and neat. A true to work with Crystalo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="Testimonials">
                        <div class="quote_icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="single-testimonial-item">

                            <div class="inner-content">
                                <div class="client-info">
                                    <h3>Shelly Johnson</h3>
                                    <span>Bloemfontein</span>
                                </div>
                                <div class="img-box">
                                    <img src="Images/clients/avatar-4.jpg
                                    " alt="Awesome Image">
                                </div>
                                <div class="text-box">
                                    <p>Your guys were great knowledgeable, well experienced, efficient and neat. A true to work with Crystalo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="Testimonials">
                        <div class="quote_icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="single-testimonial-item">

                            <div class="inner-content">
                                <div class="client-info">
                                    <h3>Shelly Johnson</h3>
                                    <span>Bloemfontein</span>
                                </div>
                                <div class="img-box">
                                    <img src="Images/clients/avatar-5.jpg
                                    " alt="Awesome Image">
                                </div>
                                <div class="text-box">
                                    <p>Your guys were great knowledgeable, well experienced, efficient and neat. A true to work with Crystalo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---===== testimonial  ====== ---->
   

@include('layouts.footer')