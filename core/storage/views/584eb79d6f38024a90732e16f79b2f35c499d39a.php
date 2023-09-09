
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="header" class="backg backg-one" style="background-image: linear-gradient(0deg, #240b36 0%, #c31432 100%);">
    <div class="circle-shape"><img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-circle-3.svg" alt="circle"></div>
    <div id="particles-js"></div>
    <div class="container">
        <div class="backg-content-wrap">
            <div class="row align-items-center">
                <div class="col-lg-6 z100">
                    <div class="backg-content">
                        <span class="discount wow soneFadeUp" data-wosw-delay="0.3s"><b><?php echo e($set->title); ?></span>
                        <h1 class="backg-title wow soneFadeUp" data-wow-delay="0.5s">
                        <?php echo e($ui->header_title); ?>

                        </h1>

                        <p class="description wow soneFadeUp" data-wow-delay="0.6s">
                        <?php echo e($ui->header_body); ?>

                        </p>

                        <a href="<?php echo e(route('register')); ?>" class="pxs-btn backg-btn wow soneFadeUp" data-wow-delay="0.6s">Create an account</a>
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
<section>
    <div class="container">
        <div class="row">
        <div class="col-lg-5 flex-center">
                <div class="section-title style-two">
                    <h2 class="title">
                        <?php echo e($ui->s2_title); ?>

                    </h2>
                    <p>
                        <?php echo e($ui->s2_body); ?>

                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="feature-box">
                    <div class="row">
                        <div class="col-lg-6 flex-center">
                            <div class="featured-icon-box-wrapper style-five color-1">
                                <div class="featured-icon-box-icon"><img src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->s2_image); ?>"></div>
                                <div class="featured-icon-box-content">
                                    <h3 class="featured-icon-box-title"><?php echo e($ui->item1_title); ?></h3>
                                    <p><?php echo e($ui->item1_body); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="featured-icon-box-wrapper style-five color-1">
                                <div class="featured-icon-box-icon"><img src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->s3_image); ?>"></div>
                                <div class="featured-icon-box-content">
                                    <h3 class="featured-icon-box-title"><?php echo e($ui->item2_title); ?></h3>
                                    <p><?php echo e($ui->item2_body); ?></p>
                                </div>
                            </div>
                            <div class="featured-icon-box-wrapper style-five color-1">
                                <div class="featured-icon-box-icon"><img src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->s4_image); ?>"></div>
                                <div class="featured-icon-box-content">
                                    <h3 class="featured-icon-box-title"><?php echo e($ui->item3_title); ?></h3>
                                    <p><?php echo e($ui->item3_body); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="pricing-two pt-50 wow soneFadeUp">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title">Pricing Plan</span>
                <h2 class="title">
                    Choose your pricing policy which affordable
                </h2>
            </div>
            <div class="row advanced-pricing-table no-gutters">
                <?php $__currentLoopData = $plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="pricing-table">
                        <div class="pricing-header pricing-amount">
                            <h3 class="price-title"><?php echo e($val->name); ?></h3>
                            <p>Payouts won'tbe availabe till end of plan duration </p>

                            <div class="annual_price">
                                <h2 class="price"><?php echo e($val->min_deposit); ?>BTC</h2>
                            </div>
                            <div class="monthly_price">
                                <h2 class="price"><?php echo e($val->min_deposit); ?>BTC</h2>
                            </div>
                            <div class="small_desc text-center">
                                <a href="#">Profit topup is automated</a>
                            </div>

                            <div class="action text-center">
                                <a href="<?php echo e(route('register')); ?>" class="sone-btn btn-outline">Choose This Plan</a>
                            </div>
                        </div>
                        <ul class="price-feture">
                            <li class="have">For <?php echo e($val->duration.$val->period); ?>(s)</li>
                            <li class="have"><?php echo e($val->percent); ?> daily percent</li>
                            <li class="have"><?php echo e($val->amount); ?>BTC max price</li>
                            <li class="have">Order Notifications</li>
                            <li class="have"><?php echo e($val->ref_percent); ?>% Referral percent</li>
                            <li class="have">Support 24/7</li>
                            <li class="have">Updates</li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
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

                    <a href="<?php echo e(route('faq')); ?>" class="sone-btn">Discover More</a>
                </div>
            </div>
            <div id="accordion" class="col-lg-8 faq">
                <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vfaq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <div class="card-header" id="heading<?php echo e($vfaq->id); ?>" style="background: #240b36;">
                        <h5 class="text-white"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?php echo e($vfaq->id); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($vfaq->id); ?>"><span class="text-white"><?php echo e($vfaq->question); ?></span></button></h5>
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
<section class="services pt-0 wow soneFadeUp">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title">Services</span>
                <h2 class="title">The most trusted cryptocurrency platform</h2>
                <p>Here are a few reasons why you should choose us</p>
            </div>

            <div class="row gap-y">
            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-xl-3">
                    <div class="services-box-wrapper text-center">
                        <div class="my-3 services-box-icon color-1"><i class="fa fa-<?php echo e($services->icon); ?>"></i></div>
                        <h5 class="mb-20 fw-500 text-dark"><a href="#"><?php echo e($services->title); ?></a></h5>
                        <p><?php echo e($services->details); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<section class="call-to-action" style="background-image:url('<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->s7_image); ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 z100">
            </div>            
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
<section class="countup bg-light-gray">
    <div class="pt-100" ></div>
    <div class="container">
        <div class="section-title text-center">
            <h3 class="sub-title">Get Assured Profits</h3>
            <h2 class="title"><?php echo e($ui->s8_title); ?></h2>
            <p><?php echo e($ui->s8_body); ?></p>
        </div>
        <div class="countup-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fun-fact text-center color-three">
                        <div class="counter">
                            <h4 class="count"><?php echo e($ui->total_assets); ?></h4></div>
                        <p>Total asset</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fun-fact text-center color-three">
                        <div class="counter">
                            <h4 class="count"><?php echo e($ui->experience); ?></h4></div>
                        <p>Years of experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fun-fact text-center  color-three">
                        <div class="counter">
                            <h4 class="count"><?php echo e($ui->traders); ?></h4></div>
                        <p>Qualified traders</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fun-fact text-center color-three">
                        <div class="counter">
                            <h4 class="count"><?php echo e($ui->countries); ?></h4></div>
                        <p>Countries supported</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="background-image: linear-gradient(0deg, #240b36 0%, #c31432 100%);">
    <?php if(count($review)>0): ?>
    <section class="testimonials swiper-init">
        <div class="pt-100" ></div>
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title wow soneFadeUp text-white">Reviews</span>
                <h2 class="title wow soneFadeUp text-white" data-wow-delay="0.3s"><?php echo e($ui->s7_title); ?></h2>
            </div>
            <!-- /.section-title -->

            <div class="testimonial-wrapper wow soneFadeUp" data-wow-delay="0.5s">
                <div class="swiper-container" id="testimonial" data-speed="700" data-autoplay="5000" data-perpage="1" data-space="50" data-breakpoints='{"991": {"slidesPerView": 1}}'>

                    <div class="swiper-wrapper">
                    <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vreview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <p class="text-white"><?php echo e($vreview->review); ?></p>
                                </div>
                                <!-- /.testimonial-content -->
                                <div class="single-bio-thumb">
                                    <img src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($vreview->image_link); ?>" alt="testimonial">
                                </div>
                                <!-- /.single-bio-thumb -->
                                <div class="bio-info">
                                    <h3 class="name text-white"><?php echo e($vreview->name); ?></h3>
                                    <span class="job text-white"><?php echo e($vreview->occupation); ?></span>
                                </div>
                                <!-- /.bio-info -->
                            </div>
                            <!-- /.testimonial -->
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- /.swiper-wrapper -->
                </div>
                <!-- /.swiper-container -->
                <div class="slider-nav wow soneFadeUp" data-wow-delay="0.3s">
                    <div id="slide-prev" class="swiper-button-prev">
                        <i class="ei ei-arrow_left"></i>
                    </div>
                    <div id="slide-next" class=" swiper-button-next">
                        <i class="ei ei-arrow_right"></i>
                    </div>
                </div>
            </div>
            <!-- /.testimonial-wrapper -->
        </div>
        <!-- /.container -->
    </section>
</div>

<section id="brand-logo" class="wow soneFadeUp bg-light-gray">
<div class="pt-100" ></div>
    <div class="section-title text-center">
        <span class="sub-title">We accept</span>
        <h3 class="title">Fund your account with different payment methods</h3>
    </div>

    <div class="container">
        <div class="swiper-container logo-carousel" id="logo-carousel" data-perpage="5" data-breakpoints='{"1024": {"slidesPerView": 4}, "768": {"slidesPerView": 4}, "640": {"slidesPerView": 2}}'>
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $gateway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="brand-logo"><img src="<?php echo e(url('/')); ?>/asset/payment_gateways/<?php echo e($val->gateimg); ?>" alt="<?php echo e($val->name); ?>"></div>
                    </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/front/index.blade.php ENDPATH**/ ?>