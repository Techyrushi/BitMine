<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e($gnl->site_name); ?></title>
</head>

<body>

<form action="https://www.moneybookers.com/app/payment.pl" method="POST" id="payment_form">
    <?php echo e(csrf_field()); ?>

    <input name="pay_to_email" value="<?php echo e($gatewayData->val1); ?>" type="hidden">

    <input name="transaction_id" value="<?php echo e($data->trx); ?>" type="hidden">

    <input name="return_url" value="<?php echo e(route('user.fund')); ?>" type="hidden">

    <input name="return_url_text" value="Return <?php echo e($gnl->site_name); ?>" type="hidden">

    <input name="cancel_url" value="<?php echo e(route('user.fund')); ?>" type="hidden">

    <input name="status_url" value="<?php echo e(route('ipn.skrill')); ?>" type="hidden">

    <input name="language" value="EN" type="hidden">

    <input name="amount" value="<?php echo e($data->usd_amo); ?>" type="hidden">

    <input name="currency" value="<?php echo e($currency->name); ?>" type="hidden">

    <input name="detail1_description" value="<?php echo e($gnl->site_name); ?>" type="hidden">

    <input name="detail1_text" value="Deposit To <?php echo e($gnl->site_name); ?>" type="hidden">


</form>

<script type="text/javascript">
    document.getElementById("payment_form").submit();
</script>
</body>

</html>




<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bitmine/core/resources/views/user/payment/skrill.blade.php ENDPATH**/ ?>