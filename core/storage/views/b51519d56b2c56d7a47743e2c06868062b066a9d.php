<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Ticket</h6>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Username</th>
                                    <th>Priority</th>
                                    <th>Ticket ID</th>                                                                      
                                    <th>Status</th>
                                    <th>Subject</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th class="text-center">Action</th>    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $ticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$k); ?>.</td>
                                    <td><a href="<?php echo e(url('admin/manage-user')); ?>/<?php echo e($val->user->id); ?>"><?php echo e($val->user->name); ?></a></td>
                                    <td><?php echo e($val->priority); ?></td>
                                    <td><?php echo e($val->ticket_id); ?></td>
                                    <td>
                                        <?php if($val->status==0): ?>
                                            <span class="badge badge-info">Open</span>
                                        <?php elseif($val->status==1): ?>
                                            <span class="badge badge-danger">Closed</span>                                        
                                        <?php elseif($val->status==2): ?>
                                            <span class="badge badge-success">Resolved</span> 
                                        <?php endif; ?>
                                    </td>   
                                    <td><?php echo e($val->subject); ?></td> 
                                    <td><?php echo e(date("Y/m/d", strtotime($val->date))); ?></td>  
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/manage-ticket/<?php echo e($val->id); ?>"><i class="icon-bubbles5 mr-2"></i>Manage ticket</a>
                                                    <?php if($val->status==0): ?>
                                                        <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/close-ticket/<?php echo e($val->id); ?>"><i class="icon-eye-blocked2 mr-2"></i>Close ticket</a>
                                                    <?php endif; ?>    
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
                                                <a  href="<?php echo e(url('/')); ?>/admin/ticket/delete/<?php echo e($val->id); ?>" class="btn bg-danger">Proceed</a>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade-demo/core/resources/views/admin/user/ticket.blade.php ENDPATH**/ ?>