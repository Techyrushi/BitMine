<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Users</h6>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>                                                                      
                                    <th>Status</th>
                                    <th>Balance</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th class="text-center">Action</th>    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$k); ?>.</td>
                                    <td><?php echo e($val->name); ?></td>
                                    <td><?php echo e($val->username); ?></td>
                                    <td><?php echo e($val->email); ?></td>
                                    <td>
                                        <?php if($val->status==0): ?>
                                            <span class="badge badge-info">Active</span>
                                        <?php elseif($val->status==1): ?>
                                            <span class="badge badge-danger">Blocked</span> 
                                        <?php endif; ?>
                                    </td>   
                                    <td><?php echo e(substr($val->balance,0,9)); ?>BTC</td> 
                                    <td><?php echo e(date("Y/m/d", strtotime($val->created_at))); ?></td>  
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/manage-user/<?php echo e($val->id); ?>"><i class="icon-cogs spinner mr-2"></i>Manage account</a>
                                                    <?php if($val->status==0): ?>
                                                        <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/block-user/<?php echo e($val->id); ?>"><i class="icon-eye-blocked2 mr-2"></i>Block</a>
                                                    <?php else: ?>
                                                        <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/unblock-user/<?php echo e($val->id); ?>"><i class="icon-eye mr-2"></i>Unblock</a>
                                                    <?php endif; ?>
                                                    <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/email/<?php echo e($val->email); ?>/<?php echo e($val->name); ?>"><i class="icon-envelope mr-2"></i>Send email</a>    
                                                    <a data-toggle="modal" data-target="#<?php echo e($val->id); ?>delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete account</a>
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
                                                <a  href="<?php echo e(url('/')); ?>/admin/user/delete/<?php echo e($val->id); ?>" class="btn bg-danger">Proceed</a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/admin/user/index.blade.php ENDPATH**/ ?>