
<?php $__env->startSection('content'); ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo e(url('/')); ?>/asset/images/key-3348307_1920.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-1"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-12 col-7">
      <h1 class="display-2 text-white">
      <?php if(Auth::user()->status == 1 ): ?>
      Account has been blocked
      <?php else: ?>
      Account verification
      <?php endif; ?></h1>
      </div>
      <div class="col-lg-12 col-12 text-right">
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <?php if(Auth::user()->email_verify == 0 ): ?>
      <div class="card">
        <div class="card-header header-elements-inline">
          <h3 class="mb-0">Verify account</h3>
        </div>
        <div class="card-body">
          <form action="<?php echo e(route('user.send-emailVcode')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Email</label>
              <div class="col-lg-10">
                <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                  <input type="text" class="form-control" value="<?php echo e(Auth::user()->email); ?>" readonly required>
              </div>
            </div>               
            <div class="text-right">
              <button type="submit" class="btn btn-primary">Send code</button>
            </div>
          </form>
        </div>        
        <div class="card-body">
          <form action="<?php echo e(route('user.email-verify')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Enter Code</label>
              <div class="col-lg-10">
                <input type="hidden"  name="id" value="<?php echo e(Auth::user()->id); ?>">
                  <input type="text" name="email_code" class="form-control" placeholder="Verification Code" required>
              </div>
            </div>               
            <div class="text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    <?php elseif(Auth::user()->phone_verify == 0): ?>
    <div class="card">
        <div class="card-header header-elements-inline">
          <h3 class="mb-0">Verify account</h3>
        </div>
        <div class="card-body">
          <form action="<?php echo e(route('user.send-vcode')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group row">
              <label class="col-form-label col-lg-2"> Mobile No</label>
              <div class="col-lg-10">
                <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                  <input type="text" class="form-control" value="<?php echo e(Auth::user()->phone); ?>" readonly required>
              </div>
            </div>               
            <div class="text-right">
              <button type="submit" class="btn btn-primary">Send code</button>
            </div>
          </form>
        </div>        
        <div class="card-body">
          <form action="<?php echo e(route('user.sms-verify')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Enter Code</label>
              <div class="col-lg-10">
                <input type="hidden"  name="id" value="<?php echo e(Auth::user()->id); ?>">
                  <input type="text" name="sms_code" class="form-control" placeholder="Verification Code" required>
              </div>
            </div>               
            <div class="text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/authorization.blade.php ENDPATH**/ ?>