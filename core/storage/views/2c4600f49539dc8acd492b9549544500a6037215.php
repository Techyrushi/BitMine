
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="header" class="backg backg-one" style="background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);">

<div class="circle-shape"><img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-circle.svg" alt="circle"></div>

<div class="container">
    <div class="backg-content-wrap">
        <div class="row align-items-center">
            <div class="col-lg-6 z100">
                <div class="backg-content">
                    <span class="discount wow soneFadeUp text-dark" data-wosw-delay="0.3s"><b><?php echo e($set->title); ?></span>
                    <h1 class="backg-title wow soneFadeUp text-dark" data-wow-delay="0.5s">
                    <?php echo e($ui->header_title); ?>

                    </h1>

                    <p class="description wow soneFadeUp text-dark" data-wow-delay="0.6s">
                    <?php echo e($ui->header_body); ?>

                    </p>

                    <a href="<?php echo e(route('register')); ?>" class="pxs-btn backg-btn wow soneFadeUp text-dark" data-wow-delay="0.6s">Get Started</a>
                </div>
                <!-- /.backg-content -->
            </div>
            <!-- /.col-lg-6 -->

            <div class="col-lg-6">
                <div class="promo-mockup wow soneFadeLeft">
                   
                </div>
                <!-- /.promo-mockup -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.backg-content-wrap -->
</div>
<!-- /.container -->

<div class="bg-shape bg-shape-bottom">
    <svg width="1920" height="500" viewBox="0 0 1920 500" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 378C500.193 206.37 633.5 54 1122.5 220C1611.5 386 1550.97 90.4445 1920 0V500H0V378Z" fill="white"/>
        <path class="path-back-shape" d="M446.5 273.504C354.5 274 272.5 275.504 272.5 275.504C542.689 161.595 684.5 129.5 883 159C883 159 852.5 169 826 176.504C799.5 184.009 768.913 211.198 740 227.504C701 249.5 675.329 267.561 625.5 273.504C558.972 281.439 538.5 273.009 446.5 273.504Z"/>
    </svg>
</div>
</section>

<section id="brand-logo" class="wow soneFadeUp">
    <div class="section-small text-center">
        <h2 class="title"><?php echo e($ui->s1_title); ?></h2>
    </div>

    <div class="container">
        <div class="swiper-container logo-carousel" id="logo-carousel" data-perpage="5" data-breakpoints='{"1024": {"slidesPerView": 4}, "768": {"slidesPerView": 4}, "640": {"slidesPerView": 2}}'>
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brands): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="brand-logo"><img src="<?php echo e(url('/')); ?>/asset/brands/<?php echo e($brands->image); ?>" alt="<?php echo e($brands->title); ?>"></div>
                    </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<section class="informes">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="editure-feature-image">
                    <div class="image-one">
                        <img src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->s2_image); ?>" class="wow soneFadeRight r10" data-wow-delay="0.3s" alt="feature-image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-text-content">
                    <div class="section-title">
                        <span class="sub-title"><?php echo e($set->site_name); ?></span>
                        <h2 class="title">
                            <?php echo e($ui->s2_title); ?>

                        </h2>
                        <p>
                            <?php echo e($ui->s2_body); ?>

                        </p>
                    </div>
                </div>
                <!-- /.img-text-content -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="shape-bg wow fadeInLeft">
        <svg width="701" height="611" viewBox="0 0 701 611" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="path-back-shape" d="M174.201 270.953C332.499 211.775 310.558 201.585 347.793 70.6846C385.028 -60.2155 522.67 13.7197 631.888 107.133C720.043 195.244 720.839 240.383 651.481 250.181C582.122 259.98 483.375 262.33 483.375 360.309C483.375 458.288 496.306 415.96 582.122 487.681C667.939 559.402 442.242 644.054 358.765 597.809C275.288 551.564 264.328 513.156 91.5193 519.818C-81.289 526.48 15.9029 330.131 174.201 270.953Z"/>
        </svg>
    </div>
</section>
<section class="informes">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-text-content">
                    <div class="section-title">
                        <span class="sub-title">Save 4 me</span>
                        <h2 class="title">
                        <?php echo e($ui->s3_title); ?>

                        </h2>
                        <p>
                        <?php echo e($ui->s3_body); ?>

                        </p>
                    </div>
                </div>
                <!-- /.img-text-content -->
            </div>
            <div class="col-lg-6">
                <div class="editure-feature-image">
                    <div class="image-one">
                        <img src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->s3_image); ?>" class="wow soneFadeRight r10" data-wow-delay="0.3s" alt="feature-image">
                    </div>
                </div>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="backg backg-four backg-dark" style="background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);">
    <div class="container">
        <div class="backg-content-wrap">
            <div class="row align-items-center">
                <div class="col-lg-8 z100">
                    <div class="backg-content">
                        <h1 class="title wow soneFadeUp" data-wow-delay="0.5s">
                        <?php echo e($ui->s4_title); ?>

                        </h1>
<br>
                        <p class="description wow soneFadeUp" data-wow-delay="0.6s">
                        <?php echo e($ui->s4_body); ?>

                        </p>
                        <div class="">
                            <a href="<?php echo e(route('register')); ?>" class="pxs-btn backg-btn wow soneFadeUp text-dark" data-wow-delay="0.6s">Get Started</a>
                        </div>
                    </div>
                    <!-- /.backg-content -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                    <div class="promo-mockup mockup-mobile wow soneFadeUp" data-wow-delay="0.6s">
                        <img class="mockup-mobile-img-1" alt="" src="<?php echo e(url('./')); ?>/asset/images/<?php echo e($ui->s4_image); ?>">
                    </div>
                    <!-- /.promo-mockup -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.backg-content-wrap -->
    </div>
    <!-- /.container -->

    <div class="bg-shape bg-shape-bottom">
        <svg width="1920" height="698" viewBox="0 0 1920 698" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1081 307.5L1920 0V698H0L1081 307.5Z" fill="white"/>
        </svg>
    </div>
</section>
<section class="services-2 wow soneFadeUp" id="services">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title">Our services</span>
            <h2 class="title">Our capabilities</h2>
        </div>
        <!-- /.section-title -->

        <div class="row">
            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="services-box-wrapper">
                    <div class="services-box-content">
                        <h3 class="services-box-content-title"><a href="#"><?php echo e($services->title); ?></a></h3>
                        <p><?php echo e($services->details); ?></p>
                    </div>
                </div>
                <!-- /.saasone-box style-two -->
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- /.col-lg-4 col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="revolutionize revolutionize-two wow soneFadeUp">
    <div class="bg-top">
        <svg width="1980" height="1048" viewBox="0 0 1980 1048" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="path-back-shape" d="M0 0C928.798 191.774 1789.23 848.231 1980 130.176V1048C1144.65 918.284 558.169 465.411 0 914.528V0Z" fill="#FFF8EE"/>
        </svg>
    </div>
    <div class="container">
        <div class="section-title text-center">
            <h3 class="sub-title">Frequent question</h3>
        </div>
        
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title text-left">
                    <h5 class="title">
                    <?php echo e($ui->s5_title); ?>

                    </h5>

                    <p>
                    <?php echo e($ui->s5_body); ?>

                    </p>

                    <a href="<?php echo e(route('faq')); ?>" class="sone-btn btn-outline">Discover More</a>
                </div>
            </div>
            <div id="accordion" class="col-lg-8 faq">
                <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vfaq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <div class="card-header" id="heading<?php echo e($vfaq->id); ?>">
                        <h5><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?php echo e($vfaq->id); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($vfaq->id); ?>"><?php echo e($vfaq->question); ?></button></h5>
                    </div>
                    <div id="collapse<?php echo e($vfaq->id); ?>" class="collapse" aria-labelledby="heading<?php echo e($vfaq->id); ?>" data-parent="#accordion" style="">
                        <div class="card-body">
                            <p><?php echo $vfaq->answer; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </div>
</section>
<?php if(count($posts)>0): ?>
<section id="blog-list" class="wow soneFadeUp">
    <div class="container">
        <div class="section-title flex_center_betwen">
            <div class="title_l">
                <span class="sub-title">News & Cases</span>
                <h2 class="title">Latest posts</h2>
            </div>
            <div class="show_more_b">
                <a href="<?php echo e(route('blog')); ?>" class="sone-btn">Read All Posts</a>
            </div>
        </div>
        <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vblog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <article class="blog-post">
                    <div class="feature-image"><a href="<?php echo e(url('/')); ?>/single/<?php echo e($vblog->id); ?>/<?php echo e(str_slug($vblog->title)); ?>"><img src="<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($vblog->image); ?>" alt="blog-thumb"></a></div>
                    <div class="blog-content">
                        <ul class="post-meta">
                            <li><?php echo e(date("M j, Y", strtotime($vblog->created_at))); ?></li>
                        </ul>
                        <h3 class="entry-title"><a href="<?php echo e(url('/')); ?>/single/<?php echo e($vblog->id); ?>/<?php echo e(str_slug($vblog->title)); ?>"><?php echo str_limit($vblog->title, 60);; ?>..</a></h3>
                </article>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="call-to-action" style="background-image:url('<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->s7_image); ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 z100">
                <div class="action-content text-center">
                    <h2 class="title text-dark text-left">
                    <?php echo e($ui->s6_title); ?>

                    </h2>

                    <p class="text-dark text-left"> 
                    <?php echo e($ui->s6_body); ?>

                     </p>
                </div>
            </div>
        </div>
        <!-- /.action-content -->
    </div>
    <!-- /.container -->
</section>
<div class="pt-100"></div>
<?php if(count($review)>0): ?>
<section class="testimonials-two wow soneFadeUp" id="testimonialxx">
    <div class="animation-shape">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-triangle-1.svg" alt="" class="shape-five">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-square-1.svg" alt="" class="shape-three">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-cross-1.svg" alt="" class="shape-four">
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <div class="section-title">
                <h3 class="sub-title">Reviews</h3>
                <h2 class="title"><?php echo e($ui->s7_title); ?></h2>
                <p><?php echo e($ui->s7_body); ?></p>
            </div>
        </div>
        <div class="col-lg-8">
            <div id="testimonial-wrapper">
                <div class="swiper-container" id="testimonial-two" data-speed="700" data-autoplay="5000" data-perpage="2" data-space="50" data-breakpoints='{"991": {"slidesPerView": 1}}'>
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vreview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="testimonial-two">
                                    <div class="testi-content-inner">
                                        <div class="testimonial-bio">
                                            <div class="avatar"><img src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($vreview->image_link); ?>" alt="testimonial"></div>
                                            <div class="bio-info">
                                                <h3 class="name"><?php echo e($vreview->name); ?></h3>
                                                <span class="job"><?php echo e($vreview->occupation); ?></span></div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p><?php echo e($vreview->review); ?></p>
                                        </div>
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
        
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/front/index.blade.php ENDPATH**/ ?>