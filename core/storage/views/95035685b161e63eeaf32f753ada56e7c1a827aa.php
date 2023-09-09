<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="card bg-dark shadow">
        <div class="card-header bg-transparent">
          <h3 class="mb-0 text-yellow">Log</h3>
        </div>
        <div class="card-body">
          <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
            <div class="timeline-block">
                <span class="timeline-step badge-danger">
                    <i class="ni ni-like-2"></i>
                </span>
                <div class="timeline-content">
                    <small class="text-white font-weight-bold"><?php echo e(date("Y/m/d h:i:A", strtotime($ticket->created_at))); ?></small>
                    <h5 class="text-white mt-3 mb-0"><?php echo e($ticket->message); ?></h5>
                    <p class="text-white text-sm mt-1 mb-0">Admin</p>
                </div>
            </div>
          <?php $__currentLoopData = $reply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $df): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($df->status==1): ?>
              <div class="timeline-block">
                <span class="timeline-step badge-danger">
                  <i class="ni ni-like-2"></i>
                </span>
                <div class="timeline-content">
                  <small class="text-white font-weight-bold"><?php echo e(date("Y/m/d h:i:A", strtotime($df->created_at))); ?></small>
                  <h5 class="text-white mt-3 mb-0"><?php echo e($df->reply); ?></h5>
                  <p class="text-white text-sm mt-1 mb-0">Admin</p>
                </div>
              </div>
              <?php elseif($df->status==0): ?>
                <div class="timeline-block">
                    <span class="timeline-step badge-danger">
                    <i class="ni ni-like-2"></i>
                    </span>
                    <div class="timeline-content">
                    <small class="text-white font-weight-bold"><?php echo e(date("Y/m/d h:i:A", strtotime($df->created_at))); ?></small>
                    <h5 class="text-white mt-3 mb-0"><?php echo e($df->reply); ?></h5>
                    <p class="text-white text-sm mt-1 mb-0">User</p>
                    </div>
                </div>
              <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <div class="card-body">
          <form action="<?php echo e(url('user/reply-ticket')); ?>" method="post">
          <?php echo csrf_field(); ?>
            <div class="form-group row">
                <div class="col-lg-12">
                <textarea name="details" class="form-control no-border bg-dark text-white" rows="4" placeholder="Message..." required></textarea>
                <input name="id" value="<?php echo e($ticket->ticket_id); ?>" type="hidden">
                </div>
            </div>               
            <div class="text-right">
              <button type="submit" class="btn btn-neutral btn-sm">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bitmine/core/resources/views/user/reply-ticket.blade.php ENDPATH**/ ?>