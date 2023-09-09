<?php $__env->startSection('content'); ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo e(url('/')); ?>/asset/images/maintenance-bg.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-1"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-12 col-7">
        <h1 class="display-2 text-white">Customer support</h1>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="card" id="other">
      <div class="card-header header-elements-inline">
        <h3 class="mb-0">logs</h3>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-buttons">
          <thead class="thead-light">
            <tr>
              <th>S/N</th>
              <th>Ticket ID</th>
              <th>Subject</th>
              <th>Priority</th>
              <th>Status</th>
              <th>Created</th>
              <th>Updated</th>
              <th></th>
            </tr>
          </thead>
          <tbody>  
            <?php $__currentLoopData = $ticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(++$k); ?>.</td>
                <td>#<?php echo e($val->ticket_id); ?></td>
                <td><?php echo e($val->subject); ?></td>
                <td><?php echo e($val->priority); ?></td>
                <td>
                    <?php if($val->status==0): ?>
                        <span class="badge badge-info">Open</span>
                    <?php elseif($val->status==1): ?>
                        <span class="badge badge-danger">Closed</span>                                        
                    <?php elseif($val->status==2): ?>
                        <span class="badge badge-success">Resolved</span> 
                    <?php endif; ?>
                </td> 
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                <td class="text-right">
                    <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="<?php echo e(url('/')); ?>/user/reply-ticket/<?php echo e($val->id); ?>">Reply</a>
                        <a class="dropdown-item" href="<?php echo e(url('/')); ?>/user/ticket/delete/<?php echo e($val->id); ?>">Delete</a>
                    </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card">
          <div class="card-header header-elements-inline">
            <h3 class="mb-0">Start request</h3>
          </div>

          <div class="card-body">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/ticket.blade.php ENDPATH**/ ?>