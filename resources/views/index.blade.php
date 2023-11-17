@extends('pattern.header')

@section('content')

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
					@foreach ($all_courses as $item)
					<div class="card" style="width: 18rem;">
						<img src="/images/{{$item->image}}" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">{{$item->title}}</h5>
							<p class="card-text">{{$item->description}}</p>
							<p class="card-text">Стоимость курса: <b>{{$item->cost}} ₽ </b></p>
							<p class="card-text">Продолжительность: <b>{{$item->duration}} недель(-и/-я)</b></p>
						</div>
					</div>
					@endforeach
				</div>
                <div>{{ $all_courses->withQueryString()->links('pagination::bootstrap-5') }}</div>
			</div>
		</section>

		<section id="enroll">
			<div class="container">
				<form class="w-50 my-0 mx-auto" action="/enroll" method="POST">
					@csrf
					<h2 class="m-3">Записаться на курс</h2>
					<div class="mb-3">
						<label for="email" class="form-label">Введите свой email:</label>
						<input type="email" class="form-control" id="email" name="email">
						@error('email')
						<div class="alert alert-danger mt-1" role="alert">
						{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label for="name" class="form-label">Введите свой имя:</label>
						<input type="text" class="form-control" id="name" name="name">
						@error('name')
						<div class="alert alert-danger mt-1" role="alert">
						{{$message}}
						</div>
						@enderror
					</div>
					<div class="m-3">
						<label for="name" class="form-label">Выберете курс</label>
						<select class="form-select" name="course">
							@foreach($all_courses as $item)
							<option value="{{$item->id}}">{{$item->title}}</option>
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Записаться</button>
				</form>
			</div>
		</section>
	</main>

    @endsection('content')
