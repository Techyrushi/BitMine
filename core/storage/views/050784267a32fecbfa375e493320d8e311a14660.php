<?php $__env->startSection('content'); ?>
<div class="main-content bg-dark" style="background-image:url('<?php echo e(url('/')); ?>/asset/frontend/img/bg-2.png');">
    <!-- Header -->
    <div class="header py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white"><?php echo e(__('Register')); ?></h1>
              <p class="text-lead text-white"><?php echo e($ui['header_body']); ?></p>          
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-white text-center mt-2 mb-3">Sign up with credentials</div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
            <?php if($set->registration==1): ?>
              <form role="form" action="<?php echo e(route('submitregister')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-dark"><i class="ni ni-user-run"></i></span>
                        </div>
                        <input class="form-control" placeholder="Full name" type="text" name="name">
 
                      </div>
                    </div>
                    <?php if($errors->has('name')): ?>
                            <span class="error form-error-msg ">
                                <?php echo e($errors->first('name')); ?>

                            </span>
                        <?php endif; ?>
                   <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-dark"><i class="ni ni-user-run"></i></span>
                        </div>
                        <input class="form-control" placeholder="Username" type="text" name="username">

                      </div>
                    </div>
                    <?php if($errors->has('username')): ?>
                            <span class="error form-error-msg ">
                               <?php echo e($errors->first('username')); ?>

                            </span>
                        <?php endif; ?>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-dark"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email" name="email">

                      </div>
                    </div>
                    <?php if($errors->has('email')): ?>
                            <span class="error form-error-msg ">
                               <?php echo e($errors->first('email')); ?>

                            </span>
                        <?php endif; ?>
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-dark"><i class="ni ni-mobile-button"></i></span>
                        </div>
                        <input class="form-control" placeholder="Mobile" type="text" name="phone">

                      </div>
                    </div> 
                    <?php if($errors->has('phone')): ?>
                            <span class="error form-error-msg ">
                                <?php echo e($errors->first('phone')); ?>

                            </span>
                        <?php endif; ?>
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-dark"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password" name="password">
 
                      </div>
                    </div> 
                    <?php if($errors->has('password')): ?>
                            <span class="error form-error-msg ">
                                <?php echo e($errors->first('password')); ?>

                            </span>
                        <?php endif; ?>
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-dark"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Re-type password" type="password" name="password_confirmation">
                      </div>
                    </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-default my-4">Sign up</button>
                </div>
              </form>
            <?php else: ?>
            <div class="text-dark text-center mt-2 mb-3"><strong>We are not currenctly accepting new users</strong></div>
            <?php endif; ?>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="<?php echo e(route('user.password.request')); ?>" class="text-white"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="<?php echo e(route('register')); ?>" class="text-white"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bitmine/core/resources/views//auth/register.blade.php ENDPATH**/ ?>