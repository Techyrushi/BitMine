

<?php $__env->startSection('content'); ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo e(url('/')); ?>/asset/dashboard/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-6"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-12 col-md-10">
        <h1 class="display-2 text-white">Hello <?php echo e($user->name); ?></h1>
        <p class="text-white mt-0 mb-5">This is your withdraw page. You can send cash out request for balance.</p>
        <p class="text-white mt-0 mb-5">Withdrawal charge is <?php echo e($set->withdraw_charge.$currency->name); ?>.</p>
        <a href="<?php echo e(url('/')); ?>/user/withdraw#logs" class="btn btn-neutral">Withdraw logs</a>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">

        <!-- Basic layout-->
        <div class="card">
          <div class="card-header header-elements-inline">
            <h3 class="mb-0">Start request</h3>
          </div>

          <div class="card-body">
            <form action="<?php echo e(route('withdraw.submit')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Amount</label>
                <div class="col-lg-10">
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><?php echo e($currency->name); ?></span>
                    </div>
                    <input type="number" step="any" name="amount" maxlength="10" class="form-control" required="">
                  </div>
                </div>
              </div> 
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Payout method</label>
                <div class="col-lg-10">
                <select class="form-control select" name="coin" data-dropdown-css-class="bg-primary" data-fouc required>
                <?php $__currentLoopData = $method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value='<?php echo e($val->id); ?>'><?php echo e($val->method); ?></option>
                  <?php if($set->bank_withdraw==1): ?> 
                    <option value="bank">Bank</option>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              </div> 
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Details</label>
                <div class="col-lg-10">
                  <textarea name="details" class="form-control" rows="4" required></textarea>
                </div>
              </div>                
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /basic layout -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card" id="logs">
          <div class="card-header header-elements-inline">
            <h3 class="mb-0">Cashout History</h3>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-buttons">
              <thead class="thead-light">
                <tr>
                <th>S/n</th>
                <th>Method</th>
                <th>Amount</th>
                <th>Details</th>
                <th>Date</th>                                                                         
                <th>Status</th>   
                </tr>
              </thead>
              <tbody> 
              <?php $__currentLoopData = $withdraw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              <tr>
                <td><?php echo e(++$k); ?>.</td>
                <td>
                  <?php if($val->coin_id=='bank'): ?>
                    bank
                  <?php else: ?>
                  <?php echo e($val->wallet->method); ?>

                  <?php endif; ?>
                <td><?php echo e(number_format($val->amount).$currency->name); ?></td>
                <td><?php echo e($val->details); ?></td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                <td>          
                  <?php if($val->status==1): ?>
                    <span class="badge badge-success">Approved</span>
                  <?php else: ?>
                    <span class="badge badge-danger">Pending</span>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/withdraw.blade.php ENDPATH**/ ?>