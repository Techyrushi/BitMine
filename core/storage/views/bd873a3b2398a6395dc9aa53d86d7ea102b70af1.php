 <?php $slug  = str_slug($post->title); ?>
<div class="widget w-contacts">
        <ul class="socials socials--white">
            <li  class="social-item"><a class="facebook " href="https://www.facebook.com/sharer.php?u=<?php echo e(url('/')); ?>/single/<?php echo e($post->id); ?>/<?php echo e($slug); ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li  class="social-item"><a class="twitter " href="https://twitter.com/intent/tweet?url=<?php echo e(url('/')); ?>/single/<?php echo e($post->id); ?>/<?php echo e($slug); ?>&text=<?php echo e($post->title); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li  class="social-item"><a class="google " href="https://plus.google.com/share?url=<?php echo e(url('/')); ?>/single/<?php echo e($post->id); ?>/<?php echo e($slug); ?>&text=<?php echo e($post->title); ?>&hl=english" target="_blank"><i class="fab fa-google-plus"></i></a></li>
            <li  class="social-item"><a class="pinterest " href="https://pinterest.com/pin/create/button/?url=<?php echo e(url('/')); ?>/single/<?php echo e($post->id); ?>/<?php echo e($slug); ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
        </ul>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/anycoin/core/resources/views/partials/share.blade.php ENDPATH**/ ?>