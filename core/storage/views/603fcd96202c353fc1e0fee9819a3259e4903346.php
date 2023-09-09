<?php $__env->startSection('content'); ?>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-8">
      <div class="row">
          <div class="col-lg-6">
            <div class="card bg-dark border-0">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  
                  <div class="col">
                    <h5 class="card-title text-muted mb-0 text-white">Available profit</h5>
                    <span class="h2 font-weight-bold mb-0 text-yellow"><?php echo e(substr($user->profit,0,9)); ?>BTC</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
          <div class="card bg-dark border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-muted mb-0 text-white">Referral earnings</h5>
                  <span class="h2 font-weight-bold mb-0 text-yellow"><?php echo e(substr($user->ref_bonus,0,6)); ?>BTC</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="pricing card-group flex-column flex-md-row mb-3">
            <div class="card card-pricing border-0 bg-dark text-center mb-4">
              <a href="#" data-toggle="modal" data-target="#buy<?php echo e($val->id); ?>">
                <div class="card-header bg-transparent">
                  <div class="row align-items-center">
                  </div>
                </div>
                <div class="card-body px-lg-7">
                  <span class="text-white">Most purchased</span>
                  <div class="display-2 text-yellow"><?php echo e($val->min_deposit); ?>BTC</div>
                  <span class="text-muted">For  <?php echo e($val->duration.' '.$val->period); ?>(s)</span>
                  <ul class="list-unstyled my-4">
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape shadow rounded-circle text-yellow">
                            <i class="fa fa-check"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2"><?php echo e($val->percent); ?>% daily top up</span>
                        </div>
                      </div>
                    </li>                                                     
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape shadow rounded-circle text-yellow">
                            <i class="fa fa-check"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2"><?php echo e($val->amount); ?>BTC max price</span>
                        </div>
                      </div>
                    </li>                   
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape shadow rounded-circle text-yellow">
                            <i class="fa fa-check"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2">Interest <?php echo e(($val->percent*castrotime($val->duration.' '.$val->period))-100); ?>% </span>
                        </div>
                      </div>
                    </li>
                  <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape shadow rounded-circle text-yellow">
                            <i class="fa fa-check"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2">Compound interest  <?php echo e($val->percent*castrotime($val->duration.' '.$val->period)); ?>% </span>
                        </div>
                      </div>
                    </li>                  
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape shadow rounded-circle text-yellow">
                            <i class="fa fa-check"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2"><?php echo e($val->ref_percent); ?>% referral percent</span>
                        </div>
                      </div>
                    </li>                  
                  </ul>
                </div>
              </a>
            </div>
            <div class="modal fade" id="buy<?php echo e($val->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-body p-0">
                            <div class="card bg-secondary border-0 mb-0">
                              <div class="card-header bg-transparent pb-5">
                                <div class="text-muted text-center mt-2 mb-3"><small>Purchase plan</small></div>
                                <div class="btn-wrapper text-center">
                                   <h4 class="text-uppercase ls-1 text-default py-3 mb-0"><?php echo e($val->name); ?></h4>
                                </div>
                              </div>
                              <div class="card-body px-lg-5 py-lg-5">
                                <form role="form" action="<?php echo e(url('user/buy')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                  <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">BTC</span>
                                      </div>
                                      <input type="number" step="any" class="form-control" placeholder="" name="amount" required>
                                      <input type="hidden" name="plan" value="<?php echo e($val->id); ?>">
                                    </div>
                                  </div>
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-default my-4">Purchase</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
          </div>
        </div> 
        <div class="col-md-6">
          <div class="card bg-dark">
            <!-- Card header -->
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col-8">
                  <!-- Surtitle -->
                  <h6 class="surtitle text-yellow">Last 5 trades</h6>
                  <!-- Title -->
                  <h5 class="h3 mb-0 text-white">Progress track</h5>
                </div>
              </div>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <!-- List group -->
              <ul class="list-group list-group-flush list my--3">
              <?php $__currentLoopData = $profit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item px-0 bg-dark">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="text-white"><?php echo e($val->trx); ?></h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(($val->profit*100)/$val->amount); ?>%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          </div>
        </div>      
      </div>
    </div>
     <div class="col-lg-4">
      <?php if($set->kyc==1): ?>
      <div class="card bg-dark">
        <!-- Card image -->
        <!-- List group -->
        <!-- Card body -->
        <div class="card-body">
          <h3 class="card-title mb-3 text-white">Identity verification</h3>
          <p class="card-text mb-4 text-white">Upload an identity document, for example, driver licence, voters card, international passport, national ID.</p>
          <span class="badge badge-pill text-yellow">
            <?php if($user->kyc_status==0): ?>
              Unverified
            <?php else: ?>
              Verified
            <?php endif; ?>
          </span>

            <?php if(empty($user->kyc_link)): ?>
            <div class="row align-items-center">
                <div class="col-12 text-right">
                  <a href="<?php echo e(route('user.profile')); ?>#kyc" class="btn btn-sm btn-neutral">Upload</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>
      <?php if($set->referral==1): ?>
      <div class="card bg-dark">
        <div class="card-header bg-transparent header-elements-inline">
          <h3 class="mb-0 text-white">Referral link</h3>
        </div>
        <div class="card-body">
          <p class="text-white">Automatically top up your account balance by sharing your referral link, Earn a percentage of whatever plan your referred user buys.</p>
          <form action="javascript:void;" method="post">
             <div class="form-group row">
                <div class="col-lg-12">
                <input type="url" readonly  class="form-control bg-dark text-yellow" value="<?php echo e(url('/')); ?>/referral/<?php echo e($user->username); ?>">
                </div>
              </div>                  
          </form>
        </div>
      </div>
      <?php endif; ?>
  </div>  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/user/index.blade.php ENDPATH**/ ?>