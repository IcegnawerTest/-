<header>
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container">
				<a class="navbar-brand" href="#">Амогус</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">О нас</a>
						</li>
                        <?php if(auth()->guard()->guest()): ?>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?php echo e(route('signup')); ?>">Регистрация</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?php echo e(route('signin')); ?>">Вход</a>
						</li>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                        <form action="<?php echo e(route('signout')); ?>" method="post" class="form-inline">
                            <?php echo csrf_field(); ?>
                            <input type="submit" class="btn btn-danger" value="Выход">
                        </form>
                        <?php endif; ?>
						<li class="nav-item">
							<a class="nav-link" href="#">Курсы</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Записаться</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
<?php /**PATH C:\OpenServer\domains\praktikaUld\resources\views/components/header.blade.php ENDPATH**/ ?>