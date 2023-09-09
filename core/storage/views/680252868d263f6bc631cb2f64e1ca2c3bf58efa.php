
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="header" class="page-backg blog-details-backg">
    <div class="animation-shape">
        <img src="<?php echo e(url('/')); ?>/asset/img/element-shape/oval-1.svg" alt="" class="oval-one">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-square-1.svg" alt="" class="shape-three">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-cross-1.svg" alt="" class="shape-four">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-square-1.svg" alt="" class="shape-eleven">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-cross-1.svg" alt="" class="shape-two">
        <img src="<?php echo e(url('/')); ?>/asset/img/shape/shape-wave-1.svg" alt="" class="shape-six">
    </div>
    <div class="container">
        <div class="page-title-wrapper">
            <ul class="post-meta color-theme">
                <li><a href="javascript:void;"><?php echo e(date("M j, Y", strtotime($post->created_at))); ?></a></li>
            </ul>
            <h1 class="page-title"><?php echo e($post->title); ?></h1>
            <ul class="post-meta">
                <li><span>By</span> <a href="#">Admin</a></li>
                <li><a href="cat/<?php echo e($xcat->id); ?>"><?php echo e($xcat->categories); ?></a></li>
            </ul>
        </div>
    </div>
</section>
<section class="blog-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 left-blog-d">
                <div class="post-wrapper">
                    <article class="post post-signle">
                        <div class="feature-image"><a href="javascript:void;"><img src="<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($post->image); ?>" alt=""></a></div>
                        <div class="blog-content">
                            <p><?php echo $post->details; ?></p>                           
                            <div class="single-blog-bottom-content">
                                <div class="blog-share">
                                    <div class="share-title">
                                        <p>Share:</p>
                                    </div>
            <?php echo $__env->make('partials.share', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- NAV -->
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/front/single.blade.php ENDPATH**/ ?>