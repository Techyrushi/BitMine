
<?php $__env->startSection('content'); ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo e(url('/')); ?>/asset/images/ecommerce-2607114_1280.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-1"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-12 col-7">
      </div>
      <div class="col-lg-12 col-12 text-right">
          <a href="<?php echo e(url('/')); ?>/user/fund#bank" class="btn btn-sm btn-neutral">Bank transfer logs</a>
          <a href="<?php echo e(url('/')); ?>/user/fund#other" class="btn btn-sm btn-neutral">Other deposit logs</a>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="card bg-gradient-default">
        <div class="card-body">
          <div class="align-item-sm-center flex-sm-nowrap text-center">
            <div class="">
              <h6 class="text-white"> PLEASE SEND EXACTLY <span class="text-green"> <?php echo e($bcoin); ?></span> BTC</h6>
              <h5 class="text-white">TO <span class="text-green"> <?php echo e($wallet); ?></span></h5>
              <?php echo $qrurl; ?>

              <br><br>
              <h4 class="text-white" >SCAN TO SEND</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/payment/coinpaybtc.blade.php ENDPATH**/ ?>