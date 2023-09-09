<!doctype html>
<html class="no-js" lang="en">
    <head>
        <base href="<?php echo e(url('/')); ?>"/>
        <title><?php echo e($title); ?> | <?php echo e($set->site_name); ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="<?php echo e($set->site_name); ?>"/>
        <meta name="application-name" content="<?php echo e($set->site_name); ?>"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="description" content="<?php echo e($set->site_desc); ?>" />
        <link rel="shortcut icon" href="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" />
        <link rel="apple-touch-icon" href="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/asset/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/asset/vendor/fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/asset/vendor/swiper/css/swiper.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/asset/vendor/wow/css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/asset/vendor/magnific-popup/css/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/asset/vendor/components-elegant-icons/css/elegant-icons.min.css">
        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/color-1.css" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/global_assets/css/icons/fontawesome/styles.min.css" />
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/app.css" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/sweetalert.css" type="text/css">
         <?php echo $__env->yieldContent('css'); ?>
    </head>
<!-- header begin-->
<body data-style="default">
    <header class="navbar-header navbar-trans-fixed">
        <div class="container">
            <div class="header-inner">
                <div class="toggle-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <!-- /.toggle-menu -->

                <div class="navbar-mobile-logo">
                    <a href="<?php echo e(route('home')); ?>" class="logo">
                       <img src="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" style="height: auto; max-width: 100%;" alt="logo" class="main-logo"> 
                       <img src="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" style="height: auto; max-width: 100%;" alt="logo" class="sticky-logo">
                    </a>
                </div>

                <nav class="navbar-nav nav-light">
                    <div class="close-menu">
                        <i class="ei ei-icon_close"></i>
                    </div>

                    <div class="navbar-logo">
                        <a href="<?php echo e(route('home')); ?>" class="logo">
                            <img src="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" style="height: auto; max-width: 100%;" alt="logo" class="main-logo"> 
                            <img src="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" style="height: auto; max-width: 100%;" alt="logo" class="sticky-logo">
                        </a>
                    </div>
                    <!-- /.navbar-logo -->

                    <div class="menu-wrapper" data-top="992">
                        <ul class="navbar-main-menu">
                           <li class="menu-item-has-children">
                                <a href="javascript:void;">Blog</a>
                                <ul class="sub-menu">
                                    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('/')); ?>/cat/<?php echo e($vcat->id); ?>/1"><?php echo e($vcat->categories); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>                                
                            <li class="menu-item-has-children">
                                <a href="javascript:void;">Help</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo e(route('faq')); ?>">FAQs</a></li>
                                    <li><a href="<?php echo e(route('blog')); ?>">Supporting articles</a></li>
                                    <li><a href="<?php echo e(route('terms')); ?>">Terms & Conditions</a></li>
                                    <li><a href="<?php echo e(route('privacy')); ?>">Privacy policy</a></li>
                                    <li><a href="<?php echo e(route('contact')); ?>">Contact us</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void;">More</a>
                                <ul class="sub-menu">
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vpages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!empty($vpages)): ?>
                                        <li><a href="<?php echo e(url('/')); ?>/page/<?php echo e($vpages->id); ?>"><?php echo e($vpages->title); ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <li><a href="<?php echo e(route('about')); ?>" >About us</a></li>
                            <li><a href="<?php echo e(route('login')); ?>" >Login</a></li>
                        </ul>

                        <div class="nav-right">
                            <a href="<?php echo e(route('register')); ?>" class="nav-btn">Apply now</a>
                        </div>
                    </div>
                    <!-- /.menu-wrapper -->
                </nav>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.header-inner -->
        </div>
        <!-- /.container -->
    </header>
<!-- header end -->

<?php echo $__env->yieldContent('content'); ?>


<!-- footer begin -->
<footer id="footer" class="wow soneFadeUp">
    <div class="container">
        <div class="footer-nner">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="widget footer-widget style_logo">
                        <p><?php echo e($set->site_desc); ?></p>

                    </div>
                    <!-- /.widget footer-widget -->
                </div>
                <!-- /.col-lg-3 col-md-6 -->


                <div class="col-lg-3 col-md-6">
                    <div class="widget footer-widget">
                        <h3 class="widget-title">Main Navigation</h3>

                        <ul class="footer-menu">
                        <li><a class="text-small" href="<?php echo e(route('about')); ?>" >About</a></li>
                        <li><a class="text-small" href="<?php echo e(route('contact')); ?>" >Contact</a></li>
                        <li><a class="text-small" href="<?php echo e(route('terms')); ?>" >Terms & conditions</a></li>
                        <li><a class="text-small" href="<?php echo e(route('privacy')); ?>" >Privacy policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer-widget -->
                </div>
                <!-- /.col-lg-3 col-md-6 -->

                <div class="col-lg-3 col-md-6">
                    <div class="widget footer-widget">
                        <h3 class="widget-title">Information</h3>

                        <ul class="footer-menu">
                        <li><a class="text-small" href="<?php echo e(url('/')); ?>/#services">Services</a></li>
                        <li><a class="text-small" href="<?php echo e(url('/')); ?>/about/#subscribe">Newsletter</a></li>
                        <li><a class="text-small" href="<?php echo e(url('/')); ?>/about/#review">Review</a></li>
                        <?php if(count($faq)>0): ?>
                        <li><a class="text-small" href="<?php echo e(route('faq')); ?>">Frequently asked questions</a></li>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <!-- /.widget footer-widget -->
                </div>
                <!-- /.col-lg-3 col-md-6 -->

                <div class="col-lg-3 col-md-6">
                    <div class="widget footer-widget">
                        <h3 class="widget-title">More</h3>

                        <ul class="footer-menu">
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vpages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(!empty($vpages)): ?>
                        <li><a class="text-small text-extra-light-gray"href="<?php echo e(url('/')); ?>/page/<?php echo e($vpages->id); ?>"><?php echo e($vpages->title); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <!-- /.widget footer-widget -->
                </div>
                <!-- /.col-lg-3 col-md-6 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.footer-nner -->

        <div class="site-info">
            <div class="copyright">
                <p><?php echo e($set->site_name); ?>  &copy; <?php echo e(date('Y')); ?>. All Rights Reserved. </p>
            </div>
        </div>
        <!-- /.site-info -->
    </div>
    <!-- /.container -->
</footer>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/<?php echo e($set->tawk_id); ?>/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
        <!-- end footer -->
        <a href="#header" data-type="section-switch" class="return-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>


    <!-- Dependency Scripts -->
    <script src="<?php echo e(url('/')); ?>/asset/vendor/popper.js/popper.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/js/particles.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/swiper/js/swiper.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/jquery.appear/jquery.appear.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/wow/js/wow.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/countUp.js/countUp.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/vendor/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <!-- Site Scripts -->
    <script src="<?php echo e(url('/')); ?>/asset/js/header.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/js/app.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/js/sweetalert.js"></script>

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('script'); ?>
<?php if(session('success')): ?>
    <script>
        $(document).ready(function () {
            swal("Success!", "<?php echo e(session('success')); ?>", "success");
        });
    </script>
<?php endif; ?>

<?php if(session('alert')): ?>
    <script>
        $(document).ready(function () {
            swal("Sorry!", "<?php echo e(session('alert')); ?>", "error");
        });
    </script>
<?php endif; ?>
<script>
            <?php if(Session::has('message')): ?>
    var type = "<?php echo e(Session::get('alert-type','info')); ?>";
    switch (type) {
        case 'info':
            toastr.info("<?php echo e(Session::get('message')); ?>");
            break;
        case 'warning':
            toastr.warning("<?php echo e(Session::get('message')); ?>");
            break;
        case 'success':
            toastr.success("<?php echo e(Session::get('message')); ?>");
            break;
        case 'error':
            toastr.error("<?php echo e(Session::get('message')); ?>");
            break;
    }
    <?php endif; ?>
</script>


</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/layout.blade.php ENDPATH**/ ?>