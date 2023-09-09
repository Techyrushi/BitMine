<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e($gnl->site_name); ?></title>
</head>

<body>
<form action="https://voguepay.com/pay/" method="POST" id="payment_form">
    <input type="hidden" name="v_merchant_id" value="<?php echo e($vogue['value2']); ?>" />
    <input type="hidden" name="memo" value="<?php echo e($gnl->site_name); ?>" />
    <input type="hidden" name="success_url" value="<?php echo e(route('ipn.vogue')); ?>" />
    <input type="hidden" name="fail_url" value="<?php echo e(route('user.fund')); ?>" />
    <input type="hidden" name="cur" value="<?php echo e($currency->name); ?>" />
    <input type="hidden" name="item_1" value="Add Money To <?php echo e($gnl->site_name); ?>" />
    <input type="hidden" name="price_1" value="<?php echo e($vogue['amount']); ?>" />
    <input type="hidden" name="description_1" value="Account funding" />
</form>
<script>
    document.getElementById("payment_form").submit();
</script>
</body>

</html>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/maxtrade/core/resources/views/user/payment/vogue.blade.php ENDPATH**/ ?>