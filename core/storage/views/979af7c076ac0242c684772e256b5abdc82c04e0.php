
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
                    About us
                    </h1>
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

<section class="about genera-informes wow soneFadeUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="section-title">
                        <span class="sub-title">Our Company</span>
                        <p><?php echo $about->about; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if(count($review)>0): ?>
<section class="testimonials-two wow soneFadeUp" id="review">
    <div class="animation-shape">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-triangle-1.svg" alt="" class="shape-five">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-square-1.svg" alt="" class="shape-three">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-cross-1.svg" alt="" class="shape-four">
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <div class="section-title">
                <h3 class="sub-title">Testimonial</h3>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/front/about.blade.php ENDPATH**/ ?>