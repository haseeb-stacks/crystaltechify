<!DOCTYPE html>
<!-- language -->
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="layerdrops">
    <meta name="description" content="">

    <!-- ======== Page title ============ -->
    <title>Login || Nionx || SEO & Digital Marketing HTML Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/images/favicons/apple-touch-icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900&amp;family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- ===========  All Stylesheet ================= -->
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <!--  bootstrap-select css plugins -->
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <!--  fontawesome css plugins -->
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <!--  jquery-ui css plugins -->
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <!--  jarallax css plugins -->
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/vendors/cyber-icons/style.css">
    <!--  slider css plugins -->
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/cyber.css">
</head>

<body class="custom-cursor">
    <?php
    // Include database connection file

    include_once('config.php');
    if (isset($_POST['submit'])) {
        $username = $con->real_escape_string($_POST['username']);
        $password = $con->real_escape_string(md5($_POST['password']));
        $name     = $con->real_escape_string($_POST['name']);
        $role     = $con->real_escape_string($_POST['role']);
        $query  = "INSERT INTO admins (name,username,password,role) VALUES ('$name','$username','$password','$role')";
        $result = $con->query($query);
        if ($result == true) {
            header("Location:signin.php");
            die();
        } else {
            $errorMsg  = "You are not Registred..Please Try again";
        }
    }
    ?>
    <!-- Custom Cursor -->


    <div class="page-wrapper">
        <header class="main-header" id="navbar">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="index.php">
                            <img src="assets/images/white-logo.png" alt="Nionx HTML" width="150">
                        </a>
                    </div><!-- /.main-header__logo -->

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li class="dropdown">
                                <a href="services.php">Service</a>
                                <ul>
                                    <li><a href="web-development-services.php">Website Development</a></li>
                                    <li><a href="mobile-app-development-services.php">Mobile App Development</a></li>
                                    <li><a href="custom-software-development-services.php">Custom Software
                                            Development</a></li>
                                    <li><a href="graphic-designing-services.php">Graphic Designing</a></li>
                                    <li><a href="content-writing-services.php">Content Writing</a></li>
                                    <li><a href="social-media-marketing-services.php">Social Media Marketing</a></li>
                                    <li><a href="video-editing-and-animation-services.php">Video Editing and
                                            Animation</a></li>
                                    <li><a href="digital-marketing-services.php">Digital Marketing</a></li>
                                    <li><a href="ecommerce-development-services.php">E-commerce Solution</a></li>
                                    <li> <a href="salesforce-services.php">Sales Force</a></li>
                                    <li><a href="seo-services.php">SEO</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="portfolio.php">Portfolio</a>
                            </li>

                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->

                    <div class="main-header__right">
                        <!-- <a href="contact.php" class="main-header__contact__btn cyber-btn">Contact Us Us</a> -->
                        <div class="main-header__right__info">
                            <a href="tel:+8801775-338747" class="info__item--call">
                                <div class="info__item__icon">
                                    <i class="icon-phone-1"></i>
                                </div>
                                <div class="info__item__content">
                                    <span class="info__item__content__text"><b>CALL US:</b></span>
                                    <h6 class="info__item__content__call">(614) 714-6688</h6>
                                </div>
                            </a>
                            <a href="#" class="search-toggler info__item">
                                <i class="icon-search" aria-hidden="true"></i>
                                <span class="sr-only">Search</span>
                            </a><!-- /.search-toggler -->
                            <a href="login.php" class="info__item">
                                <i class="icon-user" aria-hidden="true"></i>
                                <span class="sr-only">User</span>
                            </a><!-- /.thm-btn main-header__btn -->
                        </div><!-- /.main-header__right__item -->
                        <div class="mobile-nav__btn mobile-nav__btn--one mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->
        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title">Sign Up</h2>
                <ul class="cyber-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Sign Up</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <!-- Login Start -->


        <section class="login-page">
            <div class="container">
                <div class="login-page__inner">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">

                            <?php if (isset($errorMsg)) { ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <?php echo $errorMsg; ?>
                                </div>
                            <?php } ?>
                            <form action="" method="POST" class="login-page__form">
                                <div class="form-group login-page__form-input-box">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required="">
                                </div>
                                <div class="form-group login-page__form-input-box">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Username" required="">
                                </div>
                                <div class="form-group login-page__form-input-box">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required="">
                                </div>
                                <div class="form-group login-page__form-input-box">
                                    <label for="role">Role:</label>
                                    <select class="form-control" name="role" required="">
                                        <option value="">Select Role</option>
                                        <option value="super_admin">Super admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="manager">Manager</option>
                                    </select>
                                </div>
                                <div class="form-group login-page__form-input-box">
                                    <p>Already have account ?<a href="signin.php"> Login</a></p>
                                    <input type="submit" name="submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Login End -->
    <footer class="main-footer @@extraClassName">
        <div class="main-footer__bg" style="background-image: url(assets/images/backgrounds/footer-bg-1-1.png);"></div>
        <div class="main-footer__top">
            <div class="container">
                <div class="main-footer__inner">

                </div>

            </div><!-- /.container -->
        </div><!-- /.main-footer__top -->

        <div class="main-footer__middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="footer-widget">
                            <div class="footer-widget--links mb-4">
                                <a href="index.php" class="main-footer__inner-logo">
                                    <img src="assets/images/white-logo.png" width="149" alt="logo">
                                </a>
                            </div><!-- /.footer-widget -->
                            <div class="main-footer__inner-social">
                                <a href="https://facebook.com/"> <i class="icon-facebook" aria-hidden="true"></i> <span class="sr-only">Facebook</span></a>
                                <a href="https://www.linkedin.com/"><i class="icon-linkedin" aria-hidden="true"></i><span class="sr-only">Linkedin</span></a>
                                <a href="https://twitter.com/"><i class="icon-twitter" aria-hidden="true"></i><span class="sr-only">Twitter</span></a>
                                <a href="https://youtube.com/"> <i class="icon-youtube" aria-hidden="true"></i> <span class="sr-only">Youtube</span></a>
                            </div><!-- /.footer-widget__social -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6 col-xl-3">
                        <div class="footer-widget">
                            <div class="footer-widget--links">
                                <h4 class="footer-widget__title">Services</h4>
                                <ul class="list-unstyled footer-widget__links">
                                    <li class="footer-widget__links__item"><a href="web-development-services.php">Website Development</a></li>
                                    <!-- <li class="footer-widget__links__item"><a href="team.html">Meet the Team</a></li> -->
                                    <li class="footer-widget__links__item"><a href="mobile-app-development-services.php">Mobile App Development</a></li>
                                    <li class="footer-widget__links__item"><a href="graphic-designing-services.php">Graphics Designing</a></li>
                                    <li class="footer-widget__links__item"><a href="salesforce-services.php">Sales
                                            Force</a></li>
                                    <li class="footer-widget__links__item"><a href="seo-services.php">SEO</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="footer-widget">
                            <div class="footer-widget--links">
                                <h4 class="footer-widget__title">Products</h4>
                                <ul class="list-unstyled footer-widget__links">
                                    <li class="footer-widget__links__item"><a href="#">AutoBiz CRM</a></li>
                                    <li class="footer-widget__links__item"><a href="#"> AutoBiz ERP </a></li>
                                    <li class="footer-widget__links__item"><a href="#"></a></li>

                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6 col-xl-3">
                        <div class="footer-widget">
                            <div class="footer-widget--about">
                                <h4 class="footer-widget__title">Contact Us</h4>
                                <ul class="list-unstyled footer-widget__info">
                                    <li class="footer-widget__info__item"> <span class="footer-widget__text"><b style="color: #0D6EFD;">USA (Head Office):</b> <br>Suit: 1276, 767
                                            Broadway, Manhattan, NY 10003 U.S</span></li>
                                    <li class="footer-widget__info__item"> <span class="footer-widget__text"><b style="color: #0D6EFD;">Branch:</b> <br>PO BOX 3323 Dublin, OH 43016.
                                            U.S</span></li>

                                    <li class="footer-widget__info__item"> <i class="icon-phone-1" aria-hidden="true"></i> <a href="tel:(614)714-6690">(614) 714-6688</a></li>
                                    <li class="footer-widget__info__item"> <i class="icon-envelope" aria-hidden="true"></i> <a href="mailto:info@cyberxapp.com">info@cyberxapp.com</a></li>
                                </ul><!-- /.list-unstyled -->
                            </div>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->


                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-footer__middle -->

        <div class="main-footer__bottom">
            <div class="container">
                <div class="main-footer__bottom__inner">
                    <p class="main-footer__copyright"> &copy; Copyright <span class="dynamic-year"></span> by cyberX.
                    </p>
                </div><!-- /.main-footer__inner -->
            </div><!-- /.container -->
        </div><!-- /.main-footer__bottom -->

    </footer><!-- /.main-footer -->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image">
                    <img src="assets/images/white-logo.png" width="149" alt="logo">
                </a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@cyberxapp.com">info@cyberxapp.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:(614)714-6690">(614) 714-6688</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://facebook.com/"> <i class="icon-facebook" aria-hidden="true"></i> <span class="sr-only">Facebook</span></a>
                <a href="https://twitter.com/"><i class="icon-twitter" aria-hidden="true"></i><span class="sr-only">Twitter</span></a>
                <a href="https://pinterest.com/"> <i class="icon-pinterest" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                <a href="https://instagram.com/"> <i class="icon-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="cyber-btn cyber-btn-base">
                    <span><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>


    <!--  ALl JS Plugins =====================
        ====================================== -->
    <!--  jquery-3.7.0 js plugins -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <!--  Bootstrap js plugins -->
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <!--  jarallax js plugins -->
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <!--  jquery-ui js plugins -->
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <!--  jquery-ajaxchimp js plugins -->
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <!--  jquery-appear js plugins -->
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <!-- jquery-circle-progress js plugins -->
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <!--  magnific-popup js plugins -->
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--  validate js plugins -->
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <!--  nouislider js plugins -->
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <!--  hover-extended-magnify js plugins -->
    <script src="assets/vendors/hover-extended-magnify/extm.min.js"></script>
    <!--  tiny-slider js plugins -->
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <!--  wnumb js plugins -->
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <!--  owl-carousel js plugins -->
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <!--  tiny js plugins -->
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <!--  Bootstrap js plugins -->
    <script src="assets/vendors/wow/wow.js"></script>
    <!--  js plugins -->
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <!--  isotope js plugins -->
    <script src="assets/vendors/isotope/isotope.js"></script>
    <!--  countdown js plugins -->
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <!--  Chart.js js plugins -->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <!--  jquery-circleType js plugins -->
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>

    <script src="assets/js/cyber.js"></script>
</body>

</html>