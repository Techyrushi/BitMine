<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="card bg-dark">
        <div class="card-header bg-transparent">
          <h3 class="mb-0 text-white">Referrals</h3>
        </div>
        <div class="table-responsive py-4">
          <table class="table align-items-center table-flush table-dark">
            <thead class="thead-dark">
              <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Username</th>
                <th>Created</th>
                <th>Updated</th>
              </tr>
            </thead>
            <tbody>  
              <?php $__currentLoopData = $referral; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e(++$k); ?>.</td>
                  <td><?php echo e($val->user->name); ?></td>
                  <td><?php echo e($val->user->username); ?></td>
                  <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                  <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>   
    <div class="col-lg-12">
      <div class="card bg-dark">
        <div class="card-header bg-transparent">
          <h3 class="mb-0 text-white">Earnings</h3>
        </div>
        <div class="table-responsive py-4">
        <table class="table align-items-center table-flush table-dark">
          <thead class="thead-dark">
            <tr>
              <th>S/N</th>
              <th>Amount</th>
              <th>Name</th>
              <th>Username</th>
              <th>Created</th>
              <th>Updated</th>
            </tr>
          </thead>
          <tbody>  
            <?php $__currentLoopData = $earning; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(++$k); ?>.</td>
                <td><?php echo e($currency->symbol.substr($val->amount,0,9)); ?></td>
                <td><?php echo e($val->user->name); ?></td>
                <td><?php echo e($val->user->username); ?></td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bitmine/core/resources/views/user/referral.blade.php ENDPATH**/ ?>