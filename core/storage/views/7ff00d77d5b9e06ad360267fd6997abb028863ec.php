<?php $__env->startSection('content'); ?>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">  
      <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
       <div class="col-md-4">
          <div class="card bg-dark">
            <!-- Card body -->
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h4 class="mb-0 text-yellow">
                    <a href="#" data-toggle="modal" data-target="#modal-form<?php echo e($val->id); ?>"><?php echo e($val->name); ?></a>
                  </h4>
                  <p class="text-sm text-white mb-0">Limit: <?php echo e($currency->symbol.number_format($val->minamo).' - '.$currency->symbol.number_format($val->maxamo)); ?></p>
                  <p class="text-sm text-white mb-0">Charge: <?php echo e($currency->symbol.$val->fixed_charge); ?> + <?php echo e($val->percent_charge); ?>%</p>
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
                  <div class="text-dark text-center mt-2 mb-3"><small>Deposit via</small></div>
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
                          <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
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
    <div class="card bg-dark" id="other">
      <div class="card-header header-elements-inline bg-transparent">
        <h3 class="mb-0 text-white">Deposit logs</h3>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush table-dark" id="datatable-basic">
          <thead class="thead-dark">
            <tr>
              <th>S/N</th>
              <th>Reference ID</th>
              <th>Amount</th>
              <th>BTC</th>
              <th>Method</th>
              <th>Status</th>
              <th>Charge</th>
              <th>Created</th>
              <th>Updated</th>
            </tr>
          </thead>
          <tbody>  
            <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(++$k); ?>.</td>
                <td>#<?php echo e($val->trx); ?></td>
                <td><?php echo e($currency->symbol.number_format($val->amount)); ?></td>
                <td><?php echo e(substr($val->btc_amo,0,9)); ?>BTC</td>
                <td><?php echo $val->gateway['name']; ?></td>
                <td>
                <?php if($val->status==1): ?>
                  <span class="badge badge-success">Approved</span>
                <?php elseif($val->status==0): ?>
                  <span class="badge badge-danger">Pending</span>                  
                <?php elseif($val->status==2): ?>
                  <span class="badge badge-info">Declined</span>
                <?php endif; ?>
                </td>
                <td><?php echo e($currency->symbol.number_format($val->charge)); ?></td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btcApp\core\resources\views/user/fund.blade.php ENDPATH**/ ?>