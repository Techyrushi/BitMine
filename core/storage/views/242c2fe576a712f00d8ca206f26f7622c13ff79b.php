<?php $__env->startSection('content'); ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url('<?php echo e(url('/')); ?>/asset/images/entrepreneur-593371_1280.jpg'); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-3"></span>
  <!-- Header container -->
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="d-inline-block mb-0 text-white">Acct - #<?php echo e($user->acct_no); ?></h1>
        </div>
        <div class="col-lg-6 col-12 text-right">
        <?php if($set->py_scheme==1): ?>
          <?php if($user->upgrade==0): ?>
          <a href="#" data-toggle="modal" data-target="#modal-formx" class="btn btn-sm btn-neutral">Upgrade account</a>
          <?php else: ?>
           <a href="<?php echo e(route('user.plans')); ?>" class="btn btn-sm btn-default">PY scheme</a>
          <?php endif; ?>
        <?php endif; ?>
          <a href="<?php echo e(route('user.statement')); ?>" class="btn btn-sm btn-neutral">Transaction History</a>
          <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <div class="card bg-gradient-default border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                      <div class="text-white text-left mt-2 mb-3">Don't let your money sit there, upgrade your account & start investing in PY(per year) scheme.</div> 
                      <div class="text-white text-left mt-2 mb-3">Upgrade fee costs <?php echo e($set->upgrade_fee.$currency->name); ?> . Check PY scheme to see what your money is invested on.</div> 
                        <div class="text-left">
                        <a href="<?php echo e(route('user.upgrade')); ?>" class="btn btn-neutral">Upgrade</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-8">
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
     <div class="col-lg-4">
      <?php if($set->kyc==1): ?>
      <div class="card bg-gradient-default">
        <!-- Card image -->
        <!-- List group -->
        <!-- Card body -->
        <div class="card-body">
          <h3 class="card-title mb-3 text-white">Identity verification</h3>
          <p class="card-text mb-4 text-white">Upload an identity document, for example, driver licence, voters card, international passport, national ID.</p>
          <span class="badge badge-pill badge-warning">
            <?php if($user->kyc_status==0): ?>
              Unverified
            <?php else: ?>
              Verified
            <?php endif; ?>
          </span>

            <?php if(empty($user->kyc_link)): ?>
            <div class="row align-items-center">
                <div class="col-12 text-right">
                  <a href="<?php echo e(route('user.profile')); ?>#kyc" class="btn btn-sm btn-neutral">Upload</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>
      <?php if($set->save==1): ?>
      <a href="<?php echo e(route('user.save')); ?>">
        <div class="card bg-gradient-default shadow">
          <!-- Card header -->
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-8">
                <!-- Title -->
                <h5 class="h3 mb-0 text-white">Save 4 me</h5>
              </div>
            </div>
            <p class="card-text mb-4 text-white">Join our program and learn to save wisely ahead for your future.</p>
          </div>
        </div>
      </a>
      <?php endif; ?>
  </div>  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/index.blade.php ENDPATH**/ ?>