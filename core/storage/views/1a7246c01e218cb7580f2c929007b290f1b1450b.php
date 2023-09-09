<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card bg-dark">
          <div class="card-body text-dark">
            <div class="">
              <h3 class="text-yellow"><?php echo e($gate->gateway['name']); ?></h3>
              <span class="mt-0 mb-5 text-white">Amount: <?php echo e($currency->symbol.number_format($gate->amount)); ?></span><br>
              <span class="mt-0 mb-5 text-white">Charge: <?php echo e($currency->symbol.number_format($gate->charge)); ?></span><br>
              <span class="mt-0 mb-5 text-white">Total: <?php echo e($currency->symbol.number_format($gate->amount+$gate->charge)); ?></span><br><br>
              <a href="<?php echo e(route('osit.confirm')); ?>" class="btn btn-neutral btn-sm"><?php echo e(__('Confirm')); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core\resources\views/user/preview.blade.php ENDPATH**/ ?>