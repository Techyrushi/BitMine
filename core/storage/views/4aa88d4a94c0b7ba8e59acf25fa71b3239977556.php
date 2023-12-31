<?php $__env->startSection('content'); ?>
<div class="content"> 
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Email Template</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>CODE</th>
                                <th>DESCRIPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> &#123;&#123;message&#125;&#125;</td>
                            <td> Details Text From the Script</td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td> &#123;&#123;name&#125;&#125; </td>
                            <td> Users Name. Will be Pulled From Database</td>
                        </tr>
                        </tbody>                    
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Congifure template</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.email.update')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email sent from:</label>
                            <div class="col-lg-10">
                                <input type="text" name="sender" maxlength="200" value="<?php echo e($val->esender); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email message:</label>
                            <div class="col-lg-10">
                                <textarea type="text" name="message" rows="4" class="form-control tinymce"><?php echo e($val->emessage); ?></textarea>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bitmine/core/resources/views/admin/settings/email.blade.php ENDPATH**/ ?>