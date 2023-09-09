<?php $__env->startSection('content'); ?>
    <div class="content"> 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Edit</h6>
                    </div>
                    <div class="card-body">
                        <p class="text-danger"></p>
                        <form action="<?php echo e(route('admin.plan.update')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Name:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" value="<?php echo e($plan->name); ?>" reqiured>
                                    <input type="hidden" name="id" value="<?php echo e($plan->id); ?>">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Monthly percent:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="percent" value="<?php echo e($plan->percent); ?>" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Minimum amount:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="min_amount" value="<?php echo e($plan->min_deposit); ?>" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">BTC</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Maximum amount:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="max_amount" value="<?php echo e($plan->amount); ?>" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">BTC</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Duration:</label>
                                <div class="col-lg-10">
                                    <input type="number" name="duration" pattern="[0-9]+(\.[0-9]{0,2})?%?" value="<?php echo e($plan->duration); ?>" class="form-control" placeholder="1" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Period:</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="period" data-fouc required>    
                                        <option value="day" 
                                            <?php if($plan->period=='day'): ?>
                                                selected
                                            <?php endif; ?>
                                            >Day
                                        </option>                                         
                                        <option value="week" 
                                            <?php if($plan->period=='week'): ?>
                                                selected
                                            <?php endif; ?>
                                            >Week
                                        </option>                                         
                                        <option value="month" 
                                            <?php if($plan->period=='month'): ?>
                                                selected
                                            <?php endif; ?>
                                            >Month
                                        </option>                                         
                                        <option value="year" 
                                            <?php if($plan->period=='year'): ?>
                                                selected
                                            <?php endif; ?>
                                            >year
                                        </option>                                       
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Referral percent:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="ref_percent" maxlength="10" placeholder="2.5" value="<?php echo e($plan->ref_percent); ?>" class="form-control" required>
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Hashrate:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="hashrate" placeholder="20Ph/s" class="form-control" value="<?php echo e($plan->hashrate); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Status:</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="status">
                                        <option value="1" 
                                            <?php if($plan->status==1): ?>
                                                selected
                                            <?php endif; ?>
                                            >Active
                                        </option>
                                        <option value="0"  
                                            <?php if($plan->status==0): ?>
                                                selected
                                            <?php endif; ?>
                                            >Deactive
                                        </option>
                                    </select>
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
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/anycoin/core/resources/views/admin/py-scheme/edit.blade.php ENDPATH**/ ?>