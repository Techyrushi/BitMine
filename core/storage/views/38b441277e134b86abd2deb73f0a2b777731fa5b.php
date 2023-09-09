<?php $__env->startSection('content'); ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo e(url('/')); ?>/asset/images/blog-img70.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-1"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-12 col-7">
        <h1 class="display-2 text-white">Have the future in mind</h1>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
          <div class="card-header header-elements-inline">
            <h3 class="mb-0">Start saving</h3>
                <div class="header-elements">
                  <div class="list-icons">
                </div>
              </div>
          </div>
          <div class="card-body">
            <form action="<?php echo e(route('submitsave')); ?>" method="post" id="modal-details">
            <?php echo csrf_field(); ?>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Amount</label>
                  <div class="col-lg-10">
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text"><?php echo e($currency->name); ?></span>
                      </span>
                      <input type="number" class="form-control" name="amount" id="amount" required>
                      <span class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </span>
                    </div>
                  </div>
                </div> 
                 <div class="form-group row">
                    <label class="col-form-label col-lg-2">End date</label>
                    <div class="col-lg-10">
                      <div class="input-group">
                        <span class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </span>
                        <input type="date" class="form-control" name="end_date" required>
                      </div>
                    </div>
                </div> 
                 <div class="form-group row">
                    <label class="col-form-label col-lg-2">Target</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="exampleFormControlSelect1" name="target">
                        <option>Birthday</option>
                        <option>Birth of child</option>
                        <option>Christmas</option>
                        <option>Holiday</option>
                        <option>Rent</option>
                        <option>Salah</option>
                        <option>School fees</option>
                        <option>Wedding</option>
                        <option>Other</option>
                      </select>
                    </div>
                </div>                   
                <div class="text-right">
                  <a href="#" data-toggle="modal" data-target="#modal-form" class="btn btn-primary">Process<i class="icon-paperplane ml-2"></i></a>
                </div>         
                <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-body p-0">
                        <div class="card bg-default border-0 mb-0">
                          <div class="card-header bg-transparent pb-2ß">
                            <div class="text-white text-center mt-2 mb-3">The entered amount will be removed from your account and won't be available to you till the end date.</div>
                          </div>
                          <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center">
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
        <?php $__currentLoopData = $save; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-md-4">
          <div class="card bg-default">
            <!-- Card body -->
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                </div>
                <div class="col ml--2">
                  <h4 class="mb-0">
                    <a href="#!" class="text-white"><?php echo e($val->target); ?></a>
                  </h4>
                  <p class="text-sm text-white mb-0">Amount: <?php echo e(number_format($val->amount).$currency->name); ?></p>
                  <p class="text-sm text-white mb-0">End date: <?php echo e(date("Y/m/d h:i:A", strtotime($val->end_date))); ?></p>
                  <p class="text-sm text-white mb-0">Created: <?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></p>
                  <p class="text-sm text-white mb-0">Reference: #<?php echo e($val->reference); ?></p>
                  <span class="text-success">●</span>
                  <small class="text-success">
                  <?php if($val->status==1): ?>
                    Paid out
                  <?php else: ?>
                    On hold
                  <?php endif; ?>
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/save.blade.php ENDPATH**/ ?>