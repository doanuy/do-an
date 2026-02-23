

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">📊 Dashboard</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h5>Tổng số bệnh</h5>
                <h2 class="text-primary"><?php echo e($totalDiseases); ?></h2>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH H:\web\laragon\www\web-ai-lab-1\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>