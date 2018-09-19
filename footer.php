<section class="footer-section">
    <div class="container-fluid footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 fb-1">
                    <h4>Proventus</h4>
                    <p>Proventus delivers digital transformation and technology services from ideation to execution, enabling our clients to outperform the competition. </p>

                    <div class="f-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>

                </div>
                <div class="col-md-3 fb-2">
                    <h4>Services</h4>
                    <ul>
                        <li>- Cloud and Big data services</li>
                        <li>- Engineering Services</li>
                        <li>- Mobility Services</li>
                        <li>- Development Accelerators</li>
                        <li>- QA Services</li>
                        <li>- QA Mobile</li>

                    </ul>
                </div>
                <div class="col-md-3 fb-2">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Home</a></li>
                        <li><a href="service.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Services</a></li>
                        <li><a href="careers.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Careers</a></li>
                        <li><a href="contact.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 fb-4">
                    <h4>Contact</h4>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> No 1/1, 15/2,<br>
                        Banz Place, Colombo 07  , <br>
                        Sri Lanka.
                    </p>
                    <p style="margin-bottom: 5px;"><i class="fa fa-phone" aria-hidden="true"></i> + 94 767223688</p>
                    <p>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:info@proventus-technologies.com" style="color: rgb(160, 160, 159);">info@proventus-technologies.com
                        </a>
                    </p>

                </div>
            </div>
        </div> 
    </div>
    <div class="container-fluid footer-bot">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 fb-left">
                    <p>&copy; Copyright <strong>Proventus</strong> 2018. All Rights Reserved</p>
                </div>
                <div class="col-md-6 col-12 fb-right">
                    <p>Designed & Developed by <a href="http://wirelessshop.lk/" target="_blank">wirlessshop</a></p>
                </div>
            </div>
        </div> 
    </div>
</section>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<script type="text/javascript" src="dist/js/jquery.flexisel.js"></script>
<script type="text/javascript">
    $("#flexiselDemo3").flexisel({
        visibleItems: 6,
        itemsToScroll: 1,
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        }
    });
</script>

<!--script for wow effect-->
<script src="dist/wow/js/wow.js"></script>
<script>
    wow = new WOW(
            {
                animateClass: 'animated',
                offset: 100,
                callback: function (box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            }
    );
    wow.init();
</script>

<!--script for slick slider-->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="dist/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function () {
        $(".lazy").slick({
            autoplay: true,
            autoplaySpeed: 2000,
            fade: true,
            lazyLoad: 'ondemand',
            infinite: true
        });
    });
</script>







