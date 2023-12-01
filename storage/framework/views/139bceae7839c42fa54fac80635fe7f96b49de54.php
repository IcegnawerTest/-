

<?php $__env->startSection('content'); ?>
<?php if(count($cartItems) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <!-- Другие необходимые заголовки таблицы -->
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img src="<?php echo e($item->product->img); ?>" alt="<Картинки нет>"></td>
                        
                        <td><?php echo e($item->product->name); ?></td>
                        
                        <td><?php echo e($item->product->description); ?></td>
                        <td><?php echo e($item->quantity); ?>здесь кнопка количества</td>
                        <td><?php echo e($item->quantity); ?>Подробнее кнопка</td>
                        <td><?php echo e($item->quantity); ?>кнопка удалить</td>
                        <!-- Другие ячейки таблицы с информацией о продукте -->
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>

    <a href="<?php echo e(route('index')); ?>">Continue Shopping</a> <!-- Подставьте ваш маршрут продолжения покупок -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pattern.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\BakeryUld\resources\views/cart/index.blade.php ENDPATH**/ ?>