<!DOCTYPE html>
<!-- 
TEMPLATE NAME : Adminre frontend
VERSION : 1.2.0
AUTHOR : JohnPozy
AUTHOR URL : http://themeforest.net/user/JohnPozy
EMAIL : pampersdry@gmail.com
LAST UPDATE: 23/06/2014

** A license must be purchased in order to legally use this template for your project **
** PLEASE SUPPORT ME. YOUR SUPPORT ENSURE THE CONTINUITY OF THIS PROJECT **
-->
<html class="frontend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Adminre frontend</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap 3.1.1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url('assets/image/touch/apple-touch-icon-144x144-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url('assets/image/touch/apple-touch-icon-114x114-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url('assets/image/touch/apple-touch-icon-72x72-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" href="<?=base_url('assets/image/touch/apple-touch-icon-57x57-precomposed.png')?>">
        <link rel="shortcut icon" href="<?=base_url('assets/image/favicon.png')?>">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        
        
        <link rel="stylesheet" href="<?=base_url('assets/plugins/owl/css/owl.carousel.min.css')?>">
        
        <link rel="stylesheet" href="<?=base_url('assets/plugins/layerslider/css/layerslider.min.css')?>">
        
        <!--/ Plugins stylesheet -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="<?=base_url('assets/library/bootstrap/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/stylesheet/layout.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/stylesheet/uielement.css')?>">
        <!--/ Application stylesheet -->
        <!-- END STYLESHEETS -->

        <!-- START JAVASCRIPT SECTION - Load only modernizr script here -->
        <script src="<?=base_url('assets/library/modernizr/js/modernizr.min.js')?>"></script>
        <!--/ END JAVASCRIPT SECTION -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        <header id="header" class="navbar navbar-fixed-top">
            <div class="container">
                <!-- START navbar header -->
                <div class="navbar-header">
                    <!-- Brand -->
                    <a class="navbar-brand" href="javascript:void(0);">
                        <span class="logo-figure" style="margin-left:-4px;"></span>
                        <span class="logo-text"></span>
                    </a>
                    <!--/ Brand -->
                </div>
                <!--/ END navbar header -->

                <!-- START Toolbar -->
                <div class="navbar-toolbar clearfix">
                    <!-- START Left nav -->
                    <ul class="nav navbar-nav">
                        <!-- Navbar collapse: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                        <li class="navbar-main navbar-toggle">
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="meta">
                                    <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                                </span>
                            </a>
                        </li>
                        <!--/ Navbar collapse -->
                    </ul>
                    <!--/ END Left nav -->

                    <!-- START navbar form -->
                    <div class="navbar-form navbar-left dropdown" id="dropdown-form">
                        <form action="" role="search">
                            <div class="has-icon">
                                <input type="text" class="form-control" placeholder="Search this sites">
                                <i class="ico-search form-control-icon"></i>
                            </div>
                        </form>
                    </div>
                    <!-- START navbar form -->

                    <!-- START Right nav -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Search form toggler -->
                        <li>
                            <a href="javascript:void(0);" data-toggle="dropdown" data-target="#dropdown-form">
                                <span class="meta">
                                    <span class="icon"><i class="ico-search"></i></span>
                                </span>
                            </a>
                        </li>
                        <!--/ Search form toggler -->
                    </ul>
                    <!--/ END Right nav -->

                    <!-- START nav collapse -->
                    <div class="collapse navbar-collapse navbar-collapse-alt" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">HOME</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Option 1: Layer Slider</a></li>
                                    <li><a href="index2.html">Option 2: Parallax Background</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">PAGES</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact Us</a></li>
                                    <li><a href="page-left-sidebar.html">Left Sidebar</a></li>
                                    <li><a href="page-right-sidebar.html">Right Sidebar</a></li>
                                    <li><a href="page-account-register.html">Account Register</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">BLOG</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-large.html">Blog large</a></li>
                                    <li><a href="blog-medium.html">Blog medium</a></li>
                                    <li><a href="blog-single.html">Blog single</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                    <li><a href="blog-masonry.html">Blog masonry</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">PORTFOLIO</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
                                    <li><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
                                    <li><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
                                    <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                </ul>
                            </li>
                            <li class="dropdown custom mega">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">MEGA MENU</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <ul class="table-layout nm">
                                        <li class="col-sm-3 valign-top">
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-header">Menu Section 1</li>
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li><a href="#">One more link</a></li>
                                                <li><a href="#">Other more link</a></li>
                                            </ul>
                                        </li>

                                        <li class="col-sm-3 valign-top">
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-header">Menu Section 2</li>
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li><a href="#">One more link</a></li>
                                                <li><a href="#">Other more link</a></li>
                                            </ul>
                                        </li>

                                        <li class="col-sm-6 valign-top">
                                            <ul class="dropdown-menu mb5">
                                                <li class="dropdown-header">Mega Menu Widget</li>
                                                <li class="row">
                                                    <div class="col-xs-6">
                                                        <!-- thumbnail -->
                                                        <div class="thumbnail nm">
                                                            <!-- media -->
                                                            <div class="media">
                                                                <!-- indicator -->
                                                                <div class="indicator"><span class="spinner"></span></div>
                                                                <!--/ indicator -->
                                                                <!-- toolbar overlay -->
                                                                <div class="overlay">
                                                                    <div class="toolbar">
                                                                        <a href="javascript:void(0);" class="btn btn-success"><i class="ico-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!--/ toolbar overlay -->
                                                                <img data-toggle="unveil" src="<?=base_url('assets/image/portfolio/placeholder.jpg" data-src="<?=base_url('assets/image/portfolio/portfolio8.jpg" alt="Photo" width="100%" />
                                                            </div>
                                                            <!--/ media -->
                                                        </div>
                                                        <!--/ thumbnail -->
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <!-- thumbnail -->
                                                        <div class="thumbnail nm">
                                                            <!-- media -->
                                                            <div class="media">
                                                                <!-- indicator -->
                                                                <div class="indicator"><span class="spinner"></span></div>
                                                                <!--/ indicator -->
                                                                <!-- toolbar overlay -->
                                                                <div class="overlay">
                                                                    <div class="toolbar">
                                                                        <a href="javascript:void(0);" class="btn btn-success"><i class="ico-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!--/ toolbar overlay -->
                                                                <img data-toggle="unveil" src="<?=base_url('assets/image/portfolio/placeholder.jpg" data-src="<?=base_url('assets/image/portfolio/portfolio5.jpg" alt="Photo" width="100%" />
                                                            </div>
                                                            <!--/ media -->
                                                        </div>
                                                        <!--/ thumbnail -->
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/ END nav collapse -->
                </div>
                <!--/ END Toolbar -->
            </div>
        </header>
        <!--/ END Template Header -->

        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Layerslider -->
            <section id="layerslider" style="width:100%;height:480px;">
                <!-- Slide #1 -->
                <div class="ls-slide" data-ls="transition2d:1; slidedelay:8000;">
                    <!-- slide background -->
                    <img src="<?=base_url('assets/image/layerslider/bg3.png" class="ls-bg">
                    <!--/ slide background -->

                    <!-- Layer #1 -->
                    <img class="ls-l" style="top:90px;left:68%;" src="<?=base_url('assets/image/layerslider/layer/people2.png" data-ls="delayin:1000; easingin:easeOutElastic;">
                    <!--/ Layer #1 -->

                    <!-- Layer #2 -->
                    <h1 class="ls-l font-alt" style="top:110px;left:150px;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
                        Welcome To <span class="text-primary">Adminre</span> 
                    </h1>
                    <!--/ Layer #2 -->

                    <!-- Layer #3 -->
                    <h4 class="ls-l font-alt thin text-default" style="top:170px;left:150px;width:550px;" data-ls="offsetxin:0; durationin:2000; delayin:2000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                        Adminre is a clean and flat backend and frontend theme build with Twitter bootstrap 3.1.1
                    </h4>
                    <!--/ Layer #3 -->

                    <!-- Layer #4 -->
                    <p class="ls-l text-default" style="top:230px;left:150px;width:550px;" data-ls="offsetxin:0; durationin:2000; delayin:2500; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <!--/ Layer #4 -->

                    <!-- Layer #5 -->
                    <a href="javascript:void(0);" class="ls-l btn btn-primary" style="top:310px; left:150px;" data-ls="offsetxin:0; durationin:2000; delayin:3000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                        Purchase Now <i class="ico-angle-right ml5"></i>
                    </a>
                    <!--/ Layer #5 -->

                    <!-- Layer #6 -->
                    <img class="ls-l" style="top:320px;left:280px;" src="<?=base_url('assets/image/layerslider/layer/arrow.png" data-ls="delayin:3500; offsetxin:0; offsetyin:-30; easingin:easeOutElastic;">
                    <!--/ Layer #6 -->
                </div>
                <!-- Slide #1 -->

                <!-- Slide #2 -->
                <div class="ls-slide" data-ls="transition2d:1; slidedelay:8000;">
                    <!-- slide background -->
                    <img src="<?=base_url('assets/image/layerslider/bg2.png" class="ls-bg" alt="Slide background">
                    <!--/ slide background -->
                    
                    <!-- Layer #1 -->
                    <h4 class="ls-l font-alt thin text-default text-right" style="top:120px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:0;">
                        Fully Responsive &amp; Clean Design
                    </h4>
                    <!--/ Layer #1 -->

                    <!-- Layer #2 -->
                    <h1 class="ls-l font-alt text-right" style="top:150px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:500;">
                        <span class="text-primary">Mobile</span> Devices Optimize
                    </h1>
                    <!--/ Layer #2 -->

                    <!-- Layer #3 -->
                    <p class="ls-l text-default text-right" style="top:210px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:1000;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <!--/ Layer #3 -->

                    <!-- Layer #5 -->
                    <p class="ls-l text-default text-right" style="top:290px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:1500;">
                        <a href="javascript:void(0);" class="btn btn-primary">
                            Learn More <i class="ico-angle-right ml5"></i>
                        </a>
                    </p>
                    <!--/ Layer #5 -->

                    <!-- Layer #6 -->
                    <img class="ls-l" style="top:20px;left:250px;" src="<?=base_url('assets/image/layerslider/layer/iphone-5s.png" data-ls="delayin:2000; easingin:easeOutElastic;">
                    <!--/ Layer #6 -->
                </div>
                <!-- Slide #2 -->
            </section>
            <!--/ END Layerslider -->

            <!-- START Call To Action Section -->
            <section class="section bgcolor-primary">
                <div class="container">
                    <div class="col-sm-9">
                        <h3 class="font-alt text-white mt0">Adminre is a responsive frontend and backend template.</h3>
                    </div>
                    <div class="col-sm-3 clearfix">
                        <a href="javascript:void(0);" class="btn btn-outline btn-default text-white pull-right semibold">CALL TO ACTION</a>
                    </div>
                </div>
            </section>
            <!-- END Call To Action Section -->

            <!-- START Features Section -->
            <section class="section bgcolor-white">
                <div class="container">
                    <!-- START row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="table-layout animation" data-toggle="waypoints" data-showanim="fadeInRight" data-trigger-once="true">
                                <div class="col-xs-2 valign-top"><img src="<?=base_url('assets/image/icons/responsivewebdesign.png" width="100%" alt=""></div>
                                <div class="col-xs-19 pl15">
                                    <h4 class="font-alt">Responsive Design</h4>
                                    <p class="nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="table-layout animation" data-toggle="waypoints" data-showanim="fadeInRight" data-trigger-once="true">
                                <div class="col-xs-2 valign-top"><img src="<?=base_url('assets/image/icons/seoplanning.png" width="100%" alt=""></div>
                                <div class="col-xs-10 pl15">
                                    <h4 class="font-alt">SEO Optimize</h4>
                                    <p class="nm">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="table-layout animation" data-toggle="waypoints" data-showanim="fadeInRight" data-trigger-once="true">
                                <div class="col-xs-2 valign-top"><img src="<?=base_url('assets/image/icons/branddevelopment.png" width="100%" alt=""></div>
                                <div class="col-xs-10 pl15">
                                    <h4 class="font-alt">Blazing Fast</h4>
                                    <p class="nm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ END row -->

                    <!-- START row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="table-layout animation" data-toggle="waypoints" data-showanim="fadeInLeft" data-trigger-once="true">
                                <div class="col-xs-2 valign-top"><img src="<?=base_url('assets/image/icons/affiliatemarketing.png" width="100%" alt=""></div>
                                <div class="col-xs-19 pl15">
                                    <h4 class="font-alt">Worth Every Peny</h4>
                                    <p class="nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="table-layout animation" data-toggle="waypoints" data-showanim="fadeInLeft" data-trigger-once="true">
                                <div class="col-xs-2 valign-top"><img src="<?=base_url('assets/image/icons/targetaudience.png" width="100%" alt=""></div>
                                <div class="col-xs-10 pl15">
                                    <h4 class="font-alt">Build With You In Mind</h4>
                                    <p class="nm">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="table-layout animation" data-toggle="waypoints" data-showanim="fadeInLeft" data-trigger-once="true">
                                <div class="col-xs-2 valign-top"><img src="<?=base_url('assets/image/icons/customcoding.png" width="100%" alt=""></div>
                                <div class="col-xs-10 pl15">
                                    <h4 class="font-alt">Clean Code</h4>
                                    <p class="nm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ END row -->
                </div>
            </section>
            <!--/ END Features Section -->

            <!-- START Recent Blog Section -->
            <section class="section bgcolor-white">
                <div class="container">
                    <!-- START row -->
                    <div class="row">
                        <!-- Header -->
                        <div class="col-md-12">
                            <div class="section-header section-header-bordered mb5">
                                <h3 class="section-title">
                                    <p class="font-alt nm">Blog Post</p>
                                </h3>
                            </div>
                            <!--/ Header -->
                        </div>
                        <!--/ Header -->
                    </div>
                    <!--/ END row -->

                    <!-- START row -->
                    <div class="row">
                        <!-- Blog post #1 -->
                        <div class="col-sm-4 post">
                            <article class="panel overflow-hidden">
                                <!-- Thumbnail -->
                                <header class="thumbnail">
                                    <!-- media -->
                                    <div class="media">
                                        <!-- indicator -->
                                        <div class="indicator"><span class="spinner"></span></div>
                                        <!--/ indicator -->
                                        <!-- toolbar overlay -->
                                        <div class="overlay">
                                            <div class="toolbar">
                                                <a href="javascript:void(0);" class="btn btn-success"><i class="ico-new-tab"></i></a>
                                            </div>
                                        </div>
                                        <!--/ toolbar overlay -->
                                        <img data-toggle="unveil" src="<?=base_url('assets/image/background/blog/placeholder.jpg" data-src="<?=base_url('assets/image/background/blog/blog1.jpg" alt="Photo" height="160px">
                                    </div>
                                    <!--/ media -->
                                </header>
                                <!--/ Thumbnail -->
                                <!-- Content -->
                                <section class="panel-body">
                                    <!-- heading -->
                                    <h4 class="font-alt mt0 ellipsis"><a href="javascript:void(0);" class="text-default">Lorem ipsum dolor sit amet</a></h4>
                                    <!--/ heading -->
                                    <!-- meta -->
                                    <p class="meta nm">
                                        <a href="javascript:void(0);">June, 2014</a><!-- date -->
                                        <span class="text-muted mr5 ml5">&#8226;</span>
                                        <span class="text-muted">By </span><a href="javascript:void(0);">Mark Adams</a><!-- author -->
                                    </p>
                                    <!--/ meta -->
                                </section>
                                <!--/ Content -->
                            </article>
                        </div>
                        <!--/ Blog post #1 -->

                        <!-- Blog post #2 -->
                        <div class="col-sm-4 post">
                            <article class="panel overflow-hidden">
                                <!-- Thumbnail -->
                                <header class="thumbnail">
                                    <!-- media -->
                                    <div class="media">
                                        <!-- indicator -->
                                        <div class="indicator"><span class="spinner"></span></div>
                                        <!--/ indicator -->
                                        <!-- toolbar overlay -->
                                        <div class="overlay">
                                            <div class="toolbar">
                                                <a href="javascript:void(0);" class="btn btn-success"><i class="ico-new-tab"></i></a>
                                            </div>
                                        </div>
                                        <!--/ toolbar overlay -->
                                        <img data-toggle="unveil" src="<?=base_url('assets/image/background/blog/placeholder.jpg" data-src="<?=base_url('assets/image/background/blog/blog2.jpg" alt="Photo" height="160px">
                                    </div>
                                    <!--/ media -->
                                </header>
                                <!--/ Thumbnail -->
                                <!-- Content -->
                                <section class="panel-body">
                                    <!-- heading -->
                                    <h4 class="font-alt mt0 ellipsis"><a href="javascript:void(0);" class="text-default">Duis aute irure dolor in reprehenderit in voluptate.</a></h4>
                                    <!--/ heading -->
                                    <!-- meta -->
                                    <p class="meta nm">
                                        <a href="javascript:void(0);">June, 2014</a><!-- date -->
                                        <span class="text-muted mr5 ml5">&#8226;</span>
                                        <span class="text-muted">By </span><a href="javascript:void(0);">Jenna Howard</a><!-- author -->
                                    </p>
                                    <!--/ meta -->
                                </section>
                                <!--/ Content -->
                            </article>
                        </div>
                        <!--/ Blog post #2 -->

                        <!-- Blog post #3 -->
                        <div class="col-sm-4 post">
                            <article class="panel overflow-hidden nm">
                                <!-- Thumbnail -->
                                <header class="thumbnail">
                                    <!-- media -->
                                    <div class="media">
                                        <!-- indicator -->
                                        <div class="indicator"><span class="spinner"></span></div>
                                        <!--/ indicator -->
                                        <!-- toolbar overlay -->
                                        <div class="overlay">
                                            <div class="toolbar">
                                                <a href="javascript:void(0);" class="btn btn-success"><i class="ico-new-tab"></i></a>
                                            </div>
                                        </div>
                                        <!--/ toolbar overlay -->
                                        <img data-toggle="unveil" src="<?=base_url('assets/image/background/blog/placeholder.jpg" data-src="<?=base_url('assets/image/background/blog/blog3.jpg" alt="Photo" height="160px">
                                    </div>
                                    <!--/ media -->
                                </header>
                                <!--/ Thumbnail -->
                                <!-- Content -->
                                <section class="panel-body">
                                    <!-- heading -->
                                    <h4 class="font-alt mt0 ellipsis"><a href="javascript:void(0);" class="text-default">Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede.</a></h4>
                                    <!--/ heading -->
                                    <!-- meta -->
                                    <p class="meta nm">
                                        <a href="javascript:void(0);">Apr, 2014</a><!-- date -->
                                        <span class="text-muted mr5 ml5">&#8226;</span>
                                        <span class="text-muted">By </span><a href="javascript:void(0);">Glenna Espi</a><!-- author -->
                                    </p>
                                    <!--/ meta -->
                                </section>
                                <!--/ Content -->
                            </article>
                        </div>
                        <!--/ Blog post #3 -->
                    </div>
                    <!--/ END row -->
                </div>
            </section>
            <!--/ END Recent Blog Section -->

            <!-- START Lovely Client -->
            <section class="section bgcolor-white">
                <div class="container">
                    <!-- Header -->
                    <div class="section-header section-header-bordered mb15">
                        <h3 class="section-title">
                            <p class="font-alt nm">Lovely Client</p>
                        </h3>
                    </div>
                    <!--/ Header -->
                    <!-- carousel -->
                    <div class="owl-carousel" id="lovely-client">
                        <!-- client #1 -->
                        <div class="item text-center">
                            <a href="javascript:void(0);"><img src="<?=base_url('assets/image/client/aztec.png" alt="Aztec Logo"></a>
                        </div>
                        <!--/ client #1 -->
                        <!-- client #2 -->
                        <div class="item text-center">
                            <a href="javascript:void(0);"><img src="<?=base_url('assets/image/client/cisco.png" alt="Cisco Logo"></a>
                        </div>
                        <!--/ client #2 -->
                        <!-- client #3 -->
                        <div class="item text-center">
                            <a href="javascript:void(0);"><img src="<?=base_url('assets/image/client/cocacola.png" alt="Cocacola Logo"></a>
                        </div>
                        <!--/ client #3 -->
                        <!-- client #4 -->
                        <div class="item text-center">
                            <a href="javascript:void(0);"><img src="<?=base_url('assets/image/client/everyday.png" alt="Everyday Logo"></a>
                        </div>
                        <!--/ client #4 -->
                        <!-- client #5 -->
                        <div class="item text-center">
                            <a href="javascript:void(0);"><img src="<?=base_url('assets/image/client/hp.png" alt="HP Logo"></a>
                        </div>
                        <!--/ client #5 -->
                        <!-- client #6 -->
                        <div class="item text-center">
                            <a href="javascript:void(0);"><img src="<?=base_url('assets/image/client/natural.png" alt="Natural Logo"></a>
                        </div>
                        <!--/ client #6 -->
                        <!-- client #7 -->
                        <div class="item text-center">
                            <a href="javascript:void(0);"><img src="<?=base_url('assets/image/client/shell.png" alt="Shell Logo"></a>
                        </div>
                        <!--/ client #7 -->
                    </div>
                    <!--/ carousel -->
                </div>
            </section>
            <!--/ END Lovely Client -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!-- START Template Footer -->
        <footer id="footer" role="contentinfo">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- About -->
                    <div class="col-md-4">
                        <h4 class="font-alt mt0">About Us</h4>
                        <p>Adminre is a clean and flat backend and frontend theme build with Twitter bootstrap 3.1.1</p>
                        <p> Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        <a href="javascript:void(0);" class="text-primary">Learn More</a>
                    </div>
                    <!--/ About -->

                    <!-- Address + Social -->
                    <div class="col-md-4">
                        <h4 class="font-alt mt0">Address</h4>
                        <address>
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                        <h4 class="font-alt mt0">Stay Connect</h4>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Facebook"><i class="ico-facebook2"></i></a>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Twitter"><i class="ico-twitter2"></i></a>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Vimeo"><i class="ico-vimeo"></i></a>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Flickr"><i class="ico-flickr2"></i></a>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Google+"><i class="ico-google-plus2"></i></a>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Instagram"><i class="ico-instagram2"></i></a>
                    </div>
                    <!--/ Address + Social -->

                    <!-- Newsletter -->
                    <div class="col-md-4">
                        <h4 class="font-alt mt0">NewsLetter</h4>
                        <form role="form">
                            <div class="form-group">
                                <p class="form-control-static">Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="newsletter_email" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Subscribe Now</button>
                        </form>
                    </div>
                    <!--/ Newsletter -->
                </div>
                <!--/ row -->
            </div>
            <!--/ container -->

            <!-- bottom footer -->
            <div class="footer-bottom">
                <!-- container -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- copyright -->
                            <p class="nm text-muted">&copy; Copyright 2014 by <a href="javascript:void(0);" class="text-white">Adminre</a>. All Rights Reserved.</p>
                            <!--/ copyright -->
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="javascript:void(0);" class="text-white">Privacy Policy</a>
                            <span class="ml5 mr5">&#8226;</span>
                            <a href="javascript:void(0);" class="text-white">Terms of Service</a>
                        </div>
                    </div>
                </div>
                <!--/ container -->
            </div>
            <!--/ bottom footer -->
        </footer>
        <!--/ END Template Footer -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Library script : mandatory -->
        <script type="text/javascript" src="<?=base_url('assets/library/jquery/js/jquery.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/library/jquery/js/jquery-migrate.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/library/bootstrap/js/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/library/core/js/core.min.js')?>"></script>
        <!--/ Library script -->

        <!-- App and page level script -->
        <script type="text/javascript" src="<?=base_url('assets/plugins/sparkline/js/jquery.sparkline.min.js')?>"></script><!-- will be use globaly as a summary on sidebar menu -->
        <script type="text/javascript" src="<?=base_url('assets/javascript/app.min.js')?>"></script>
        
        
        <script type="text/javascript" src="<?=base_url('assets/plugins/owl/js/owl.carousel.min.js')?>"></script>
        
        <script type="text/javascript" src="<?=base_url('assets/plugins/layerslider/js/greensock.min.js')?>"></script>
        
        <script type="text/javascript" src="<?=base_url('assets/plugins/layerslider/js/transitions.min.js')?>"></script>
        
        <script type="text/javascript" src="<?=base_url('assets/plugins/layerslider/js/layerslider.min.js')?>"></script>
        
        <script type="text/javascript" src="<?=base_url('assets/javascript/pages/frontend/home.js')?>"></script>
        
        <!--/ App and page level scrip -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>