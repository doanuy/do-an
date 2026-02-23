

<?php $__env->startSection('content'); ?>

<div class="card shadow">
    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Chi tiết bệnh</h4>
    </div>

    <div class="card-body">
        <h5><strong>Tên bệnh:</strong></h5>
        <p><?php echo e($disease->name); ?></p>

        <hr>

        <h5><strong>Mô tả:</strong></h5>
        <p><?php echo e($disease->description); ?></p>

        <hr>

        <h5><strong>Triệu chứng:</strong></h5>
        <p><?php echo e($disease->symptoms); ?></p>

        <hr>

        <h5><strong>Điều trị:</strong></h5>
        <p><?php echo e($disease->treatment); ?></p>

        <a href="<?php echo e(route('diseases.index')); ?>" class="btn btn-secondary mt-3">
            ← Quay lại
        </a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH H:\web\laragon\www\web-ai-lab-1\resources\views/diseases/show.blade.php ENDPATH**/ ?>