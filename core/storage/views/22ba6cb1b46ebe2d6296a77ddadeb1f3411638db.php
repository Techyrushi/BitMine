<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Transfer logs</h6>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Ref</th>
                                    <th>Sender</th>
                                    <th>Receiver</th>
                                    <th>Amount</th>                                                                       
                                    <th>Created</th>
                                    <th>Updated</th>   
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $transfer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$k); ?>.</td>
                                    <td><?php echo e($val->ref_id); ?></td>
                                    <td><a href="<?php echo e(url('admin/manage-user')); ?>/<?php echo e($val->sender->id); ?>"><?php echo e($val->sender->name); ?></a></td>
                                    <td><a href="<?php echo e(url('admin/manage-user')); ?>/<?php echo e($val->receiver->id); ?>"><?php echo e($val->receiver->name); ?></a></td>
                                    <td><?php echo e(substr($val->amount,0,9)); ?>BTC</td>
                                    <td><?php echo e(date("Y/m/d", strtotime($val->created_at))); ?></td>  
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btcApp\core\resources\views/admin/transfer/transfer.blade.php ENDPATH**/ ?>