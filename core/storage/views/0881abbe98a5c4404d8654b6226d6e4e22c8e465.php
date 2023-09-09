<div class="margin-45px-bottom xs-margin-25px-bottom">
    <div class="text-black margin-20px-bottom alt-font text-uppercase font-weight-500 text-small">
    	<span>Categories</span>
    </div>
    <ul class="list-style-6 margin-50px-bottom text-small">
    	<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <?php
                $cslug=str_slug($vcat->categories);
                $rate=count(DB::select('select * from trending where cat_id=? and status=?', [$vcat->id,1]));
            ?> 
		<li>
			<a class="text-black alt-font" href="<?php echo e(url('/')); ?>/cat/<?php echo e($vcat->id); ?>/<?php echo e($cslug); ?>"><?php echo e($vcat->categories); ?></a>
            <span class="text-black alt-font"><?php echo e($rate); ?></span>
		</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>   
</div>
<div class="margin-45px-bottom xs-margin-25px-bottom">
	<div class="text-black margin-25px-bottom alt-font text-uppercase font-weight-500 text-small">
		<span>Recent post</span>
	</div>
    <ul class="latest-post position-relative">
    	 <?php $__currentLoopData = $trending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vtrending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $vslug=str_slug($vtrending->title); ?>
        <li>
            <div class="display-table-cell vertical-align-top text-small"><a href="<?php echo e(url('/')); ?>/single/<?php echo e($vtrending->id); ?>/<?php echo e($vslug); ?>" class="text-black"><span class="display-inline-block margin-5px-bottom alt-font"><?php echo e($vtrending->title); ?></span></a> <span class="clearfix text-black alt-font text-small"><?php echo e(date("M j, Y", strtotime($vtrending->created_at))); ?></span></div>
        </li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div><?php /**PATH C:\xampp\htdocs\maxtrade\core\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>