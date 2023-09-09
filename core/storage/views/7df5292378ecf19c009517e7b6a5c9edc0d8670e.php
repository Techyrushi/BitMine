<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section class="wow fadeIn bg-white">
	<div class="sm-padding-50px-all xs-padding-50px-all"></div>
        <div class="container">
            <main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom sm-padding-15px-lr">
        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vblog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $slug  = str_slug($vblog->title);
                     $vcat=DB::select('select * from trending_cat where id=?', [$vblog->cat_id]);
        ?>
                <div class="equalize sm-equalize-auto blog-post-content margin-60px-bottom padding-60px-bottom display-inline-block border-bottom border-color-extra-light-gray sm-margin-30px-bottom sm-padding-30px-bottom xs-text-center sm-no-border">
                    <div class="blog-image col-md-5 no-padding sm-margin-30px-bottom xs-margin-20px-bottom margin-45px-right sm-no-margin-right display-table">
                        <div class="display-table-cell vertical-align-middle">
                            <a href="<?php echo e(url('/')); ?>/single/<?php echo e($vblog->id); ?>/<?php echo e($slug); ?>"><img src="<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($vblog->thumbnails); ?>" alt="" /></a>
                        </div>
                    </div>
                    <div class="blog-text col-md-6 display-table no-padding">
                        <div class="display-table-cell vertical-align-middle">
                            <div class="content margin-20px-bottom sm-no-padding-left ">
                                <a href="<?php echo e(url('/')); ?>/single/<?php echo e($vblog->id); ?>/<?php echo e($slug); ?>" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-500 display-inline-block"><?php echo e($vblog->title); ?></a>
                                <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="javascript:void;" class="text-medium-gray">Admin</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><?php echo e(date("M j, Y", strtotime($vblog->created_at))); ?></span></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><?php echo e($vcat[0]->categories); ?></span></div>
                                <p class="no-margin width-95 alt-font"><?php echo str_limit($vblog->content, 300);; ?>....</p>
                            </div>
                            <a class="btn btn-very-small btn-transparent-black text-uppercase" href="<?php echo e(url('/')); ?>/single/<?php echo e($vblog->id); ?>/<?php echo e($slug); ?>">Continue Reading</a>
                        </div>
                    </div>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="text-center margin-50px-top margin-50px-bottom sm-margin-50px-top wow fadeInUp">
                    <?php echo e($blog->render()); ?>

                </div>
            </main> 
			<aside class="col-md-3 col-sm-12 col-xs-12 pull-right">               
                    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </aside>
        </div>
</section> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maxtrade\core\resources\views/front/blog.blade.php ENDPATH**/ ?>