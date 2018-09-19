<?php
$page_id = 4;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include 'header.php'; ?>
    </head>

    <body>

        <!-- Navigation -->
        <?php include 'menu.php'; ?>

        <section class="container-fluid inner-page-banner map-page vx-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Home / Contact</h4>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="container-fluid sec-box pad-50 main-sec3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 topic-box">
                        <h3 class="wow fadeInDown">GET IN TOUCH</h3>
                        <hr class="line wow fadeInDown">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 contact-left">
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> No 1/1, 15/2, <br>
                            &nbsp;&nbsp;&nbsp; Banz Place, Colombo 07.<br>
                            &nbsp;&nbsp;&nbsp; Sri Lanka.
                        </p>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i> + 94 767223688
                        </p>
                        <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:info@proventus-technologies.com">info@proventus-technologies.com
                            </a>
                        </p>
                        <div class="f-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a>

                        </div>

                    </div>
                    <div class="col-md-6 contact-right">
                        <form name="sentMessage" id="contactForm" novalidate="">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="text" class="form-control" id="name" required="" data-validation-required-message="Please enter your name." placeholder="Name">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="tel" class="form-control" id="phone" required="" data-validation-required-message="Please enter your phone number." placeholder="Phone">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="email" class="form-control" id="email" required="" data-validation-required-message="Please enter your email address." placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <textarea rows="5" cols="100" class="form-control" id="message" required="" data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn more-btn" id="sendMessageButton">Send Message</button>
                        </form>
                    </div>
                </div>
                

                <div class="row map-box">
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.614981335333!2d79.84342231529294!3d6.936534994988351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25926c7806b77%3A0x4f47fdbdb2a2896b!2sW.I.+Tel+Solutions+(Pvt)+Ltd!5e0!3m2!1sen!2slk!4v1532328985106" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>


    </body>

</html>
