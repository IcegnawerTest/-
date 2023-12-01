        @extends('pattern.app')

        @section('title', $product->title)
        @section('content')
        <div class="mainDetail">
        <h2>
            {{ $product->name }}
        </h2>
        <p class="img">
            <img src="{{ $product->type }}" alt="Изображение отсутствует">
        </p>
        <p class="description">
            {{ $product->description }}
        </p>
        <p class="coordinates">
           Координаты объекта: {{ $product->composition }}
        </p>
        <p>
            <p class="name">
                Автор: {{ $product->user->name }}
            </p>
            <a href="{{ route('products') }}">
                Вернуться к списку
            </a>
        </p>
        </div>
        @endsection('content')


