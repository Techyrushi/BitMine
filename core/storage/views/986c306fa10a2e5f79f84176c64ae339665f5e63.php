<?php $__env->startSection('content'); ?>
<div class="content"> 
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Congifure website</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.settings.update')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Company / website name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="site_name" maxlength="200" value="<?php echo e($set->site_name); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Tawk ID:</label>
                            <div class="col-lg-10">
                                <input type="text" name="tawk_id" value="<?php echo e($set->tawk_id); ?>" maxlength="25" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Company email:</label>
                            <div class="col-lg-10">
                                <input type="email" name="email" value="<?php echo e($set->email); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Mobile:</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" name="mobile" max-length="14" value="<?php echo e($set->mobile); ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Website title:</label>
                            <div class="col-lg-10">
                                <input type="text" name="title" max-length="200" value="<?php echo e($set->title); ?>" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Balance on signup <span class="text-danger">*</span></label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">BTC</span>
                                    </span>
                                    <input type="number" name="bal" step="any" max-length="10" value="<?php echo e(convertFloat($set->balance_reg)); ?>" class="form-control">
                                </div>
                            </div>                                                        
                            <label class="col-form-label col-lg-2">Withdraw charge <span class="text-danger">*</span></label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input type="number" name="withdraw_charge" max-length="10" value="<?php echo e($set->withdraw_charge); ?>" class="form-control">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">%</span>
                                    </span>
                                </div>
                            </div>                             
                            <label class="col-form-label col-lg-2">Upgrade fee <span class="text-danger">*</span></label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input type="number" name="upgrade_fee" step="any" max-length="10" value="<?php echo e($set->upgrade_fee); ?>" class="form-control">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">BTC</span>
                                    </span>
                                </div>
                            </div>                            
                        </div>           
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Status <span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                    <?php if($set->kyc==1): ?>
                                        <input type="checkbox" name="kyc" class="form-check-input-switchery" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="kyc" class="form-check-input-switchery" value="1">
                                    <?php endif; ?>
                                    KYC       
                                    </label>
                                </div> 
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                    <?php if($set->email_verification==1): ?>
                                        <input type="checkbox" name="email_activation" class="form-check-input-switchery" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="email_activation" class="form-check-input-switchery" value="1">
                                    <?php endif; ?>
                                    Email verification       
                                    </label>
                                </div>   
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                    <?php if($set->sms_verification==1): ?>
                                        <input type="checkbox" name="sms_activation" class="form-check-input-switchery" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="sms_activation" class="form-check-input-switchery" value="1">
                                    <?php endif; ?>
                                    SMS Verification       
                                    </label>
                                </div>                                 
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                    <?php if($set->email_notify==1): ?>
                                        <input type="checkbox" name="email_notify" class="form-check-input-switchery" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="email_notify" class="form-check-input-switchery" value="1">
                                    <?php endif; ?>
                                    Email notify       
                                    </label>
                                </div>                                 
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                    <?php if($set->sms_notify==1): ?>
                                        <input type="checkbox" name="sms_notify" class="form-check-input-switchery" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="sms_notify" class="form-check-input-switchery" value="1">
                                    <?php endif; ?>
                                    SMS notify       
                                    </label>
                                </div> 
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                    <?php if($set->registration==1): ?>
                                        <input type="checkbox" name="registration" class="form-check-input-switchery" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="registration" class="form-check-input-switchery" value="1">
                                    <?php endif; ?>
                                    Registration       
                                    </label>
                                </div>                                 
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                    <?php if($set->upgrade_status==1): ?>
                                        <input type="checkbox" name="upgrade_status" class="form-check-input-switchery" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="upgrade_status" class="form-check-input-switchery" value="1">
                                    <?php endif; ?>
                                    Upgrade status       
                                    </label>
                                </div>                                  
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                    <?php if($set->referral==1): ?>
                                        <input type="checkbox" name="referral" class="form-check-input-switchery" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="referral" class="form-check-input-switchery" value="1">
                                    <?php endif; ?>
                                    Referral       
                                    </label>
                                </div>                                  
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Short description:</label>
                            <div class="col-lg-10">
                                <textarea type="text" name="site_desc" rows="4" class="form-control"><?php echo e($set->site_desc); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Address:</label>
                            <div class="col-lg-10">
                                <textarea type="text" name="address" rows="4" class="form-control"><?php echo e($set->address); ?></textarea>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bitmine/core/resources/views/admin/settings/basic-setting.blade.php ENDPATH**/ ?>