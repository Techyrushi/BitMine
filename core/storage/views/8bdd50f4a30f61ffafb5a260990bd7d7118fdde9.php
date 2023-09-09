

<?php $__env->startSection('content'); ?>
  <div class="main-content bg-dark" style="background-image:url('<?php echo e(url('/')); ?>/asset/frontend/img/bg-2.png');">
		<!-- Header -->
		<div class="header py-7 py-lg-8 pt-lg-9" >
		  <div class="container">
		    <div class="header-body text-center mb-7">
		      <div class="row justify-content-center">
		        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
		          <h1 class="text-white">Control Panel</h1>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Page content -->
		<div class="container mt--8 pb-5">
		  <div class="row justify-content-center">
		    <div class="col-lg-5 col-md-7">
		      <div class="border-0 mb-0">
		        <div class="card-header bg-transparent pb-5">
		          <div class="text-white text-center mt-2 mb-3">Sign in with credentials</div>
		        </div>
		        <div class="card-body px-lg-5 py-lg-5">
		          <form role="form" action="<?php echo e(route('admin.login')); ?>" method="post">
				  <?php echo csrf_field(); ?>
		            <div class="form-group mb-3">
		              <div class="input-group input-group-merge input-group-alternative">
		                <div class="input-group-prepend">
		                  <span class="input-group-text text-dark"><i class="ni ni-circle-08"></i></span>
		                </div>
		                <input class="form-control" placeholder="Username" type="text" name="username">
		              </div>
		            </div>
		            <div class="form-group">
		              <div class="input-group input-group-merge input-group-alternative">
		                <div class="input-group-prepend">
		                  <span class="input-group-text text-dark"><i class="ni ni-lock-circle-open"></i></span>
		                </div>
		                <input class="form-control" placeholder="Password" type="password" name="password">
		              </div>
		            </div>
		            <div class="text-center">
		              <button type="submit" class="btn btn-default my-4">LOGIN</button>
		            </div>
		          </form>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bitmine/core/resources/views/admin/index.blade.php ENDPATH**/ ?>