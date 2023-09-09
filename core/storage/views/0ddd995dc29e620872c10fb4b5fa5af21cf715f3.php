<?php $__env->startSection('content'); ?>
    <div class="content"> 
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Compose article</h6>
                    </div>
                    <div class="card-body">
                        <p class="text-danger"></p>
                        <form action="<?php echo e(route('blog.update')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Title:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="title" class="form-control" value="<?php echo e($post->title); ?>" reqiured>
                                    <input type="hidden" name="id" value="<?php echo e($post->id); ?>">
                                </div>
                                <?php if($errors->has('title')): ?>
                                    <div class="error"><?php echo e($errors->first('title')); ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Category:</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="cat_id" data-dropdown-css-class="bg-info-800" data-fouc required> 
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($val->id); ?>" 
                                        <?php if($cat->id==$val->id): ?>
                                            selected
                                        <?php endif; ?>
                                        ><?php echo e($val->categories); ?></option>     
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
                                    <textarea type="text" name="details"  class="tinymce form-control"><?php echo e($post->details); ?></textarea>
                                </div>
                            </div>           
                            <div class="text-right">
                                <button type="submit" class="btn bg-dark">Submit<i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
            <div class="col-md-4">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($post->image); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/admin/blog/edit.blade.php ENDPATH**/ ?>