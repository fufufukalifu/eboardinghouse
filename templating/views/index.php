<!DOCTYPE html>
<html class="frontend">
<!-- START Head -->
<head>
    <!-- START META SECTION -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{judul_halaman}</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!--/ Library script -->

    <!-- Application stylesheet : mandatory -->
    <link rel="stylesheet" href="<?=base_url('assets/library/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/stylesheet/layout.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/stylesheet/uielement.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/swal/sweetalert.css')?>">
    <script type="text/javascript" src="<?=base_url('assets/plugins/swal/sweetalert.min.js')?>"></script> 


    <!--/ Application stylesheet -->
    <!-- END STYLESHEETS -->

    <!-- START JAVASCRIPT SECTION - Load only modernizr script here -->
    <!--/ END JAVASCRIPT SECTION -->
</head>
<!--/ END Head -->
<body>
    <header id="header" class="navbar navbar-fixed-top">
        <div class="container">
            <!-- START navbar header -->
            <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand" href="javascript:void(0);">
                    <span>E-Kosan</span>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="text">Daftar</span>
                                </span>
                            </a>

                        </li>
                        <li class="dropdown">
                            <a href="<?=base_url('index.php/login') ?>" >
                                <span class="meta">
                                    <span class="text">Masuk</span>
                                </span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="text">Bantuan</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/ END nav collapse -->
            </div>
            <!--/ END Toolbar -->
        </div>
    </header>

    <section id="main" role="main">
        <?php 
        foreach ($files as $file) {
            include($file);
        }
        ?>
    </section>
    
    
</body>
</html>