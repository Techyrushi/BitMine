
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 medium-padding120">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
                <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                    <h2 class="heading-title heading--half-colored"> <?php echo e($title); ?></h2>     
                </header>
            </div>
        </div>
    </div>
</section>
<div class="blog-post-archive pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 left-blog-d">
                <div class="post-wrapper post-wrapper-v2">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vblog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<article class="hentry post post-standard has-post-thumbnail">
						<div class="row">
							<div class="col-lg-1">
								<div class="post__date">
									<a href="#" class="number"><?php echo e(date("j", strtotime($vblog->created_at))); ?></a>
									<time class="published" datetime="2018-01-15 12:00:00">
                                    <?php echo e(date("M", strtotime($vblog->created_at))); ?>, <?php echo e(date("Y", strtotime($vblog->created_at))); ?>

									</time>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="post-thumb">
									<img src="<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($vblog->image); ?>" alt="post">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="post__content">

									<a href="<?php echo e(url('/')); ?>/single/<?php echo e($vblog->id); ?>/<?php echo e(str_slug($vblog->title)); ?>" class="h3 post__title entry-title"><?php echo e($vblog->title); ?></a>

									<p class="post__text"><?php echo str_limit($vblog->content, 60);; ?>..</p>

									<div class="post-additional-info">
										<a href="<?php echo e(url('/')); ?>/single/<?php echo e($vblog->id); ?>/<?php echo e(str_slug($vblog->title)); ?>" class="btn btn--large btn--secondary btn--transparent btn--with-icon btn--icon-right">
											Read More
										</a>
									</div>

								</div>
							</div>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/anycoin/core/resources/views/front/cat.blade.php ENDPATH**/ ?>