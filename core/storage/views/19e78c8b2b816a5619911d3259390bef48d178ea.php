<?php $__env->startSection('content'); ?>
<div class="content">
<div class="row">
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Users</h6>
            <ul class="list list-unstyled mb-0">
              <li>Active users: <span class="font-weight-semibold text-default">#<?php echo e($activeusers); ?></span></li>
              <li>Blocked users: <span class="font-weight-semibold text-default">#<?php echo e($blockedusers); ?></span></li>
            </ul>
          </div>

          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#<?php echo e($totalusers); ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Support Ticket</h6>
            <ul class="list list-unstyled mb-0">
              <li>Open tickets: <span class="font-weight-semibold text-default">
                #<?php echo e($openticket); ?></span></li>
              <li>Closed tickets: <span class="font-weight-semibold text-default">
                #<?php echo e($closedticket); ?></span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#<?php echo e($totalticket); ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Platform Reviews</h6>
            <ul class="list list-unstyled mb-0">
              <li>Published reviews: <span class="font-weight-semibold text-default">
                #<?php echo e($pubreview); ?></span></li>
              <li>Pending reviews: <span class="font-weight-semibold text-default">
                #<?php echo e($unpubreview); ?></span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#<?php echo e($totalreview); ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Other Deposits</h6>
            <ul class="list list-unstyled mb-0">
              <li>Pending: <span class="font-weight-semibold text-default">
                #<?php echo e($pendingdep); ?></span></li>
              <li>Approved: <span class="font-weight-semibold text-default">
                #<?php echo e($approveddep); ?></span>
              </li>              
              <li>Declined: <span class="font-weight-semibold text-default">
                #<?php echo e($declineddep); ?></span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#<?php echo e($totaldeposit); ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Withdrawal</h6>
            <ul class="list list-unstyled mb-0">
              <li>Pending: <span class="font-weight-semibold text-default">
                #<?php echo e($pendingwd); ?></span></li>
              <li>Approved: <span class="font-weight-semibold text-default">
                #<?php echo e($approvedwd); ?></span>
              </li>              
              <li>Declined: <span class="font-weight-semibold text-default">
                #<?php echo e($declinedwd); ?></span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#<?php echo e($totalwd); ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>   
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Py scheme plans</h6>
            <ul class="list list-unstyled mb-0">
              <li>Active: <span class="font-weight-semibold text-default">
                #<?php echo e($appplan); ?></span></li>
              <li>Disabled: <span class="font-weight-semibold text-default">
                #<?php echo e($penplan); ?></span>
              </li>              
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#<?php echo e($totalplan); ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Investment</h6>
            <ul class="list list-unstyled mb-0">
              <li>Active: <span class="font-weight-semibold text-default">
                #<?php echo e($appprofit); ?></span></li>
              <li>Completed: <span class="font-weight-semibold text-default">
                #<?php echo e($penprofit); ?></span>
              </li>              
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#<?php echo e($totalprofit); ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/anycoin/core/resources/views/admin/dashboard/index.blade.php ENDPATH**/ ?>