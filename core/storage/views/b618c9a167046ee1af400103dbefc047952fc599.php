<?php $__env->startSection('content'); ?>
    <div class="content"> 
        <div class="card">
          <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-semibold">Compose article</h6>
                <div class="header-elements">
                  <div class="list-icons text-orange-600">
                  <a class="list-icons-item" data-action="collapse"></a>
                </div>
              </div>
          </div>
          <div class="card-body">
            <p class="text-danger"></p>
            <form action="<?php echo e(route('blog.create')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Title:</label>
                    <div class="col-lg-10">
                        <input type="text" name="title" class="form-control" reqiured>
                    </div>
                    <?php if($errors->has('title')): ?>
                        <div class="error"><?php echo e($errors->first('title')); ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Category:</label>
                    <div class="col-lg-10">
                        <select class="form-control select" name="cat_id" data-dropdown-css-class="bg-info-800" data-fouc required> 
                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value='<?php echo e($val->id); ?>'><?php echo e($val->categories); ?></option>     
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
                        </select>
                        <?php if($errors->has('cat_id')): ?>
                            <div class="error"><?php echo e($errors->first('cat_id')); ?></div>
                        <?php endif; ?>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Thumbnail:</label>
                    <div class="col-lg-10">
                        <input type="file" name="image" class="form-input-styled" data-fouc> 
                        <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 1Mb</span>
                    </div>
                    <?php if($errors->has('image')): ?>
                        <div class="error"><?php echo e($errors->first('image')); ?></div>
                    <?php endif; ?>
                </div>              
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Content:</label>
                    <div class="col-lg-10">
                        <textarea type="text" name="details"  class="tinymce form-control"></textarea>
                    </div>
                </div>           
                <div class="text-right">
                    <button type="submit" class="btn bg-dark">Submit<i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/admin/blog/add.blade.php ENDPATH**/ ?>