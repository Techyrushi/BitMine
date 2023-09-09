<?php $__env->startSection('content'); ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo e(url('/')); ?>/asset/images/maintenance-bg.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-1"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-10 col-md-10">
        <h1 class="display-2 text-white">Transaction history</h1>
        <p class="text-white mt-0 mb-5">This is your account statement page. Always keep track for your account history</p>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="card bg-gradient-default shadow">
        <div class="card-header bg-transparent">
          <h3 class="mb-0 text-white">Account timeline</h3>
        </div>
        <div class="card-body">
          <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
          <?php $__currentLoopData = $alert; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="timeline-block">
                <span class="timeline-step badge-info">
                  <i class="ni ni-like-2"></i>
                </span>
                <div class="timeline-content">
                  <small class="text-light font-weight-bold"><?php echo e(date("Y/m/d h:i:A", strtotime($hh->created_at))); ?></small>
                  <h5 class="text-white mt-3 mb-0">#<?php echo e($hh->reference); ?></h5>
                  <p class="text-light text-sm mt-1 mb-0">Date: <?php echo e($hh->created_at); ?>,  Amt: <?php echo e(number_format($hh->amount).$currency->name); ?>, Ref: <?php echo e($hh->reference); ?>, Desc: <?php echo e($hh->details); ?></p>
                  <div class="mt-3">
                    <span class="badge badge-pill badge-primary">
                      <?php if($hh->type==1): ?>
                        Debit
                      <?php elseif($hh->type==2): ?>
                        Credit
                      <?php endif; ?>
                    </span>
                    <span class="badge badge-pill badge-secondary">
                      <?php if($hh->status==1): ?>
                        Successful
                      <?php elseif($hh->status==0): ?>
                        Pending
                      <?php endif; ?>
                    </span>
                  </div>
                </div>
              </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/statement.blade.php ENDPATH**/ ?>