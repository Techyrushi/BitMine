

<?php $__env->startSection('content'); ?>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="card bg-dark">
        <div class="card-body">
          <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
            <div>
              <ul class="list list-unstyled mb-0 text-white">
                <li>Amount: <span class="font-weight-semibold"><?php echo e(number_format($gate->amount).$currency->name); ?></span></li>
                <li>Charge: <span class="font-weight-semibold"><?php echo e(number_format($gate->charge).$currency->name); ?></span></li>
                <li>Payable: <span class="font-weight-semibold"><?php echo e($gate->amount); ?><?php echo e($currency->name); ?></span></li>
              </ul>
            </div>

            <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
              <ul class="list list-unstyled mb-0 text-white">
                <li>Status: <span class="badge bg-danger text-white">UNPAID</span></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center">
          <span>
            <span class="badge badge-mark border-danger mr-2"></span>
          </span>
            <ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
                <li class="list-inline-item">
                <form action="<?php echo e(route('deposit.confirm')); ?>" method="post">
                <?php echo csrf_field(); ?>
                  <button type="submit" class="btn btn-neutral">Pay now</button>
                </form>
              </div>
              </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/user/preview.blade.php ENDPATH**/ ?>