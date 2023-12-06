<?php $__env->startSection('content'); ?>

<?php if(session('selectedCategory')): ?>
    <p>Выбрать категорию <?php echo e(session('selectedCategory')->name); ?></p>
<?php endif; ?>

<form method="post" action="<?php echo e(route('filter-courses')); ?>">
    <?php echo csrf_field(); ?>

    <label for="categorySelect">Выбрать категорию:</label>
    <select id="category_id" name="category_id">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <button type="submit">Выбрать</button>
</form>

        <?php if(isset($courses)): ?>
        <h3>Выбранный курс: "<?php echo e($category->title); ?>"</h2>
        <ul>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($course->title); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
	</main>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('pattern.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\praktikaUld\resources\views/categoryUser.blade.php ENDPATH**/ ?>