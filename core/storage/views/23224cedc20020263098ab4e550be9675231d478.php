
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 medium-padding120">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
                <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                    <h2 class="heading-title heading--half-colored"> About us</h2>     
                </header>
            </div>
        </div>
    </div>
</section>
<section class="medium-padding120 responsive-align-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                    <div class="heading-sup-title"><?php echo e($set->site_name); ?></div>
                </header>
                <p><?php echo $about->about; ?></p>
            </div>
        </div>
    </div>
</section>
<?php if(count($review)>0): ?>
<section class="pt-mobile-80">
		<div class="container">
			<div class="row medium-padding100">
            <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vreview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30">
					<div class="crumina-module crumina-testimonial-item testimonial-item--with-bg">
						<div class="testimonial-content">
							<h6 class="testimonial-text">
								<svg class="woox-icon icon-quote-icon quote"><use xlink:href="svg-icons/sprites/icons.svg#icon-quote-icon"></use></svg>
								<svg class="woox-icon icon-quote-icon2 quote quote-close"><use xlink:href="svg-icons/sprites/icons.svg#icon-quote-icon2"></use></svg>
								<?php echo e($vreview->review); ?>

							</h6>
							<div class="author-block">
								<div class="avatar avatar80">
									<img src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($vreview->image_link); ?>" alt="avatar">
								</div>
								<div class="author-content">
									<a href="#" class="author-name"><?php echo e($vreview->name); ?></a>
									<div class="author-prof"><?php echo e($vreview->occupation); ?></div>
									<ul class="rait-stars">
										<li>
											<svg class="woox-icon icon-star-1"><use xlink:href="<?php echo e(url('/')); ?>/asset/frontend/svg-icons/sprites/icons.svg#icon-star-1"></use></svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1"><use xlink:href="<?php echo e(url('/')); ?>/asset/frontend/svg-icons/sprites/icons.svg#icon-star-1"></use></svg>
										</li>

										<li>
											<svg class="woox-icon icon-star-1"><use xlink:href="<?php echo e(url('/')); ?>/asset/frontend/svg-icons/sprites/icons.svg#icon-star-1"></use></svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1"><use xlink:href="<?php echo e(url('/')); ?>/asset/frontend/svg-icons/sprites/icons.svg#icon-star-1"></use></svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1"><use xlink:href="<?php echo e(url('/')); ?>/asset/frontend/svg-icons/sprites/icons.svg#icon-star-1"></use></svg>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
    </section>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bitmine/core/resources/views/front/about.blade.php ENDPATH**/ ?>