

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Thêm bệnh mới</h2>

    <?php if($errors->any()): ?>
        <div style="color:red;">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('diseases.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div>
            <label>Tên bệnh:</label>
            <input type="text" name="name" value="<?php echo e(old('name')); ?>" required>
        </div>

        <div>
            <label>Mô tả:</label>
            <textarea name="description" required><?php echo e(old('description')); ?></textarea>
        </div>

        <button type="submit">Lưu</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH H:\web\laragon\www\web-ai-lab-1\resources\views/diseases/create.blade.php ENDPATH**/ ?>