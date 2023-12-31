<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Review</h6>
                            <div class="header-elements">
                                <a class="font-weight-semibold" data-toggle="modal" data-target="#create"><i class="icon-file-plus mr-2"></i>Create review</a>
                            </div>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Occupation</th>
                                    <th>Review</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th class="text-center">Action</th>    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$k); ?>.</td>
                                    <td><img src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($val->image_link); ?>" style="height: auto; max-width: 100%;"></td>
                                    <td><?php echo e($val->name); ?></td>
                                    <td><?php echo e($val->occupation); ?></td>
                                    <td><?php echo e($val->review); ?></td>
                                    <td>
                                        <?php if($val->status==1): ?>
                                            <span class="badge badge-success">Published</span>
                                        <?php else: ?>
                                            <span class="badge badge-danger">Pending</span>
                                        <?php endif; ?>
                                    </td>  
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <?php if($val->status==1): ?>
                                                        <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/unreview/<?php echo e($val->id); ?>"><i class="icon-eye-blocked2 mr-2"></i>Unpublish</a>
                                                    <?php else: ?>
                                                        <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/preview/<?php echo e($val->id); ?>"><i class="icon-eye mr-2"></i>Publish</a>
                                                    <?php endif; ?>
                                                    <a href="<?php echo e(url('/')); ?>/admin/review/edit/<?php echo e($val->id); ?>" class="dropdown-item"><i class="icon-pencil7 mr-2"></i>Edit</a>
                                                    <a data-toggle="modal" data-target="#<?php echo e($val->id); ?>delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>                   
                                </tr>
                                <div id="<?php echo e($val->id); ?>delete" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">   
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="font-weight-semibold">Are you sure you want to delete this?</h6>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                                <a  href="<?php echo e(url('/')); ?>/admin/review/delete/<?php echo e($val->id); ?>" class="btn bg-danger">Proceed</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="create" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">   
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="<?php echo e(url('admin/createreview')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Occupation:</label>
                            <div class="col-lg-10">
                                <input type="text" name="occupation" class="form-control" required>
                            </div>
                        </div>                         
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Review:</label>
                            <div class="col-lg-10">
                                <textarea type="text" name="review" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Image:</label>
                            <div class="col-lg-10">
                                <input type="file" name="image" class="form-input-styled" data-fouc> 
                                <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 1Mb</span>
                            </div>
                        </div>                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-dark">Submit<i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/admin/web-control/review.blade.php ENDPATH**/ ?>