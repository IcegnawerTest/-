<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Курсы.ru</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<style>
		a>img {
			width: 30px;
		}
	</style>
</head>

<body>
	<?php if (isset($component)) { $__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757 = $component; } ?>
<?php $component = App\View\Components\Admin\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757)): ?>
<?php $component = $__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757; ?>
<?php unset($__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757); ?>
<?php endif; ?>
	<main>
		<section>
			<div class="container">
				<h2 class="m-3">Список заявок</h2>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Email</th>
							<th scope="col">Имя клиента</th>
							<th scope="col">Курс</th>
							<th scope="col">Дата заявки</th>
							<th scope="col">Статус заявки</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<th score="row<?php echo e($item->id); ?>"></th>
							<td><?php echo e($item->email); ?></td>
							<td><?php echo e($item->name); ?></td>
							<td><?php echo e($item->course_id); ?></td>
							<td><?php echo e($item->created_at); ?></td>
							<td><?php if($item->is_confirm === 1): ?>
								<?php echo e('Подтверждена'); ?>

								<?php else: ?>
								<?php echo e('Не подтверждена'); ?>

								<?php endif; ?>
							</td>
							<td>
								<a href="application/<?php echo e($item->id); ?>/confirm">
									<img src="/images/free-icon-check-1828640.png" alt="Подтвердить">
								</a>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</section>
		<section id="enroll">
			<div class="container">
				<form class="w-50 my-0 mx-auto" action="/cours" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<h2 class="m-3">Создание курса</h2>
					<div class="mb-3">
						<label for="title" class="form-label">Название курса:</label>
						<input type="text" class="form-control" id="title" name="title">
						<?php $__errorArgs = ['title'];
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
						<label for="description" class="form-label">Описание курса:</label>
						<input type="text" class="form-control" id="description" name="description">
						<?php $__errorArgs = ['description'];
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
						<label for="cost" class="form-label">Цена:</label>
						<input type="number" class="form-control" id="cost" name="cost">
						<?php $__errorArgs = ['cost'];
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
						<label for="duration" class="form-label">Продолжительность(в неделях):</label>
						<input type="number" class="form-control" id="duration" name="duration">
						<?php $__errorArgs = ['duration'];
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
						<label for="image" class="form-label">Изображение курса:</label>
						<input type="file" class="form-control" id="image" name="image">
					</div>
					<div class="m-3">
						<label for="name" class="form-label">Выберете категорию курса</label>
						<select class="form-select" name="category">
							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						<?php $__errorArgs = ['category'];
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
						<br>
				<button type="submit" class="btn btn-primary">Создать курс</button>
				</form>
			</div>
		</section>
		<section id="enroll">
			<div class="container">
				<form class="w-50 my-0 mx-auto" action="/category" method="POST">
					<?php echo csrf_field(); ?>
					<h2 class="m-3">Создание категории курса</h2>
					<div class="mb-3">
						<label for="title-course" class="form-label">Название категории курса:</label>
						<input type="text" class="form-control" id="title-course" name="title-course">
						<?php $__errorArgs = ['title-course'];
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
						<br>
				<button type="submit" class="btn btn-primary">Создать категорию</button>
				</form>
			</div>
		</section>
	</main>
</body>

</html><?php /**PATH B:\OpenServer\domains\praktika-kush-1\resources\views/admin/admin.blade.php ENDPATH**/ ?>