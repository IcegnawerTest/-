

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Панель управления')); ?></div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <?php echo e(__('Вы вошли в систему!')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div><?php /**PATH B:\OpenServer\domains\praktika-kush-1\resources\views/account.blade.php ENDPATH**/ ?>