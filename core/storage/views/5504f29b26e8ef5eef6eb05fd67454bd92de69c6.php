<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Services</h6>
                            <div class="header-elements">
                                <a class="font-weight-semibold" data-toggle="modal" data-target="#create"><i class="icon-file-plus mr-2"></i>Create service</a>
                            </div>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Code</th>
                                    <th>Icon</th>
                                    <th>Details</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th class="text-center">Action</th>    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$k); ?>.</td>
                                    <td><?php echo e($val->title); ?></td>
                                    <td><code><?php echo e($val->icon); ?></code></td>
                                    <td>fa fa-<?php echo e($val->icon); ?></td>
                                    <td><?php echo e($val->details); ?></td>
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a data-toggle="modal" data-target="#<?php echo e($val->id); ?>update" class="dropdown-item"><i class="icon-pencil7 mr-2"></i>Edit</a>
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
                                                <a  href="<?php echo e(url('/')); ?>/admin/service/delete/<?php echo e($val->id); ?>" class="btn bg-danger">Proceed</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="<?php echo e($val->id); ?>update" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">   
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="<?php echo e(route('service.update')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">Title:</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" name="title" class="form-control" value="<?php echo e($val->title); ?>">
                                                            <input type="hidden" name="id" value="<?php echo e($val->id); ?>">
                                                        </div>
                                                    </div>       
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">Icon:</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" name="icon" class="form-control" value="<?php echo e($val->icon); ?>">
                                                        </div>
                                                    </div>  
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">Details:</label>
                                                        <div class="col-lg-10">
                                                            <textarea type="text" name="details" class="form-control"><?php echo e($val->details); ?></textarea>
                                                        </div>
                                                    </div>               
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn bg-dark">Update<i class="icon-paperplane ml-2"></i></button>
                                                </div>
                                            </form>
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
                <form action="<?php echo e(url('admin/createservice')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Title:</label>
                            <div class="col-lg-10">
                                <input type="text" name="title" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Icon:</label>
                            <div class="col-lg-10">
                                <input type="text" name="icon" class="form-control" required>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Details:</label>
                            <div class="col-lg-10">
                                <textarea type="text" name="details" class="form-control"></textarea>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/admin/web-control/service.blade.php ENDPATH**/ ?>