<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\xampp1\htdocs\landingpage_cms\@core\resources\views/components/flash-msg.blade.php ENDPATH**/ ?>