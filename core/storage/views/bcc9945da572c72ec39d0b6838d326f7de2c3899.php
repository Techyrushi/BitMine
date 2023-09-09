<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 medium-padding120 responsive-align-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <img class="responsive-width-50" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->s2_image); ?>" alt="image">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                <header class="crumina-module crumina-heading heading--h1 heading--with-decoration">
                    <h3 class="heading-title f-size-90 weight-normal no-margin"> 
                        <?php echo e($ui->header_title); ?>

                    </h3>
                    <h2 class="c-primary"><?php echo e($ui->header_body); ?></h2>
                </header>
                <a data-scroll href="<?php echo e(route('register')); ?>" class="btn btn--large btn--transparent btn--secondary">Get started</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row medium-padding80">
            <div class="align-center">
                <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                    <h2 class="heading-title weight-normal">The most trusted cryptocurrency platform</h2>
                    <div class="heading-text">Here are a few reasons why you should choose us</div>
                </header>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30">
                        <div class="crumina-module crumina-info-box info-box--style4">
                            <div class="info-box-thumb">
                                <i class="fa fa-<?php echo e($services->icon); ?> woox-icon text-yellow"></i>
                            </div>
                            <div class="info-box-content">
                                <h4 class="info-box-title"><?php echo e($services->title); ?></h4>
                                <p class="info-box-text"><?php echo e($services->details); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>
</section>
<section class="medium-padding120 responsive-align-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                    <div class="heading-sup-title">Letsmine</div>
                    <h2 class="heading-title weight-normal"><?php echo e($ui->s6_title); ?></h2>
                </header>

                <p><?php echo e($ui->s6_body); ?></p>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt30">
                <img class="responsive-width-50" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->s7_image); ?>" alt="phone">
            </div>
        </div>
    </div>
</section>
<section class="pt-mobile-80">
    <div class="container">
        <div class="row medium-padding100">
        <?php $__currentLoopData = $plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mb30" data-mh="pricing-item">
                <div class="crumina-module crumina-pricing-table pricing-table--style1">
                    <div class="pricing-thumb">
                        <img src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>" class="woox-icon" alt="bitcoin">
                    </div>
                    <h5 class="pricing-title"><?php echo e($val->name); ?></h5>
                    <div class="price">
                        <div class="price-sup-title">Price:</div>
                        <div class="price-value"><?php echo e($val->min_deposit); ?>BTC</div>
                    </div>
                    <ul class="pricing-tables-position">
                        <li class="position-item">
                            <div class="currency-details-item">
                                <h6 class="title">Duration:</h6>
                                <h6 class="value">For <?php echo e($val->duration.$val->period); ?>(s)</h6>
                            </div>
                        </li>
                        <li class="position-item">
                            <div class="currency-details-item">
                                <h6 class="title">Referral:</h6>
                                <h6 class="value"><?php echo e($val->ref_percent); ?>%</h6>
                            </div>
                        </li>
                        <li class="position-item">
                            <div class="currency-details-item">
                                <h6 class="title">Hashrate:</h6>
                                <h6 class="value"><?php echo e($val->hashrate); ?></h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<section class="medium-padding120 responsive-align-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                    <div class="heading-sup-title">Frequent questions</div>
                    <h2 class="heading-title weight-normal"><?php echo e($ui->s5_title); ?></h2>
                </header>
                <p><?php echo e($ui->s5_body); ?></p>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt30">
                <ul class="crumina-module crumina-accordion accordion--style3" id="accordion4">
                    <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vfaq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="accordion-panel">
                        <div class="panel-heading">
                            <a href="#<?php echo e($vfaq->id); ?>" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
                                <span class="icons">
                                    <svg class="woox-icon icon-plus-sign"><use xlink:href="<?php echo e(url('/')); ?>/asset/frontend/svg-icons/sprites/icons.svg#icon-plus-sign"></use></svg>
                                    <svg class="woox-icon active icon-min-sign"><use xlink:href="<?php echo e(url('/')); ?>/asset/frontend/svg-icons/sprites/icons.svg#icon-min-sign"></use></svg>
                                </span>
                                <span class="title"><?php echo e($vfaq->question); ?></span>
                            </a>
                        </div>

                        <div id="<?php echo e($vfaq->id); ?>" class="panel-collapse collapse" aria-expanded="false" role="tree">
                            <div class="panel-info">
                                <?php echo $vfaq->answer; ?>

                            </div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row medium-padding120">
            <div class="align-center">
                <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                    <h2 class="heading-title weight-normal"><?php echo e($ui->s8_title); ?></h2>
                    <div class="heading-text"><?php echo e($ui->s8_body); ?></div>
                </header>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="counters">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers counter">
                                <?php echo e($ui->total_assets); ?>

                            </div>
                            <h4 class="counter-title">Total asset</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers counter">
                                <?php echo e($ui->experience); ?>

                            </div>
                            <h4 class="counter-title">Years of experience</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers counter">
                                <?php echo e($ui->traders); ?>

                            </div>
                            <h4 class="counter-title">Qualified traders</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers counter">
                                <?php echo e($ui->countries); ?>

                            </div>
                            <h4 class="counter-title">Countries supported</h4>
                        </div>
                    </div>
                </div>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core\resources\views/front/index.blade.php ENDPATH**/ ?>