<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="wow fadeIn no-padding cover-background" style="background:url('<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($page_thumbnail); ?>'); background-repeat: no-repeat;">
    <div class="opacity-full-dark bg-black-opacity"></div>
    <div class="container full-screen position-relative">
        <div class="slider-typography text-left">
            <div class="slider-text-middle-main">
                <div class="slider-text-middle">
                    <div class="col-lg-10 col-md-10 col-sm-10 center-col text-center">
            <h2 class="alt-font text-white font-weight-600 letter-spacing-minus-1 text-extra-dark-gray"><?php echo e($page_title); ?></h2>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
<section class="bg-white wow fadeIn">
    <div class="sm-padding-20px-all xs-padding-30px-all"></div>
        <div class="container">
            <div class="row">
                <main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom no-padding-left sm-no-padding-right">
                <div class="col-md-12 col-sm-12 col-xs-12 blog-details-text text-black last-paragraph-no-margin">
                <span class="alt-font text-black margin-20px-bottom display-inline-block"><?php echo $page_content; ?></span>
                </div>
                <?php echo $__env->make('partials.share', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </main> 
                <aside class="col-md-3 col-sm-12 col-xs-12 pull-right">
                <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 </aside>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maxtrade\core\resources\views/front/single.blade.php ENDPATH**/ ?>