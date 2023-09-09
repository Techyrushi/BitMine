<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="card bg-dark">
        <div class="card-body">
          <div class="">
          <h3 class="text-yellow">Customer support</h3>
          <a data-toggle="modal" data-target="#modal-formx" href="" class="btn btn-sm btn-neutral"><i class="fa fa-arrow-right"></i> Create request</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-md-12">
        <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card bg-white border-0 mb-0">
                  <div class="card-body px-lg-5 py-lg-5">
                    <form action="<?php echo e(route('submit-ticket')); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2">Subject</label>
                        <div class="col-lg-10">
                          <div class="input-group input-group-merge">
                            <input type="text" name="subject" maxlength="10" class="form-control" required="">
                          </div>
                        </div>
                      </div> 
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2">Priority</label>
                        <div class="col-lg-10">
                        <select class="form-control select" name="category" data-dropdown-css-class="bg-slate-800" data-fouc required>
                          <option  value="Low">Low</option>
                          <option  value="Medium">Medium</option> 
                          <option  value="High">High</option>  
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
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>  
    <div class="row">
      <?php $__currentLoopData = $ticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6">
            <div class="card bg-dark">
              <!-- Card body -->
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-8">
                    <!-- Title -->
                    <h5 class="h3 mb-0 text-yellow">#<?php echo e($val->ticket_id); ?></h5>
                  </div>
                  <div class="col-4 text-right">
                    <a href="<?php echo e(url('/')); ?>/user/reply-ticket/<?php echo e($val->id); ?>" class="btn btn-sm btn-neutral">Reply</a>
                    <a href="<?php echo e(url('/')); ?>/user/ticket/delete/<?php echo e($val->id); ?>" class="btn btn-sm btn-danger">Delete</a>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col">
                    <p class="text-sm text-white mb-0">Subject: <?php echo e($val->subject); ?></p>
                    <p class="text-sm text-white mb-0">Priority: <?php echo e($val->priority); ?></p>
                    <p class="text-sm text-white mb-0">Created: <?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></p>
                    <p class="text-sm text-white mb-0">Updated: <?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></p>
                    <?php if($val->status==0): ?>
                        <span class="badge badge-info">Open</span>
                    <?php elseif($val->status==1): ?>
                        <span class="badge badge-danger">Closed</span>                                        
                    <?php elseif($val->status==2): ?>
                        <span class="badge badge-success">Resolved</span> 
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bitmine/core/resources/views/user/ticket.blade.php ENDPATH**/ ?>