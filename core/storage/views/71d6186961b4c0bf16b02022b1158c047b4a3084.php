<?php $__env->startSection('content'); ?>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">

        <!-- Basic layout-->
        <div class="card bg-dark">
          <div class="card-header header-elements-inline bg-transparent">
            <h3 class="mb-0 text-white">Start request</h3>
          </div>

          <div class="card-body">
            <form action="<?php echo e(route('share.submit')); ?>" method="post" id="modal-details">
              <?php echo csrf_field(); ?>
              <div class="form-group row">
                <label class="col-form-label col-lg-2 text-white">Amount</label>
                <div class="col-lg-10">
                  <div class="input-group input-group-merge">
                    <input type="number" step="any" name="amount" maxlength="10" class="form-control bg-dark text-white" required="">
                    <div class="input-group-prepend bg-secondary">
                      <span class="input-group-text text-default">BTC</span>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="form-group row">
                <label class="col-form-label col-lg-2 text-white">Username</label>
                <div class="col-lg-10">
                <input type="text" name="username" class="form-control bg-dark text-white" required="">
                </div>
              </div>                
              <div class="text-right">
                  <a href="#" data-toggle="modal" data-target="#modal-form" class="btn btn-secondary">Send<i class="icon-paperplane ml-2"></i></a>
                </div>         
                <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-body p-0">
                        <div class="card bg-secondary border-0 mb-0">
                          <div class="card-header bg-transparent pb-2ß">
                            <div class="text-dark text-center mt-2 mb-3">Enter account pin to complete request</div>
                          </div>
                          <div class="card-body px-lg-5 py-lg-5">
                            <div class="form-group">
                              <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                  <span class="input-group-text text-dark"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="Pin" type="pin" name="pin">
                              </div>
                            </div>
                          <div class="text-right">
                            <button type="submit" class="btn btn-primary" form="modal-details">Submit</button>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
            </form>
          </div>
        </div>
        <!-- /basic layout -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card bg-dark" id="logs">
          <div class="card-header header-elements-inline bg-transparent">
            <h3 class="mb-0 text-white">Sharing History</h3>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush table-dark" id="datatable-buttons">
              <thead class="thead-dark">
                <tr>
                <th>S/n</th>
                <th>Amount</th>
                <th>Sender</th>                                                                        
                <th>Receiver</th>                                                                        
                <th>Created</th>  
                <th>Updated</th>  
                </tr>
              </thead>
              <tbody> 
              <?php $__currentLoopData = $share; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              <tr>
                <td><?php echo e(++$k); ?>.</td>
                <td><?php echo e(substr($val->amount,0,9)); ?>BTC</td>
                <td><?php echo e($val->sender['username']); ?></td>               
                <td><?php echo e($val->receiver['username']); ?></td>               
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
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/anycoin/core/resources/views/user/share.blade.php ENDPATH**/ ?>