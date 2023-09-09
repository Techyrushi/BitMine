<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e($gnl->title); ?></title>
</head>

<body>
<form action="https://perfectmoney.is/api/step1.asp" method="POST" id="payment_form">
    <input type="hidden" name="PAYEE_ACCOUNT" value="<?php echo e($perfect['value1']); ?>">
    <input type="hidden" name="PAYEE_NAME" value="<?php echo e($gnl->site_name); ?>">
    <input type='hidden' name='PAYMENT_ID' value="<?php echo e($perfect['track']); ?>">
    <input type="hidden" name="PAYMENT_AMOUNT" value="<?php echo e($perfect['amount']); ?>">
    <input type="hidden" name="PAYMENT_UNITS" value="<?php echo e($currency->name); ?>">
    <input type="hidden" name="STATUS_URL" value="<?php echo e(route('ipn.perfect')); ?>">
    <input type="hidden" name="PAYMENT_URL" value="<?php echo e(route('user.fund')); ?>">
    <input type="hidden" name="PAYMENT_URL_METHOD" value="POST">
    <input type="hidden" name="NOPAYMENT_URL" value="<?php echo e(route('user.fund')); ?>">
    <input type="hidden" name="NOPAYMENT_URL_METHOD" value="POST">
    <input type="hidden" name="SUGGESTED_MEMO" value="<?php echo e(Auth::user()->username); ?>">
    <input type="hidden" name="BAGGAGE_FIELDS" value="IDENT"><br>
</form>

<script>
    document.getElementById("payment_form").submit();
</script>
</body>

</html>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/payment/perfect.blade.php ENDPATH**/ ?>