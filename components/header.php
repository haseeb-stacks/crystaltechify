 <?php
    $BASE_URL = 'http://localhost/crystal/';
    ?>
 <!-- Google tag (gtag.js) -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-JPD8TKK8KG"></script>
 <script>
     window.dataLayer = window.dataLayer || [];

     function gtag() {
         dataLayer.push(arguments);
     }
     gtag('js', new Date());
     gtag('config', 'G-JPD8TKK8KG');
 </script>

 <!-- fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com/">
 <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
 <link
     href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900&amp;family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"
     rel="stylesheet">

 <!-- ===========  All Stylesheet ================= -->
 <!--  Bootstrap css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/bootstrap/css/bootstrap.min.css">
 <!--  bootstrap-select css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/bootstrap-select/bootstrap-select.min.css">
 <!--  animate css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/animate/animate.min.css">
 <!--  fontawesome css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/fontawesome/css/all.min.css">
 <!--  jquery-ui css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/jquery-ui/jquery-ui.css">
 <!--  jarallax css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/jarallax/jarallax.css">
 <!--  magnific-popup css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
 <!--  nouislider css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/nouislider/nouislider.min.css">
 <!--  nouislider css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/nouislider/nouislider.pips.css">
 <!--  nouislider css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/cyber-icons/style.css">
 <!--  slider css plugins -->
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/owl-carousel/css/owl.carousel.min.css">
 <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/vendors/owl-carousel/css/owl.theme.default.min.css">

 <!-- template styles -->
 <link href="<?php echo $BASE_URL; ?>assets/css/cyber.css" as="style" rel='stylesheet'>
 <noscript>
     <link rel="stylesheet" href="<?php echo $BASE_URL; ?>assets/css/cyber.css" onload="this.media='all'">
 </noscript>

 <header class="main-header" id="navbar">
     <div class="container-fluid">
         <div class="main-header__inner">
             <div class="main-header__logo">
                 <a href="<?php echo $BASE_URL; ?>" class="logo lazy-background">
                 </a>
             </div><!-- /.main-header__logo -->
             <nav class="main-header__nav main-menu">
                 <ul class="main-menu__list">
                     <li>
                         <a href="<?php echo $BASE_URL; ?>">Home</a>
                     </li>
                     <li>
                         <a href="<?php echo $BASE_URL; ?>about-us.php">About Us</a>
                     </li>
                     <li class="dropdown">
                         <!-- <input type="checkbox" id="services-dropdown" class="dropdown-toggle"> -->
                         <a href="<?php echo $BASE_URL; ?>services/" class="services-down">Services <i
                                 class="fas fa-chevron-down"></i></a>
                         <div class="cyber-mega-menu">
                             <!-- Mega menu container -->
                             <div class="mega-menu-wrap container-fluid">
                                 <div class="row">
                                     <!-- First column of links -->
                                     <div class="col-lg-2 col-xl-2 col-md-12 col-sm-12">
                                         <h4 class="mega-heading">
                                             <ul class="">
                                                 <li class="d-flex align-items-center">
                                                     <a href="<?php echo $BASE_URL; ?>digital-marketing-services/">Digital
                                                         Marketing</a>
                                                 </li>
                                             </ul>
                                         </h4>
                                         <ul class="mega-list" style="list-style-type: disc !important;">
                                             <li class="d-flex align-items-center">
                                                 <a
                                                     href="<?php echo $BASE_URL; ?>digital-marketing-services/search-engine-optimization">Search
                                                     Engine
                                                     Optimization</a>
                                             </li>
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>digital-marketing-services/social-media-managment.php">Social
                                                     Media Management
                                                 </a></li>
                                             <li class="d-flex align-items-center">
                                                 <a
                                                     href="<?php echo $BASE_URL; ?>digital-marketing-services/serach-engine-marketing.php">Search
                                                     Engine
                                                     Marketing</a>
                                             </li>
                                         </ul>
                                     </div>
                                     <!-- Second column of links -->
                                     <div class="col-lg-2 col-xl-2 col-md-12 col-sm-12">
                                         <h4 class="mega-heading">
                                             <ul class="">
                                                 <li class="d-flex align-items-center">
                                                     <a href="<?php echo $BASE_URL; ?>web-development-services/">Web
                                                         Development</a>
                                                 </li>
                                             </ul>
                                         </h4>
                                         <ul class="mega-list">
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>web-development-services/custom-website.php">Custom
                                                     Website</a></li>
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>web-development-services/wordpress-website.php">Wordpress
                                                     Website</a></li>
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>web-development-services/react-website.php">React
                                                     Website</a></li>
                                         </ul>
                                     </div>
                                     <!-- Third column of links -->
                                     <div class="col-lg-2 col-xl-2 col-md-12 col-sm-12">
                                         <h4 class="mega-heading">
                                             <ul class="">
                                                 <li class="d-flex align-items-center">
                                                     <a href="<?php echo $BASE_URL; ?>content-writing-services/">Content
                                                         Writing</a>
                                                 </li>
                                             </ul>
                                         </h4>
                                         <ul class="mega-list">
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>content-writing-services/copy-writing.php">Copy
                                                     Writing</a></li>
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>content-writing-services/website-content.php">Website
                                                     Content</a></li>
                                         </ul>
                                     </div>

                                     <!-- Fourth column of links -->
                                     <div class="col-lg-2 col-xl-2 col-md-12 col-sm-12">
                                         <h4 class="mega-heading">
                                             <ul class="">
                                                 <li class="d-flex align-items-center">
                                                     <a href="<?php echo $BASE_URL; ?>pay-per-click-services/">PPC</a>
                                                 </li>
                                             </ul>
                                         </h4>
                                         <ul class="mega-list">
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>pay-per-click-services/google-ads.php">Google
                                                     Ads</a></li>
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>social-media-ads.php">Social
                                                     Media Ads</a></li>
                                         </ul>
                                     </div>
                                     <div class="col-lg-2 col-xl-2 col-md-12 col-sm-12">
                                         <h4 class="mega-heading">
                                             <ul class="">
                                                 <li class="d-flex align-items-center">
                                                     <a href="<?php echo $BASE_URL; ?>link-bulding-services/">Link
                                                         Building</a>
                                                 </li>
                                             </ul>
                                         </h4>
                                         <ul class="mega-list">
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>link-bulding-services/premium-guest-posting.php">Premium
                                                     Guest Posting</a></li>
                                         </ul>
                                     </div>

                                     <div class="col-lg-2 col-xl-2 col-md-12 col-sm-12">
                                         <h4 class="mega-heading">
                                             <ul class="">
                                                 <li class="d-flex align-items-center">
                                                     <a href="#">Solutions</a>
                                                 </li>
                                             </ul>
                                         </h4>
                                         <ul class="mega-list">
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>solutions/auto-biz-crm.php">AutoBiz
                                                     CRM</a></li>
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>solutions/auto-biz-erp.php">AutoBiz
                                                     ERP</a></li>
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>solutions/salesforce-services.php">Sales
                                                     Force</a></li>
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>solutions/staff-augmentation-services.php">Staff
                                                     Augmentation</a></li>
                                         </ul>
                                     </div>

                                 </div>
                                 <div class="row">
                                     <!-- First column of links -->
                                     <div class="col-lg-2 col-xl-2 col-md-12 col-sm-12">
                                         <h4 class="mega-heading">
                                             <ul class="">
                                                 <li class="d-flex align-items-center">
                                                     <a
                                                         href="<?php echo $BASE_URL; ?>graphic-design-and-branding-services/">Graphic
                                                         Design & Branding</a>
                                                 </li>
                                             </ul>
                                         </h4>
                                         <ul class="mega-list" style="list-style-type: disc !important;">
                                             <li class="d-flex align-items-center">
                                                 <a
                                                     href="<?php echo $BASE_URL; ?>graphic-design-and-branding-services/logo-design.php">Logo
                                                     Design</a>
                                             </li>
                                         </ul>
                                     </div>
                                     <!-- Second column of links -->
                                     <div class="col-lg-2 col-xl-2 col-md-12 col-sm-12">
                                         <h4 class="mega-heading">
                                             <ul class="">
                                                 <li class="d-flex align-items-center">
                                                     <a
                                                         href="<?php echo $BASE_URL; ?>video-editing-and-animation-services/">Video
                                                         Editing &
                                                         Animation</a>
                                                 </li>
                                             </ul>
                                         </h4>
                                         <ul class="mega-list">
                                             <li class="d-flex align-items-center"><a
                                                     href="<?php echo $BASE_URL; ?>video-editing-and-animation-services/youtube-video-editing.php">Youtube
                                                     Video Editing</a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li>
                         <a href="<?php echo $BASE_URL; ?>portfolio.php">Portfolio</a>
                     </li>
                     <li>
                         <a href="<?php echo $BASE_URL; ?>blogs/">Blogs</a>
                     </li>
                     <li>
                         <a href="<?php echo $BASE_URL; ?>careers.php">Careers</a>
                     </li>
                     <li>
                         <a href="<?php echo $BASE_URL; ?>contact-us.php">Contact Us</a>
                     </li>
                 </ul>
             </nav>
             <div class="main-header__right">
                 <!-- call button start -->
                 <div class="main-header__right__info call-buton">
                     <a href="tel:614714-6690" class="cyberx-btn cc-calto-action-ripple"><i
                             class="icon-phone-1"></i>Call
                         Us</a>
                 </div>
                 <!-- call button start -->
                 <div class="mobile-nav__btn mobile-nav__btn--one mobile-nav__toggler">
                     <span></span>
                     <span></span>
                     <span></span>
                 </div><!-- /.mobile-nav__toggler -->
             </div><!-- /.main-header__right -->
         </div>
         <!-- /.main-header__inner -->
     </div><!-- /.container-fluid -->
 </header>