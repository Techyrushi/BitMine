<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-newspaper mr-2"></i> <span class="font-weight-semibold">Articles</span></h4>
            </div>
        </div>
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                </div>
            </div>
            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Posts</h6>
                    </div>
                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Views</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th class="text-center">Action</th>    
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$k); ?>.</td>
                                <td><?php echo e($val->title); ?></td>
                                <td><?php echo e($val->category->categories); ?></td>
                                <td><?php echo e($val->views); ?></td>
                                <td>
                                    <?php if($val->status==1): ?>
                                        <span class="badge badge-success">Published</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Pending</span>
                                    <?php endif; ?>
                                </td>   
                                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <?php if($val->status==1): ?>
                                                <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/unblog/<?php echo e($val->id); ?>"><i class="icon-eye-blocked2 mr-2"></i>Unpublish</a>
                                            <?php else: ?>
                                                <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/pblog/<?php echo e($val->id); ?>"><i class="icon-eye mr-2"></i>Publish</a>
                                            <?php endif; ?>
                                                <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/blog/<?php echo e($val->id); ?>"><i class='icon-pencil7 mr-2'></i>Edit</a>
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
                                            <a  href="<?php echo e(url('/')); ?>/admin/deleteblog/<?php echo e($val->id); ?>" class="btn bg-danger">Proceed</a>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/admin/blog.blade.php ENDPATH**/ ?>