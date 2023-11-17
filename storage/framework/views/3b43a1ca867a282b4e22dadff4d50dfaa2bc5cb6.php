<?php $__env->startSection('content'); ?>

		<section id="about">
			<div class="container">
				<h2 class="m-3">О нас</h2>
				<div class="row mb-3">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Преимущество 1</h5>
								<p class="card-text">Описание преимуществ.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Преимущество 2</h5>
								<p class="card-text">Описание преимуществ</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Преимущество 3</h5>
								<p class="card-text">Описание преимуществ.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Преимущество 4</h5>
								<p class="card-text">Описание преимуществ</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="courses">
			<div class="container">
				<h2 class="m-3"> Наши курсы</h2>
				<div class="d-flex              ">
					<?php $__currentLoopData = $all_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="card" style="width: 18rem;">
						<img src="/images/<?php echo e($item->image); ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?php echo e($item->title); ?></h5>
							<p class="card-text"><?php echo e($item->description); ?></p>
							<p class="card-text">Стоимость курса: <b><?php echo e($item->cost); ?> ₽ </b></p>
							<p class="card-text">Продолжительность: <b><?php echo e($item->duration); ?> недель(-и/-я)</b></p>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
                <div><?php echo e($all_courses->withQueryString()->links('pagination::bootstrap-5')); ?></div>
			</div>
		</section>

		<section id="enroll">
			<div class="container">
				<form class="w-50 my-0 mx-auto" action="/enroll" method="POST">
					<?php echo csrf_field(); ?>
					<h2 class="m-3">Записаться на курс</h2>
					<div class="mb-3">
						<label for="email" class="form-label">Введите свой email:</label>
						<input type="email" class="form-control" id="email" name="email">
						<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger mt-1" role="alert">
						<?php echo e($message); ?>

						</div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
					<div class="mb-3">
						<label for="name" class="form-label">Введите свой имя:</label>
						<input type="text" class="form-control" id="name" name="name">
						<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger mt-1" role="alert">
						<?php echo e($message); ?>

						</div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
					<div class="m-3">
						<label for="name" class="form-label">Выберете курс</label>
						<select class="form-select" name="course">
							<?php $__currentLoopData = $all_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Записаться</button>
				</form>
			</div>
		</section>
	</main>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('pattern.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\praktikaUld\resources\views/index.blade.php ENDPATH**/ ?>