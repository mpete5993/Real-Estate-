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
                    <li>Contact Us</li>
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


<!---===== contact container====== ---->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 contact-header">
            <h5>Contact Us</h5>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, voluptatibus? Repellat corporis
                excepturi nisi non incidunt, magnam blanditiis, modi sint ratione sapiente libero illo nesciunt
                accusantium. Recusandae quaerat fuga totam blanditiis earum animi, quas nemo vel magni neque fugit
                esse inventore commodi voluptates asperiores eius accusantium officia delectus eveniet! Dicta 
                voluptatibus? Repellat corporis excepturi nisi non incidunt, magnam blanditiis, modi sint ratione sapiente libero illo nesciunt
                accusantium. Recusandae quaerat fuga totam blanditiis earum animi, quas nemo .
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 col-md-12 contact-form">
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" placeholder="Firstname">
                </div>
                <div class="col-lg-6">
                    <input type="text" placeholder="Lastname">
                </div>
                <div class="col-lg-6">
                    <input type="email" placeholder="Email">
                </div>
                <div class="col-lg-6">
                    <input type="text" placeholder="Subject">
                </div>
                <div class="col-lg-12">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                </div>
                <div class="col-lg-12">
                    <button>Send <i class="fa fa-arrow-circle-o-right"></i></button>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-12 contactus-info">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3485.596505858715!2d26.22239741453413!3d-29.117591382228934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e8fc5672a681aed%3A0x9b1c40d98ed6bd3a!2s40%20Fichardt%20St%2C%20Bloemfontein%20Central%2C%20Bloemfontein%2C%209301!5e0!3m2!1sen!2sza!4v1601360937606!5m2!1sen!2sza" 
					width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<!---===== contact container====== ---->

@include('layouts.footer')