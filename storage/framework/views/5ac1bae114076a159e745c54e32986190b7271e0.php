<?php $__env->startComponent('mail::message'); ?>
# Introduction

お問い合わせありがとうございます。

<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /src/resources/views/emails/contact/thanks.blade.php ENDPATH**/ ?>