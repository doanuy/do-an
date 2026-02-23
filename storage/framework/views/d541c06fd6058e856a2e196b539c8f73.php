

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between mb-3">
    <h2>Danh sách bệnh</h2>
    <a href="<?php echo e(route('diseases.create')); ?>" class="btn btn-primary">+ Thêm bệnh</a>
</div>


<form method="GET" action="<?php echo e(route('diseases.index')); ?>" class="mb-3">
    <div class="input-group">
        <input type="text" 
               name="search" 
               class="form-control"
               placeholder="Tìm theo tên bệnh..."
               value="<?php echo e(request('search')); ?>">
        <button class="btn btn-success">Tìm</button>
    </div>
</form>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>STT</th>
            <th>Tên bệnh</th>
            <th width="200">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $diseases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disease): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            
            <td><?php echo e($diseases->firstItem() + $loop->index); ?></td>
            <td><?php echo e($disease->name); ?></td>
            <td>
                <a href="<?php echo e(route('diseases.show', $disease)); ?>" class="btn btn-info btn-sm">Xem</a>
                <a href="<?php echo e(route('diseases.edit', $disease)); ?>" class="btn btn-warning btn-sm">Sửa</a>
                <form action="<?php echo e(route('diseases.destroy', $disease)); ?>" 
                      method="POST" 
                      style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Bạn chắc chắn muốn xóa?')">
                        Xóa
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="3" class="text-center">Không tìm thấy bệnh nào</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>


<div class="mt-3">
    <?php echo e($diseases->links()); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH H:\web\laragon\www\web-ai-lab-1\resources\views/diseases/index.blade.php ENDPATH**/ ?>