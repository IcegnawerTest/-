<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Курсы.ru</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<style>
		#hero {
			width: 100%;
			height: 80vh;
			overflow: hidden;
			background-image: url(/images/hero.jpeg);
			background-position: 50% 20%;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body>
	<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = App\View\Components\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3)): ?>
<?php $component = $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3; ?>
<?php unset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3); ?>
<?php endif; ?>
	<main>
		<section id="hero" class="d-flex justify-content-center align-items-center">
			<h1 class="m-3 text-white bg-dark p-1 opacity-75">
				Онлайн курсы - это круто!
			</h1>
		</section>

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

</body>

</html><?php /**PATH B:\OpenServer\domains\praktika-kush-1\resources\views/index.blade.php ENDPATH**/ ?>