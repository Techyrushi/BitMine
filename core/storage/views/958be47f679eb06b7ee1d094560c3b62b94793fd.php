

<?php $__env->startSection('content'); ?>
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
                      <span class="input-group-text">BTC</span>
                    </div>
                    <input type="number" step="any" name="amount" maxlength="10" class="form-control" required="">
                  </div>
                </div>
              </div> 
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Withdraw type</label>
                <div class="col-lg-10">
                  <select class="form-control select" name="type" required>
                    <option value="1">Trading profit</option>
                    <option value="2">Account balance</option>
                    <option value="3">Referral earnings</option>
                  </select>
                </div>
              </div> 
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Wallet address</label>
                <div class="col-lg-10">
                <input type="text" name="details"  class="form-control" required="">
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
                <th>Amount</th>
                <th>Wallet address</th>                                                                        
                <th>Status</th>  
                <th>Type</th>  
                <th>Created</th>  
                <th>Updated</th>  
                </tr>
              </thead>
              <tbody> 
              <?php $__currentLoopData = $withdraw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              <tr>
                <td><?php echo e(++$k); ?>.</td>
                <td><?php echo e(substr($val->amount,0,9)); ?>BTC</td>
                <td><?php echo e($val->details); ?></td>
                <td>          
                  <?php if($val->status==1): ?>
                    <span class="badge badge-success">Approved</span>
                  <?php elseif($val->status==0): ?>
                    <span class="badge badge-danger">Pending</span>                  
                  <?php elseif($val->status==2): ?>
                    <span class="badge badge-info">Declined</span>
                  <?php endif; ?>
                </td>                
                <td>          
                  <?php if($val->type==1): ?>
                    <span class="badge badge-info">Trading profit</span>
                  <?php elseif($val->type==2): ?>
                    <span class="badge badge-info">Account balance</span>                  
                  <?php elseif($val->type==3): ?>
                    <span class="badge badge-info">Referral bonus</span>
                  <?php endif; ?>
                </td>
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/user/withdraw.blade.php ENDPATH**/ ?>