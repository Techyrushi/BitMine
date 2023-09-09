<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Update account information</h6>
                </div>
                <div class="card-body">
                        <form action="<?php echo e(url('admin/profile-update')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Username:</label>
                            <div class="col-lg-10">
                                <input type=""hidden value="<?php echo e($client->id); ?>" name="id">
                                <input type="text" name="username" class="form-control" value="<?php echo e($client->username); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" class="form-control" value="<?php echo e($client->name); ?>">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email:</label>
                            <div class="col-lg-10">
                                <input type="email" name="email" class="form-control" readonly value="<?php echo e($client->email); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Mobile:</label>
                            <div class="col-lg-10">
                                <input type="text" name="mobile" class="form-control" value="<?php echo e($client->phone); ?>">
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Country:</label>
                            <div class="col-lg-10">
                                <input type="text" name="country" class="form-control" value="<?php echo e($client->country); ?>">
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">City:</label>
                            <div class="col-lg-10">
                                <input type="text" name="city" class="form-control" value="<?php echo e($client->city); ?>">
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Zip code:</label>
                            <div class="col-lg-10">
                                <input type="text" name="zip_code" class="form-control" value="<?php echo e($client->zip_code); ?>">
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Address:</label>
                            <div class="col-lg-10">
                                <input type="text" name="address" class="form-control" value="<?php echo e($client->address); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Balance:</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">BTC</span>
                                    </span>
                                    <input type="number" name="balance"step="any" max-length="10" value="<?php echo e(convertFloat($client->balance)); ?>" class="form-control">
                                </div>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Status<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                        <?php if($client->email_verify==1): ?>
                                            <input type="checkbox" name="email_verify" class="form-check-input-switchery" value="1" checked>
                                        <?php else: ?>
                                            <input type="checkbox" name="email_verify" class="form-check-input-switchery" value="1">
                                        <?php endif; ?>  
                                        Email verification  
                                    </label>
                                </div>                                
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                        <?php if($client->phone_verify==1): ?>
                                            <input type="checkbox" name="phone_verify" class="form-check-input-switchery" value="1" checked>
                                        <?php else: ?>
                                            <input type="checkbox" name="phone_verify" class="form-check-input-switchery" value="1">
                                        <?php endif; ?>  
                                        Phone verification  
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
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="<?php echo e(url('/')); ?>/asset/profile/<?php echo e($client->image); ?>" width="120" height="120" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                        <div>
                            <ul class="list list-unstyled mb-0">
                                <li>Joined: <span class="font-weight-semibold"><?php echo e(date("Y/m/d h:i:A", strtotime($client->created_at))); ?></span></li>
                                <li>Last Login: <span class="font-weight-semibold"><?php echo e(date("Y/m/d h:i:A", strtotime($client->last_login))); ?></span></li>
                                <li>Last Updated: <span class="font-weight-semibold"><?php echo e(date("Y/m/d h:i:A", strtotime($client->updated_at))); ?></span></li>
                                <li>IP Address: <span class="font-weight-semibold"><?php echo e($client->ip_address); ?></span></li>
                                <li>Account no: <span class="font-weight-semibold"><?php echo e($client->acct_no); ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  
            <?php if($set->kyc==1): ?>
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Kyc verification</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <?php if($client->kyc_status==0): ?>
                                        Unverified
                                    <?php else: ?>
                                        Verified
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <?php if(!empty($client->kyc_link)): ?>
                                        <a href="<?php echo e(url('/')); ?>/asset/profile/<?php echo e($client->kyc_link); ?>">View</a>
                                    <?php else: ?>
                                        No file
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                <?php if($client->kyc_status!=1): ?>
                                    <?php if(!empty($client->kyc_link)): ?> 
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class='dropdown-item' href ="<?php echo e(url('/')); ?>/admin/approve-kyc/<?php echo e($client->id); ?>"><i class="icon-eye mr-2"></i>Approve</a>
                                                <a class='dropdown-item' href ="<?php echo e(url('/')); ?>/admin/reject-kyc/<?php echo e($client->id); ?>"><i class="icon-eye-blocked2 mr-2"></i>Reject</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                                </td>             
                            </tr> 
                        </tbody>
                    </table>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Deposit Logs</h6>
                </div>
                <div class="">
                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Amount</th>                                                                       
                                <th>BTC</th>                                                                       
                                <th>Method</th>
                                <th>Ref</th>
                                <th>Charge</th>
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
                                <td><?php echo e(number_format($val->amount).$currency->name); ?></td>
                                <td><?php echo e(convertFloat($val->btc_amo)); ?>BTC</td>
                                <td><?php echo e($val->gateway['name']); ?></td>
                                <td><?php echo e($val->trx); ?></td> 
                                <td><?php echo e(number_format($val->charge).$currency->name); ?></td> 
                                <td>
                                    <?php if($val->status==0): ?>
                                        <span class="badge badge-danger">Pending</span>
                                    <?php elseif($val->status==1): ?>
                                        <span class="badge badge-success">Approved</span> 
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
                                                <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/approvedeposit/<?php echo e($val->id); ?>"><i class="icon-thumbs-up3 mr-2"></i>Approve request</a>
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
                                            <a  href="<?php echo e(url('/')); ?>/admin/deposit/delete/<?php echo e($val->id); ?>" class="btn bg-danger">Proceed</a>
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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Withdraw logs</h6>
                </div>
                <div class="">
                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Amount</th>                                                                     
                                <th>Details</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th class="text-center">Action</th>    
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $withdraw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$k); ?>.</td>
                                <td><?php echo e(substr($val->amount,0,9)); ?>BTC</td>
                                <td><?php echo e($val->details); ?></td>
                                <td>
                                    <?php if($val->status==0): ?>
                                        <span class="badge badge-danger">Unpaid</span>
                                    <?php elseif($val->status==1): ?>
                                        <span class="badge badge-success">Paid</span> 
                                    <?php elseif($val->status==2): ?>
                                        <span class="badge badge-info">Declined</span>
                                    <?php endif; ?>
                                </td> 
                                <td>          
                                    <?php if($val->type==1): ?>
                                        <span class="badge badge-info">Trading profit</span>
                                    <?php elseif($val->type==2): ?>
                                        <span class="badge badge-info">Account balance</span>                  
                                    <?php elseif($val->type==3): ?>
                                        <span class="badge badge-info">Referral bonus</span>
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
                                                <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/approvewithdraw/<?php echo e($val->id); ?>"><i class="icon-thumbs-up3 mr-2"></i>Approve request</a>
                                                <a class='dropdown-item' href="<?php echo e(url('/')); ?>/admin/declinewithdraw/<?php echo e($val->id); ?>"><i class="icon-thumbs-down3 mr-2"></i>Decline request</a>
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
                                            <a  href="<?php echo e(url('/')); ?>/admin/withdraw/delete/<?php echo e($val->id); ?>" class="btn bg-danger">Proceed</a>
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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Investment</h6>
                </div>
                <div class="">
                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Ref</th>
                                <th>Amount</th>                                                                       
                                <th>Plan</th>
                                <th>Daily percent</th>
                                <th>Duration</th>
                                <th>Profit</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th class="text-center">Action</th>    
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $profit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$k); ?>.</td>
                                <td><?php echo e($val->trx); ?></td>
                                <td><?php echo e(substr($val->amount,0,9)); ?>BTC</td>
                                <td><?php echo e($val->plan->name); ?></td>
                                <td><?php echo e($val->plan->percent); ?>%</td>
                                <td><?php echo e($val->plan->duration.$val->plan->period); ?>(s)</td>
                                <td><?php echo e(substr($val->profit,0,9)); ?>BTC</td>
                                <td><?php echo e(date("Y/m/d", strtotime($val->created_at))); ?></td>  
                                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
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
                                            <a  href="<?php echo e(url('/')); ?>/admin/py/delete/<?php echo e($val->id); ?>" class="btn bg-danger">Proceed</a>
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
                                <td><?php echo e($val->user->username); ?></td>
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
                                <td><?php echo e($val->sender->name); ?></td>
                                <td><?php echo e($val->receiver->name); ?></td>
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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Earnings</h6>
                </div>
                <div class="">
                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Amount</th>
                                <th>Username</th>
                                <th>Created</th>
                                <th>Updated</th>  
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $earning; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$k); ?>.</td>
                                <td><?php echo e(substr($val->amount,0,9)); ?>BTC</td>
                                <td><?php echo e($val->user['username']); ?></td>
                                <td><?php echo e(date("Y/m/d", strtotime($val->created_at))); ?></td>  
                                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
                        </tbody>                    
                    </table>
                </div>
            </div>
        </div>
    </div>    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Referrals</h6>
                </div>
                <div class="">
                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Created</th>
                                <th>Updated</th>  
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $referral; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$k); ?>.</td>
                                <td><?php echo e($val->user->name); ?></td>
                                <td><?php echo e($val->user->username); ?></td>
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/anycoin/core/resources/views/admin/user/edit.blade.php ENDPATH**/ ?>