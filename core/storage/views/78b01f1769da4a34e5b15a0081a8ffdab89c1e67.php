<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card rounded-left-0">
				<div class="card-body">
					<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
						<div>
							<h6 class="font-weight-semibold"><?php echo e($ticket->subject); ?></h6>
							<ul class="list list-unstyled mb-0">
								<li>Created on: <span class="font-weight-semibold"><?php echo e(date("Y/m/d", strtotime($ticket->created_at))); ?></span></li>
								<li>Last update: <span class="font-weight-semibold"><?php echo e(date("Y/m/d", strtotime($ticket->updated_at))); ?></span></li>
								<li>Priority: <span class="font-weight-semibold"><?php echo e($ticket->priority); ?></span></li>
							</ul>
						</div>

						<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
							<ul class="list list-unstyled mb-0">
								<li>Status: 
                                <span class="badge bg-danger-400 font-weight-semibold">
                                <?php if($ticket->status==0): ?>
                                    Open
                                <?php elseif($ticket->status==1): ?>
                                    Closed                                      
                                <?php elseif($ticket->status==2): ?>
                                    Resolved 
                                <?php endif; ?>
                                </span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header header-elements-inline">
					<h6 class="card-title font-weight-semibold">Ticket Log</h6>
				</div>
				<div class="card-body">
					<ul class="media-list media-chat media-chat-scrollable mb-3">
						<li class="media">
							<div class="ml-3">
								<a href="javascript:void;">
									<img src="<?php echo e(url('/')); ?>/asset/profile/<?php echo e($client->image); ?>" class="rounded-circle" width="40" height="40" alt="">
								</a>
							</div>
							<div class="media-body">
								<div class="media-chat-item"><?php echo e($ticket->message); ?></div>
								<div class="font-size-sm text-muted mt-2"><?php echo e(date("Y/m/d", strtotime($ticket->created_at))); ?></div>
							</div>
						</li>
                        <?php $__currentLoopData = $reply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $df): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($df->status==1): ?>
                                <li class="media">
                                    <div class="ml-3">
                                        <a href="javascript:void;">
                                            <img src="<?php echo e(url('/')); ?>/asset/profile/<?php echo e($client->image); ?>" class="rounded-circle" width="40" height="40" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-chat-item"><?php echo e($df->reply); ?></div>
                                        <div class="font-size-sm text-muted mt-2"><?php echo e(date("Y/m/d", strtotime($df->created_at))); ?></div>
                                    </div>
                                </li>
                            <?php elseif($df->status==0): ?>
                                <li class="media media-chat-item-reverse">
                                    <div class="media-body">
                                        <div class="media-chat-item"><?php echo e($df->reply); ?></div>
                                        <div class="font-size-sm text-muted mt-2"><?php echo e(date("Y/m/d", strtotime($df->created_at))); ?></div>
                                    </div>
                                    <div class="mr-3">
                                        <a href="javascript:void;">
                                            <img src="<?php echo e(url('/')); ?>/asset/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40">
                                        </a>
                                    </div>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
                <form method="post" action="<?php echo e(route('ticket.reply')); ?>">
                    <?php echo csrf_field(); ?>
		        	<textarea class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."  name="reply" required></textarea>
    				<input type="hidden"  name="ticket_id" value="<?php echo e($ticket->ticket_id); ?>">			
		        	<div class="d-flex align-items-center">
		        		<button type="submit" class="btn bg-dark btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Send</button>
		        	</div>	
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core\resources\views/admin/user/edit-ticket.blade.php ENDPATH**/ ?>