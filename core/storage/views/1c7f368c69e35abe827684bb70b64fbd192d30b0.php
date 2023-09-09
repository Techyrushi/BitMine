<div class="col-lg-4 col-md-6 col-sm-8 right-blog-d">
    <div class="sidebar">
        <div id="gp-posts-widget-2" class="widget gp-posts-widget">
            <h2 class="widget-title">Latest Posts</h2>
            <div class="gp-posts-widget-wrapper">
            <?php $__currentLoopData = $trending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vtrending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $vslug=str_slug($vtrending->title); ?>
                <div class="post-item">
                    <div class="post-widget-thumbnail"><a href="<?php echo e(url('/')); ?>/single/<?php echo e($vtrending->id); ?>/<?php echo e($vslug); ?>"><img src="<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($vtrending->image); ?>" alt="thumb"></a></div>
                    <div class="post-widget-info">
                        <h5 class="post-widget-title"><a href="<?php echo e(url('/')); ?>/single/<?php echo e($vtrending->id); ?>/<?php echo e($vslug); ?>" title="<?php echo e($vtrending->title); ?>"><?php echo e($vtrending->title); ?></a></h5></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div id="categories" class="widget widget_categories">
            <h2 class="widget-title">Categories</h2>
            <ul>
            <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                <?php
                    $cslug=str_slug($vcat->categories);
                    $rate=count(DB::select('select * from trending where cat_id=? and status=?', [$vcat->id,1]));
                ?> 
                <li><a href="<?php echo e(url('/')); ?>/cat/<?php echo e($vcat->id); ?>/<?php echo e($cslug); ?>"><?php echo e($vcat->categories); ?><span class="count">(<?php echo e($rate); ?>)</span></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/partials/sidebar.blade.php ENDPATH**/ ?>