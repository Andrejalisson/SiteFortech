<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | Fortech GPS</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/Site/images/favicon//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/Site/images/favicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/Site/images/favicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/Site/images/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/Site/images/favicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/Site/images/favicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/Site/images/favicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/Site/images/favicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/Site/images/favicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/Site/images/favicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Site/images/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/Site/images/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Site/images/favicon//favicon-16x16.png">
    <link rel="manifest" href="/Site/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/Site/css/style.css">
    <link rel="stylesheet" href="/Site/css/responsive.css">
</head>

<body>
    <div class="preloader"></div><!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header header-style-two">
            <div class="top-header">
                <div class="container">
                    <div class="left-info">
                        <p><i class="cameron-icon-email"></i><a href="mailto:contato@fortechgps.com.br">contato@fortechgps.com.br</a></p>
                    </div><!-- /.left-info -->
                    <div class="right-info">
                        <ul class="info-block">
                            <li><i class="cameron-icon-support"></i><a href="#">(85) 4042-5992</a></li>
                        
                        </ul>
                    </div><!-- /.right-info -->
                </div><!-- /.container -->
            </div><!-- /.top-header -->
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="/">
                            <img src="/Site/images/resources/logo-1-1.png" class="main-logo" alt="Awesome Image" />
                            <img src="/Site/images/resources/logo-1-2.png" class="stricky-logo" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".header-style-two .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li class="current">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/Sobre">Sobre</a>
                            </li>
                            <li>
                                <a href="/Servicos">Serviços</a>
                                <ul class="sub-menu">
                                    <li><a href="private.html">Private Security</a></li>
                                    <li><a href="transport.html">Transport Security</a></li>
                                    <li><a href="home.html">Home Security</a></li>
                                    <li class="active"><a href="busniess.html">Business Security</a></li>
                                    <li><a href="protocol.html">Protocol Duties</a></li>
                                    <li><a href="armed.html">Armed Security</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="#">Area do Cliente</a>
                            </li>
                        
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <div class="social">
                        <a target="_blank" href="https://www.instagram.com/fortechgps/"><i class="fa fa-instagram"></i></a>
                            <!--
                            --><a target="_blank" href="https://www.facebook.com/fortechgps?_rdc=1&_rdr"><i class="fa fa-facebook-f"></i></a>
                            <!--
                            --><a target="_blank" href="https://www.google.com.br/maps/place/Fortech+GPS/@-3.7373082,-38.5071332,16.96z/data=!4m6!3m5!1s0x22d23b42d978ce19:0xe4cdc8fe7a276d58!8m2!3d-3.7391756!4d-38.5126079!16s%2Fg%2F11n_xxdrd0?entry=ttu"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="https://br.linkedin.com/company/fortechgps"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <!-- /.social -->
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.main-header header-style-one -->

        @yield('corpo')


        <footer class="site-footer">
            <div class="main-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget about-widget">
                                <a href="index.html" class="footer-logo">
                                    <img src="/Site/images/resources/footer-logo-1-1.png" alt="awesome image">
                                </a>
                                <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore
                                    dolore magna aliqua enim.</p>
                                <div class="social-block">
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div><!-- /.social-block -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget links-widget">
                                <div class="footer-widget-title">
                                    <h3>Services</h3>
                                </div><!-- /.footer-widget-title -->
                                <ul class="links-lists">
                                    <li><a href="#">Company History</a></li>
                                    <li><a href="#">About Us </a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- /.links-lists -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget works-widget">
                                <div class="footer-widget-title">
                                    <h3>Latest Work</h3>
                                </div><!-- /.footer-widget-title -->
                                <div class="gallery-wrapper clearfix">
                                    <div class="single-gallery-item">
                                        <a href="#"><img src="/Site/images/resources/footer-work-1-1.png" alt="awesome image"></a>
                                    </div><!-- /.single-gallery-item -->
                                    <div class="single-gallery-item">
                                        <a href="#"><img src="/Site/images/resources/footer-work-1-2.png" alt="awesome image"></a>
                                    </div><!-- /.single-gallery-item -->
                                    <div class="single-gallery-item">
                                        <a href="#"><img src="/Site/images/resources/footer-work-1-3.png" alt="awesome image"></a>
                                    </div><!-- /.single-gallery-item -->
                                    <div class="single-gallery-item">
                                        <a href="#"><img src="/Site/images/resources/footer-work-1-4.png" alt="awesome image"></a>
                                    </div><!-- /.single-gallery-item -->
                                    <div class="single-gallery-item">
                                        <a href="#"><img src="/Site/images/resources/footer-work-1-5.png" alt="awesome image"></a>
                                    </div><!-- /.single-gallery-item -->
                                    <div class="single-gallery-item">
                                        <a href="#"><img src="/Site/images/resources/footer-work-1-6.png" alt="awesome image"></a>
                                    </div><!-- /.single-gallery-item -->
                                </div><!-- /.gallery-wrapper -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget newsletter-widget">
                                <div class="footer-widget-title">
                                    <h3>NewsLetter</h3>
                                </div><!-- /.footer-widget-title -->
                                <form action="#" class="newsletter-form">
                                    <p>Lorem ipsum dolor sit amet consect <br> etur adipisicing.</p>
                                    <input type="text" placeholder="Enter your email">
                                    <button type="submit">Subscribe</button>
                                </form><!-- /.newsletter-form -->
                            </div><!-- /.footer-widget newsletter-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer -->
            <div class="bottom-footer text-center">
                <div class="container">
                    <p><a href="#">Cameron</a> &copy; 2019 All Right Reserved</p>
                </div><!-- /.container -->
            </div><!-- /.bottom-footer -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- /.scroll-to-top -->
    <script src="/Site/js/jquery.js"></script>
    <script src="/Site/js/bootstrap.bundle.min.js"></script>
    <script src="/Site/js/owl.carousel.min.js"></script>
    <script src="/Site/js/waypoints.min.js"></script>
    <script src="/Site/js/jquery.counterup.min.js"></script>
    <script src="/Site/js/wow.js"></script>
    <script src="/Site/js/theme.js"></script>
</body>

</html>