<?php $__env->startSection('content'); ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo e(url('/')); ?>/asset/images/maintenance-bg.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-1"></span>
  <!-- Header container -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-7">
        <h1 class="display-2 text-white">Loan management</h1>
      </div>
      <div class="col-lg-6 col-12 text-right">
          <a href="#" data-toggle="modal" data-target="#modal-formx" class="btn btn-sm btn-default">Submit a proposal</a>
          <a href="#" data-toggle="modal" data-target="#modal-form" class="btn btn-sm btn-success">Update bank details</a>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="card bg-gradient-default shadow">
        <div class="card-header bg-transparent">
          <h3 class="mb-0 text-white">Rules & regulations</h3>
        </div>
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
            </div>
            <div class="col ml--2">
              <p class="text-sm text-white mb-0"><span class="text-success">●</span> We charge <?php echo e($set->loan_interest); ?>% of loaned amount as interest fee.</p>
              <p class="text-sm text-white mb-0"><span class="text-success">●</span> Account balance must exceed or equal to <?php echo e($set->collateral_percent); ?>% of loaned amount as collateral.</p>
              <p class="text-sm text-white mb-0"><span class="text-success">●</span> Participation in save 4 me & PY scheme will not be allowed until loan is paid.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">  
      <?php $__currentLoopData = $loan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
       <div class="col-md-4">
        <div class="card bg-default">
          <div class="card-header bg-default">
            <div class="row align-items-center">
              <div class="col-8">
                <!-- Title -->
                <h5 class="h3 mb-0 text-white"># <?php echo e($val->reference); ?></h5>
              </div>
              <?php if($val->status==1): ?>
              <div class="col-4 text-right">
                <a href="<?php echo e(url('/')); ?>/user/payloan/<?php echo e($val->id); ?>" class="btn btn-sm btn-danger">Pay</a>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-auto">
              </div>
              <div class="col ml--2">
                <p class="text-sm text-white mb-0">Payback: <?php echo e(number_format($val->amount).$currency->name); ?></p>
                <p class="text-sm text-white mb-0">Created: <?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></p>
                <p class="text-sm text-white mb-0">Details: <?php echo e($val->details); ?></p>
                <span class="text-success">●</span>
                <small class="text-success">                 
                 <?php if($val->status==1): ?>
                    Paid out
                  <?php elseif($val->status==0): ?>
                    On hold
                  <?php elseif($val->status==2): ?>
                    Completed
                  <?php endif; ?>
                </small>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pb-2ß">
                      <div class="text-muted text-center mt-2 mb-3">Submit loan proposal</div> 
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                      <form role="form" action="<?php echo e(url('user/loansubmit')); ?>" method="post"> 
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><?php echo e($currency->name); ?></span>
                            </div>
                            <input type="text" name="amount" class="form-control">
                          </div>
                        </div>                          
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <textarea type="text" name="details" placeholder="Details" rows="5" class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="text-right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <div class="card bg-gradient-default border-0 mb-0">
                    <div class="card-header bg-transparent pb-2ß">
                      <div class="text-muted text-center mt-2 mb-3">Ensure your currency corresponds with ours!. payments will be delayed for decrepancies</div> 
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                      <form role="form" action="<?php echo e(url('user/bankupdate')); ?>" method="post"> 
                      <?php echo csrf_field(); ?>
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="text" name="name" placeholder="Bank name" class="form-control" value="<?php echo e($bank->name); ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="text" name="acct_name" placeholder="Account name" class="form-control" value="<?php echo e($bank->acct_name); ?>">
                          </div>
                        </div> 
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="text" name="address" placeholder="Bank address" class="form-control" value="<?php echo e($bank->address); ?>">
                          </div>
                        </div>  
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="text" name="iban" placeholder="Iban code" class="form-control" value="<?php echo e($bank->iban); ?>">
                          </div>
                        </div>              
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="text" name="swift" placeholder="Swift code" class="form-control" value="<?php echo e($bank->swift); ?>">
                          </div>
                        </div>                           
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="number" name="acct_no" placeholder="Account number" class="form-control" value="<?php echo e($bank->acct_no); ?>">
                          </div>
                        </div>
                        <div class="text-right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
 
 
 
 
 
 
 
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/loan.blade.php ENDPATH**/ ?>