<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <!-- Mirrored from html.dynamiclayers.net/te/organze/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Oct 2021 03:47:47 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Organic Food &amp; Farming HTML Template">
        <meta name="author" content="ThemeEaster">

        <title>Fresh Leaf Farm | Video Gallery</title>

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- Elegant Icons CSS -->
        <link rel="stylesheet" href="css/elegant-font-icons.css">
        <!-- Flat Icons CSS -->
        <link rel="stylesheet" href="css/food-icon.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <link href="lightbox/simple-lightbox.css?v2.8.0" rel="stylesheet" type="text/css"/>
        <style>
            /*            .container .gallery a img {
                            float: left;
                            width: 25%;
                            height: auto;
                            border: 2px solid #fff;
                            -webkit-transition: -webkit-transform .15s ease;
                            -moz-transition: -moz-transform .15s ease;
                            -o-transition: -o-transform .15s ease;
                            -ms-transition: -ms-transform .15s ease;
                            transition: transform .15s ease;
                            position: relative;
                        }
            
                        .clear {
                            clear: both;
                        }*/
        </style>
    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div><!-- Preloader -->

        <?php
        include './header.php';
        ?>

        <div class="header-height"></div>

        <section class="page-header">
            <div class="page-header-bottom"></div>
            <div class="container">
                <div class="page-content text-center">
                    <h2>Fresh Leaf Farm Videos</h2>
                    <p>The Modern Art of Cooking</p>
                </div>
            </div>
        </section><!--/.page-header-->

        <section class="gallery-section padding bd-bottom bg-grey">
            <div class="container">

                <div class="gallery row">
                    <div class="col-md-6 pt-4">
                       <iframe width="100%" height="400px" src="https://www.youtube.com/embed/kWybWQTokdY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                     <div class="col-md-6 pt-4">
                       <iframe width="100%" height="400px" src="https://www.youtube.com/embed/1XZj2xzmSRA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                   
                    <div class="clear"></div>
                </div>

            </div>
        </section><!--/.gallery-section-->


        <?php
        include 'footer.php';
        ?>


        <a data-scroll href="#header" id="scroll-to-top"><i class="ti-arrow-up"></i></a>

        <!-- jQuery Lib -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/tether.min.js"></script>

        <script src="js/vendor/smooth-scroll.min.js"></script>
        <script src="js/vendor/jquery.isotope.v3.0.2.js"></script>

        <script src="js/main.js"></script>
        <script src="lightbox/simple-lightbox.js?v2.8.0" type="text/javascript"></script>
        <script>
            (function () {
                var $gallery = new SimpleLightbox('.gallery a', {});
            })();
        </script>
    </body>
</html>