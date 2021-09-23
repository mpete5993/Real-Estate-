<div class="scroll-to-top-style2 scroll-to-target" data-target="html" style="display: block;">
    <a href="#navbar" style="color: #fff"><span class="fa fa-angle-up"></span></a>
</div>

  <!---===== footer ====== ---->
    <section class="footer">
        <div class="container">
            <div class="row" id="footer-content">
                <div class="col-lg-3 col-md-3 col-sm-6 main-links">
                    <h6>Real Estate</h6>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Clients</a></li>
                        <li><a href="">Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6  main-links">
                    <h6>Support</h6>
                    <ul>
                        <li><a href="">Help Center</a></li>
                        <li><a href="">Live Chat</a></li>
                        <li><a href="">Features</a></li>
                        <li><a href="">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 contact-info">
                    <h6>Contact Info</h6>
                    <p>
                        Fusce nec gravida risus. <br>
                        Pellentesq eros magna, lobortis elementum.
                    </p>
                    <ul>
                        <li>P.: (555) 366 - 00 - 00</li>
                        <li>E.: support@bestwebsoft.zendesk.com

                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 Newsletter">
                    <h6>Our Newsletter</h6>
                    <div class="">
                        <p>Have any Question in mind ?</p>
                        <p>Let us help you.</p>
                    </div>
                    <div class="subscription">
                        <input type="text" name="" id="" placeholder="Email">
                        <button><i class="fa fa-check" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <span class="signature">Made with <i class="fa fa-heart text-danger"></i> by : Mpete Bataung</span>
                </div>
                <div class="col-lg-6 col-md-6 social-links">
                    <ul>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-github"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!---===== footer ====== ---->






    <script src=" {{secure_asset('js/main.js')}} "></script>
    <script>
        //get all buttons
        let tabButtons = document.querySelectorAll('.tabs button');
        let tabPanels = document.querySelectorAll('.tab-container .tab-panel');

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
            tabButtons[panelIndex].style.color = "#fff";

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
</body>
    @jquery
    @toastr_js
    @toastr_render
</html>
