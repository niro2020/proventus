<nav class="navbar navbar-expand-lg navbar-light bg-dark menu-box">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <!--<img src="images/logo.jpg" alt="">-->
            <span class="blue-txt">PRO</span>VENTUS<br>
            <span class="logo-txt">Enabling Digital Transformation through Innovations</span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto menu-bar" id="menu-bar">
                <li class="nav-item">
                    <a class="nav-link <?php if($page_id==1){echo 'active-link';}?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page_id==2){echo 'active-link';}?>" href="service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page_id==3){echo 'active-link';}?>" href="careers.php">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page_id==4){echo 'active-link';}?>" href="contact.php">Contact</a>
                </li>               
            </ul>
        </div>
    </div>
</nav>