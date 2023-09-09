<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Currency</h6>
                    </div>
                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Currency</th>
                                <th>Symbol</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>    
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $cur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$k); ?>.</td>
                                <td><?php echo e($val->name); ?></td>
                                <td><?php echo e($val->currency); ?></td>
                                <td><?php echo e($val->symbol); ?></td>
                                <td>                                    
                                    <?php if($val->status==1): ?>
                                        <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Pending</span>
                                    <?php endif; ?>
                                </td>                               
                                <td class="text-center">
                                <?php if($val->status==0): ?>
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                            <?php if($val->status==0): ?>
                                                <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/pcurrency/<?php echo e($val->id); ?>"><i class="icon-eye mr-2"></i>Set as default</a>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>  
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
                                            <a  href="<?php echo e(url('/')); ?>/admin/branch/delete/<?php echo e($val->id); ?>" class="btn bg-danger">Proceed</a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btcApp\core\resources\views/admin/web-control/currency.blade.php ENDPATH**/ ?>