
<div class="col-lg-4 right-blog-d">
    <div class="sidebar">
        <aside class="widget w-latest-news">
            <h5 class="widget-title">Latest Posts</h5>
            <ul class="latest-news-list">
            <?php $__currentLoopData = $trending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vtrending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $vslug=str_slug($vtrending->title); ?>
                <li>
                    <article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
                        <div class="post__date">
                            <time class="published" datetime="2018-03-08 12:00:00">
                                <span class="number"><?php echo e(date("j", strtotime($vtrending->created_at))); ?></span> <?php echo e(date("M", strtotime($vtrending->created_at))); ?>, <?php echo e(date("Y", strtotime($vtrending->created_at))); ?>

                            </time>
                        </div>
                        <a href="<?php echo e(url('/')); ?>/single/<?php echo e($vtrending->id); ?>/<?php echo e($vslug); ?>" class="h6 post__title entry-title"><?php echo e($vtrending->title); ?></a>
                    </article>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </aside>
        <div id="categories" class="widget widget_categories">
            <h5 class="">Categories</h5>
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
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/anycoin/core/resources/views/partials/sidebar.blade.php ENDPATH**/ ?>