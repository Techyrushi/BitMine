
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
                    Latest news
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
<div class="blog-post-archive pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 left-blog-d">
                <div class="post-wrapper post-wrapper-v2">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vblog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="post wow soneFadeUp" data-wow-delay="0.3s">
                        <div class="feature-image">
                            <a href="<?php echo e(url('/')); ?>/single/<?php echo e($vblog->id); ?>/<?php echo e(str_slug($vblog->title)); ?>"><img src="<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($vblog->image); ?>" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <ul class="post-meta">
                                <li><a href="javascript:void;"><?php echo e(date("M j, Y", strtotime($vblog->created_at))); ?></a></li>
                            </ul>
                            <h3 class="entry-title">
                                <a href="<?php echo e(url('/')); ?>/single/<?php echo e($vblog->id); ?>/<?php echo e(str_slug($vblog->title)); ?>"><?php echo e($vblog->title); ?></a>
                            </h3>
                            <p><?php echo str_limit($vblog->content, 60);; ?>..</p>
                            <a href="<?php echo e(url('/')); ?>/single/<?php echo e($vblog->id); ?>/<?php echo e(str_slug($vblog->title)); ?>" class="read-more">Read More <i class="ei ei-arrow_right"></i></a>
                        </div>
                    </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="text-center margin-50px-top margin-50px-bottom sm-margin-50px-top wow fadeInUp">
                        <?php echo e($posts->render()); ?>

                    </div>
                </div>
            </div>
            <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/front/blog.blade.php ENDPATH**/ ?>