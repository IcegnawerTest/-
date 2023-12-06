@extends('pattern.header')

@section('content')

@if(session('selectedCategory'))
    <p>Выбрать категорию {{ session('selectedCategory')->name }}</p>
@endif

<form method="post" action="{{ route('filter-courses') }}">
    @csrf

    <label for="categorySelect">Выбрать категорию:</label>
    <select id="category_id" name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select>

    <button type="submit">Выбрать</button>
</form>

        @if(isset($courses))
        <h3>Выбранный курс: "{{ $category->title }}"</h2>
        <ul>
            @foreach ($courses as $course)
                <li>{{ $course->title }}</li>
            @endforeach
        </ul>
        @endif
	</main>

    @endsection('content')
