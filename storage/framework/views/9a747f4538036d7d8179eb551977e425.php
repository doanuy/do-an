

<?php $__env->startSection('title', 'Thông tin sinh viên'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-lg text-center">
            <div class="card-body">

                <!-- Avatar -->
                <img src="https://i.imgur.com/0y0y0y0.png" class="avatar mb-3" alt="Avatar">

                <h4 class="fw-bold">Nguyễn Doãn Uy</h4>
                <p class="text-muted">Sinh viên Công nghệ thông tin</p>

                <hr>

                <p><strong>MSSV:</strong> XXXXXXXX</p>
                <p><strong>Môn học:</strong> Lập trình Web – Laravel</p>
                <p><strong>Email:</strong> uy@example.com</p>

                <a href="#" class="btn btn-primary mt-3">
                    Liên hệ
                </a>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH H:\web\laragon\www\web-ai-lab-1\resources\views/profile.blade.php ENDPATH**/ ?>