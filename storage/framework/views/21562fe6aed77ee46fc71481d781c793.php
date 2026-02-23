<!DOCTYPE html>
<html>
<head>
    <title>Admin - Disease Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
        <h4 class="text-center mb-4">Admin Panel</h4>

        <ul class="nav flex-column">

    <li class="nav-item mb-2">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link text-white">
            📊 Dashboard
        </a>
    </li>

    <li class="nav-item mb-2">
        <a href="<?php echo e(route('diseases.index')); ?>" class="nav-link text-white">
            🦠 Quản lý bệnh
        </a>
    </li>

</ul>
    </div>

    <!-- Main Content -->
    <div class="flex-fill p-4">

        <!-- Alert Success -->
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

</div>

</body>
</html><?php /**PATH H:\web\laragon\www\web-ai-lab-1\resources\views/layouts/admin.blade.php ENDPATH**/ ?>