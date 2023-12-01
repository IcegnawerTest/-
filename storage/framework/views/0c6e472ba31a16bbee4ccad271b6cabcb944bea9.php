        

        <?php $__env->startSection('title', $product->title); ?>
        <?php $__env->startSection('content'); ?>
        <div class="mainDetail">
        <h2>
            <?php echo e($product->name); ?>

        </h2>
        <p class="img">
            <img src="<?php echo e($product->type); ?>" alt="Изображение отсутствует">
        </p>
        <p class="description">
            <?php echo e($product->description); ?>

        </p>
        <p class="coordinates">
           Координаты объекта: <?php echo e($product->composition); ?>

        </p>
        <p>
            <p class="name">
                Автор: <?php echo e($product->user->name); ?>

            </p>
            <a href="<?php echo e(route('products')); ?>">
                Вернуться к списку    
            </a>    
        </p> 
        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('pattern.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\BakeryUld\resources\views/detail.blade.php ENDPATH**/ ?>