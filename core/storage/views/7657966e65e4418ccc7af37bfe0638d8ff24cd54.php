<!doctype html>
<html class="no-js" lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <base href="<?php echo e(url('/')); ?>"/>
        <title><?php echo e($title); ?> | <?php echo e($set->site_name); ?></title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="<?php echo e($set->site_name); ?>"/>
        <meta name="application-name" content="<?php echo e($set->site_name); ?>"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="description" content="<?php echo e($set->site_desc); ?>" />
        <link rel="shortcut icon" href="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" />
        <link rel="apple-touch-icon" href="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link2); ?>" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link2); ?>" />
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/sweetalert.css" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,600,700&display=swap">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/css/argon.css?v=1.1.0" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/sweetalert.css" type="text/css">
         <?php echo $__env->yieldContent('css'); ?>
    </head>
<!-- header begin-->
<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
          <img src="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-default" href="<?php echo e(route('user.dashboard')); ?>">
                <i class="ni ni-shop"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-default" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-archive-2"></i>
                <span class="nav-link-text">Transfer</span>
              </a>
              <div class="collapse" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item text-default">
                    <a href="<?php echo e(route('user.ownbank')); ?>" class="nav-link"><?php echo e($set->site_name); ?></a>
                  </li> 
                 <li class="nav-item text-default">
                    <a href="<?php echo e(route('user.otherbank')); ?>" class="nav-link">Foreign transfer</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-default" href="<?php echo e(route('user.fund')); ?>">
                <i class="ni ni-credit-card"></i>
                <span class="nav-link-text">Deposit</span>
              </a>
            </li> 
           <li class="nav-item">
              <a class="nav-link text-default" href="<?php echo e(route('user.withdraw')); ?>">
                <i class="ni ni-bag-17"></i>
                <span class="nav-link-text">E-withdraw</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-default" href="<?php echo e(route('user.statement')); ?>">
                <i class="ni ni-collection"></i>
                <span class="nav-link-text">Account statement</span>
              </a>
            </li> 
            <?php if($set->save==1): ?>
            <li class="nav-item">
              <a class="nav-link text-default" href="<?php echo e(route('user.save')); ?>">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Save 4 Me</span>
              </a>
            </li>
            <?php endif; ?>
            <?php if($set->py_scheme==1): ?>
            <li class="nav-item">
              <a class="nav-link text-default" href="<?php echo e(route('user.plans')); ?>">
                <i class="ni ni-chart-bar-32"></i>
                <span class="nav-link-text">PY scheme</span>
              </a>
            </li>
            <?php endif; ?>
            <?php if($set->loan==1): ?>
            <li class="nav-item">
              <a class="nav-link text-default" href="<?php echo e(route('user.loan')); ?>">
                <i class="ni ni-atom"></i>
                <span class="nav-link-text">Loan</span>
              </a>
            </li> 
            <?php endif; ?>           
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">More</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link text-default" href="<?php echo e(route('user.branch')); ?>">
                <i class="ni ni-building"></i>
                <span class="nav-link-text">Branches</span>
              </a>
            </li>   
            <li class="nav-item">
              <a class="nav-link text-default" href="<?php echo e(route('user.ticket')); ?>">
                <i class="ni ni-support-16"></i>
                <span class="nav-link-text">Support ticket</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link text-default" href="<?php echo e(route('user.logout')); ?>">
                <i class="ni ni-button-power"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
   <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-light bg-secondary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <div class="d-none d-sm-block">
            <h6 class="h2 mb-0 text-default">
                <?php echo e(number_format($user->balance).$currency->name); ?>

            </h6>
          </div>
            
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ni ni-bell-55 
                  <?php if(count($seen)>0): ?>
                  text-danger
                  <?php endif; ?>"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                  <!-- Dropdown header -->
                  <div class="px-3 py-3">
                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary"><?php echo e(count($seen)); ?></strong> notifications.</h6>
                  </div>
                  <!-- List group -->
                  <div class="list-group list-group-flush">
                  <?php $__currentLoopData = $alert; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="javascript:void;" class="list-group-item list-group-item-action">
                      <div class="row align-items-center">
                        <div class="col ml--2">
                          <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h4 class="mb-0 text-sm">                     
                                <?php if($hh->type==1): ?>
                                  Debit alert
                                <?php elseif($hh->type==2): ?>
                                  Credit alert
                                <?php endif; ?>
                              </h4>
                            </div>
                            <div class="text-right text-muted">
                              <small><?php echo e(date("Y/m/d h:i:A", strtotime($hh->created_at))); ?></small>
                            </div>
                          </div>
                          <p class="text-sm mb-0">Ref: #<?php echo e($hh->reference); ?>, Amount: <?php echo e(number_format($hh->amount).$currency->name); ?></p>
                        </div>
                      </div>
                    </a>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <!-- View all -->
                  <a href="<?php echo e(route('user.read')); ?>" class="dropdown-item text-center text-primary font-weight-bold py-3">Marl all as read</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder" src="<?php echo e(url('/')); ?>/asset/profile/<?php echo e($cast); ?>">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold"><?php echo e($user->name); ?></span>
                    </div>
                  </div>

                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <a href="<?php echo e(route('user.profile')); ?>" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                  </a>
                  <a href="<?php echo e(route('user.password')); ?>" class="dropdown-item">
                    <i class="ni ni-key-25"></i>
                    <span>Password</span>
                  </a> 
                  <a href="<?php echo e(route('user.pin')); ?>" class="dropdown-item">
                    <i class="ni ni-lock-circle-open"></i>
                    <span>Transfer pin</span>
                  </a>
                </div>
              </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- header end -->

<?php echo $__env->yieldContent('content'); ?>


<!-- footer begin -->
<footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-xl-left text-muted">
            <?php echo e($set->site_name); ?>  &copy; <?php echo e(date('Y')); ?>. All Rights Reserved. 
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
               <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vpages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($vpages)): ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/')); ?>/page/<?php echo e($vpages->id); ?>"><?php echo e($vpages->title); ?></a>
                </li>
                    <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('terms')); ?>">Terms & conditions</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('privacy')); ?>">Privacy policy</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/<?php echo e($set->tawk_id); ?>/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?php echo e(url('/')); ?>/asset/dashboard/js/demo.min.js"></script>
  <script src="<?php echo e(url('/')); ?>/asset/js/sweetalert.js"></script>
</body>

</html>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('script'); ?>
<?php if(session('success')): ?>
    <script>
        $(document).ready(function () {
            swal("Success!", "<?php echo e(session('success')); ?>", "success");
        });
    </script>
<?php endif; ?>

<?php if(session('alert')): ?>
    <script>
        $(document).ready(function () {
            swal("Sorry!", "<?php echo e(session('alert')); ?>", "error");
        });
    </script>
<?php endif; ?>
<?php if(session('message')): ?>
      <script type="text/javascript">
          $(document).ready(function () {
              swal("Success!", "<?php echo e(session('message')); ?>", "success");
          });
      </script>
  <?php endif; ?>

<script>
            <?php if(Session::has('message')): ?>
    var type = "<?php echo e(Session::get('alert-type','info')); ?>";
    switch (type) {
        case 'info':
            toastr.info("<?php echo e(Session::get('message')); ?>");
            break;
        case 'warning':
            toastr.warning("<?php echo e(Session::get('message')); ?>");
            break;
        case 'success':
            toastr.success("<?php echo e(Session::get('message')); ?>");
            break;
        case 'error':
            toastr.error("<?php echo e(Session::get('message')); ?>");
            break;
    }
    <?php endif; ?>
</script>
<script type="text/javascript">
  $(window).on('load', function () {
    $('#modal-notification').modal('show');
  });
</script>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/userlayout.blade.php ENDPATH**/ ?>