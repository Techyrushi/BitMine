<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title font-weight-semibold">Update About us</h6>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('about-us.update')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Details:</label>
                        <div class="col-lg-10">
                        <textarea type="text" name="details" class="tinymce form-control"><?php echo e($value->about); ?></textarea>
                        </div>
                    </div>                
                    <div class="text-right">
                    <button type="submit" class="btn bg-dark">Submit<i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div> 
      </div>  
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/admin/web-control/about-us.blade.php ENDPATH**/ ?>