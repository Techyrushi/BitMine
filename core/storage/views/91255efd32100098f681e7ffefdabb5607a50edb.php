 <?php $slug  = str_slug($page_title); ?>
<div class="col-md-12 col-sm-12 col-xs-12 text-right sm-text-center">
    <div class="social-icon-style-7">
        <ul class="extra-small-icon">
            <li><a class="facebook " href="https://www.facebook.com/sharer.php?u=<?php echo e(url('/')); ?>/single/<?php echo e($page_id); ?>/<?php echo e($slug); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter " href="https://twitter.com/intent/tweet?url=<?php echo e(url('/')); ?>/single/<?php echo e($page_id); ?>/<?php echo e($slug); ?>&text=<?php echo e($page_title); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a class="google " href="https://plus.google.com/share?url=<?php echo e(url('/')); ?>/single/<?php echo e($page_id); ?>/<?php echo e($slug); ?>&text=<?php echo e($page_title); ?>&hl=english" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="pinterest " href="https://pinterest.com/pin/create/button/?url=<?php echo e(url('/')); ?>/single/<?php echo e($page_id); ?>/<?php echo e($slug); ?>" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
        </ul>
    </div>
</div><?php /**PATH C:\xampp\htdocs\maxtrade\core\resources\views/partials/share.blade.php ENDPATH**/ ?>