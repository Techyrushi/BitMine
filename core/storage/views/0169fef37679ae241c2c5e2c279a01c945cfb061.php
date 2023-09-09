


<?php $__env->startSection('content'); ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo e(url('/')); ?>/asset/images/ecommerce-2607114_1280.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-1"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-12 col-7">
        <h1 class="display-2 text-white">Make a deposit</h1>
      </div>
      <div class="col-lg-6 col-12 text-right">
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
      <?php if($adminbank->status==1): ?>
       <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <a href="<?php echo e(route('user.bank_transfer')); ?>" class="avatar avatar-xl">
                    <img alt="Image placeholder" src="<?php echo e(url('/')); ?>/asset/payment_gateways/webmoney.png">
                  </a>
                </div>
                <div class="col ml--2">
                  <h4 class="mb-0">
                    <a href="<?php echo e(route('user.bank_transfer')); ?>">Bank transfer</a>
                  </h4>
                  <p class="text-sm text-muted mb-0">Swift code: <?php echo e($adminbank->swift); ?></p>
                  <p class="text-sm text-muted mb-0">Account number: <?php echo e($adminbank->acct_no); ?></p>
                </div>
              </div>
            </div>
          </div>
      </div> 
      <?php endif; ?>
      <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
       <div class="col-md-4">
          <div class="card">
            <!-- Card body -->
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Avatar -->
                  <a href="#" data-toggle="modal" data-target="#modal-form<?php echo e($val->id); ?>" class="avatar avatar-xl">
                    <img alt="Image placeholder" src="<?php echo e(url('/')); ?>/asset/payment_gateways/<?php echo e($val->gateimg); ?>">
                  </a>
                </div>
                <div class="col ml--2">
                  <h4 class="mb-0">
                    <a href="#" data-toggle="modal" data-target="#modal-form<?php echo e($val->id); ?>"><?php echo e($val->name); ?></a>
                  </h4>
                  <p class="text-sm text-muted mb-0">Limit: <?php echo e($val->minamo.' - '.$val->maxamo.$currency->name); ?></p>
                  <p class="text-sm text-muted mb-0">Charge: <?php echo e($val->fixed_charge.$currency->name); ?> + <?php echo e($val->percent_charge); ?>%</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal fade" id="modal-form<?php echo e($val->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                <div class="card-header bg-transparent pb-5">
                  <div class="text-muted text-center mt-2 mb-3"><small>Deposit via</small></div>
                  <div class="btn-wrapper text-center">
                    <a href="javascript:void;" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon"><img src="<?php echo e(url('/')); ?>/asset/payment_gateways/<?php echo e($val->gateimg); ?>"></span>
                    </a>
                  </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  <form role="form" action="<?php echo e(route('fund.submit')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><?php echo e($currency->name); ?></span>
                        </div>
                        <input type="number" step="any" class="form-control" placeholder="" name="amount" required>
                        <input type="hidden" name="gateway" value="<?php echo e($val->id); ?>">  
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary my-4">Preview</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="card" id="other">
      <div class="card-header header-elements-inline">
        <h3 class="mb-0">Other deposit logs</h3>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-buttons">
          <thead class="thead-light">
            <tr>
              <th>S/N</th>
              <th>Reference ID</th>
              <th>Amount</th>
              <th>Method</th>
              <th>Date</th>
              <th>Status</th>
              <th>Charge</th>
            </tr>
          </thead>
          <tbody>  
            <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(++$k); ?>.</td>
                <td>#<?php echo e($val->trx); ?></td>
                <td><?php echo e(number_format($val->amount).$currency->name); ?></td>
                <td><?php echo $val->gateway['name']; ?></td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                <td>
                <?php if($val->status==1): ?>
                  <span class="badge badge-success">Approved</span>
                <?php elseif($val->status==0): ?>
                  <span class="badge badge-danger">Pending</span>                  
                <?php elseif($val->status==2): ?>
                  <span class="badge badge-info">Declined</span>
                <?php endif; ?>
                </td>
                <td><?php echo e(number_format($val->charge).$currency->name); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card" id="bank">
      <div class="card-header header-elements-inline">
        <h3 class="mb-0">Bank transfer logs</h3>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
              <tr>
                <th>S/n</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>  
            <?php $__currentLoopData = $bank_transfer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(++$k); ?>.</td>
                <td><?php echo e(number_format($val->amount).$currency->name); ?></td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                <td>
                  <?php if($val->status==1): ?>
                    <span class="badge badge-success">Approved</span>
                  <?php elseif($val->status==0): ?>
                    <span class="badge badge-danger">Pending</span>                  
                  <?php elseif($val->status==2): ?>
                    <span class="badge badge-info">Declined</span>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/fund.blade.php ENDPATH**/ ?>