
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="header" class="backg backg-one" style="background-image: linear-gradient(0deg, #240b36 0%, #c31432 100%);">
<div class="circle-shape"><img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-circle-3.svg" alt="circle"></div>
<div class="container">
    <div class="backg-content-wrap">
        <div class="row align-items-center">
            <div class="col-lg-6 z100">
                <div class="backg-content">
                    <span class="discount wow soneFadeUp " data-wosw-delay="0.3s"><b><?php echo e($set->title); ?></span>
                    <h1 class="backg-title wow soneFadeUp " data-wow-delay="0.5s">
                   Frequently asked questions
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-shape bg-shape-bottom">
    <svg width="1920" height="500" viewBox="0 0 1920 500" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 378C500.193 206.37 633.5 54 1122.5 220C1611.5 386 1550.97 90.4445 1920 0V500H0V378Z" fill="white"/>
        <path class="path-back-shape" d="M446.5 273.504C354.5 274 272.5 275.504 272.5 275.504C542.689 161.595 684.5 129.5 883 159C883 159 852.5 169 826 176.504C799.5 184.009 768.913 211.198 740 227.504C701 249.5 675.329 267.561 625.5 273.504C558.972 281.439 538.5 273.009 446.5 273.504Z"/>
    </svg>
</div>
</section>
<section class="revolutionize revolutionize-two wow soneFadeUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title text-left">
                    <h5 class="title">
                    <?php echo e($ui->s5_title); ?>

                    </h5>

                    <p>
                    <?php echo e($ui->s5_body); ?>

                    </p>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/front/faq.blade.php ENDPATH**/ ?>