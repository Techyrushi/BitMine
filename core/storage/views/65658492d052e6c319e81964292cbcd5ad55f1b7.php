<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Update Bank Details</h6>
                        <div class="header-elements">
                            <span class="font-weight-semibold">Last updated: <?php echo e(date("Y/m/d h:i:A", strtotime($bank->updated_at))); ?></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(url('admin/bankdetails')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Name:</label>
                                <div class="col-lg-10">
                                <input type="text" name="name" class="form-control" value="<?php echo e($bank->name); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Bank name:</label>
                                <div class="col-lg-10">
                                <input type="text" name="bank_name" class="form-control" value="<?php echo e($bank->bank_name); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Bank address:</label>
                                <div class="col-lg-10">
                                <input type="text" name="address" class="form-control" value="<?php echo e($bank->address); ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">IBAN code:</label>
                                <div class="col-lg-10">
                                <input type="text" name="iban" class="form-control" value="<?php echo e($bank->iban); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">SWIFT code:</label>
                                <div class="col-lg-10">
                                <input type="text" name="swift" class="form-control" value="<?php echo e($bank->swift); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Account number:</label>
                                <div class="col-lg-10">
                                <input type="number" name="acct_no" class="form-control" value="<?php echo e($bank->acct_no); ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Status <span class="text-danger">*</span></label>
                                <div class="col-lg-10">
                                    <div class="form-check form-check-inline form-check-switchery">
                                        <label class="form-check-label">
                                            <?php if($bank->status==1): ?>
                                                <input type="checkbox" name="status" class="form-check-input-switchery" value="1" checked>
                                            <?php else: ?>
                                                <input type="checkbox" name="status" class="form-check-input-switchery" value="1">
                                            <?php endif; ?>       
                                        </label>
                                    </div>
                                </div>
                            </div>               
                            <div class="text-right">
                                <button type="submit" class="btn bg-dark">Update<i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div> 
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Bank transfer</h6>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Amount</th>                                                                       
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th class="text-center">Action</th>    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $deposit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$k); ?>.</td>
                                    <td><?php echo e($val->user->name); ?></td>
                                    <td><?php echo e(number_format($val->amount).$currency->name); ?></td>
                                    <td>
                                        <?php if($val->status==0): ?>
                                            <span class="badge badge-danger">Pending</span>
                                        <?php elseif($val->status==1): ?>
                                            <span class="badge badge-success">Approved</span>
                                        <?php elseif($val->status==2): ?>
                                            <span class="badge badge-info">Declined</span> 
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
                                                <?php if($val->status==0): ?>
                                                    <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/approvebk/<?php echo e($val->id); ?>"><i class="icon-thumbs-up3 mr-2"></i>Approve request</a>
                                                    <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/declinebk/<?php echo e($val->id); ?>"><i class="icon-thumbs-down3 mr-2"></i>Decline request</a>
                                                <?php endif; ?>
                                                    <a data-toggle="modal" data-target="#<?php echo e($val->id); ?>delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                                                    <a data-toggle="modal" data-target="#<?php echo e($val->id); ?>screenshot" class="dropdown-item"><i class="icon-image2 mr-2"></i>Screenshot</a>
                                                    <a data-toggle="modal" data-target="#<?php echo e($val->id); ?>details" class="dropdown-item"><i class="icon-share2 mr-2"></i>Transfer details</a>
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
                                                <a  href="<?php echo e(url('/')); ?>/admin/bank_transfer/delete/<?php echo e($val->id); ?>" class="btn bg-danger">Proceed</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="<?php echo e($val->id); ?>details" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">   
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <h6 class="font-weight-semibold"><?php echo e($val->details); ?></h6>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div id="<?php echo e($val->id); ?>screenshot" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">   
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="<?php echo e(url('/')); ?>/asset/screenshot/<?php echo e($val->image); ?>" style="height:auto;max-width:100%;">
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/admin/deposit/bank-transfer.blade.php ENDPATH**/ ?>