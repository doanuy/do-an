

<?php $__env->startSection('content'); ?>

<h2>Sửa bệnh</h2>

<form action="<?php echo e(route('diseases.update', $disease)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="mb-3">
        <label class="form-label">Tên bệnh</label>
        <input type="text" name="name" class="form-control" value="<?php echo e($disease->name); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" class="form-control"><?php echo e($disease->description); ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Triệu chứng</label>
        <textarea name="symptoms" class="form-control"><?php echo e($disease->symptoms); ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Điều trị</label>
        <textarea name="treatment" class="form-control"><?php echo e($disease->treatment); ?></textarea>
    </div>

    <button type="submit" class="btn btn-warning">Cập nhật</button>
    <a href="<?php echo e(route('diseases.index')); ?>" class="btn btn-secondary">Quay lại</a>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH H:\web\laragon\www\web-ai-lab-1\resources\views/diseases/edit.blade.php ENDPATH**/ ?>