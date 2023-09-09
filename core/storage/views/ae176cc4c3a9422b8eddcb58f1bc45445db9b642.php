
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
                    Contact us
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
<section id="contact" class="wow soneFadeUp" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-froms">
                    <form action="<?php echo e(route('contact-submit')); ?>" method="post" class="contact-form" data-saasone="contact-froms">
                    <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="text" name="mobile" placeholder="Mobile" required>
                            </div>
                        </div>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="message" placeholder="Your Comment" required></textarea> 

                        <button type="submit" class="sone-btn submit-btn">Send Your Massage</button>
                        
                        <div class="form-result alert">
                            <div class="content"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services address-contact" style="padding-top:60px !important;">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title">Don’t hesitate to contact us for<br>any information.</h2>
        </div>
        
        <div class="row gap-y">

            <div class="col-md-4">
              <div class="services-box-wrapper text-center">
                <div class="my-3 services-box-icon"><i class="fas fa-map-marker-alt"></i></div>
                <h5 class="mb-5 fw-500">Our Location</h5>
                <p><?php echo e($set->address); ?></p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="services-box-wrapper text-center">
                <div class="my-3 services-box-icon"><i class="fas fa-envelope-open"></i></div>
                <h5 class="mb-5 fw-500 color-2">Email & Phone</h5>
                <p>
                <a href=""><?php echo e($set->email); ?></a>
                <br>
                <a href=""><?php echo e($set->mobile); ?></a>
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="services-box-wrapper text-center">
                <div class="my-3 services-box-icon"><i class="fas fa-border-all"></i></div>
                <h5 class="mb-5 fw-500">Get In Touch</h5>
                <p>Also find us social media below</p>
                 <ul class="social-link">
                    <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(!empty($socials->value)): ?>
                    <li><a href="<?php echo e($socials->value); ?>" ><i class="fab fa-<?php echo e($socials->type); ?>"></i></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </ul>
              </div>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/front/contact.blade.php ENDPATH**/ ?>