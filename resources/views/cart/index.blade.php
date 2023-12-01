@extends('pattern.app')

@section('content')
@if(count($cartItems) > 0)
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <!-- Другие необходимые заголовки таблицы -->
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                        <td><img src="{{ $item->product->img }}" alt="<Картинки нет>"></td>
                        
                        <td>{{ $item->product->name }}</td>
                        
                        <td>{{ $item->product->description }}</td>
                        <td>{{ $item->quantity }}здесь кнопка количества</td>
                        <td>{{ $item->quantity }}Подробнее кнопка</td>
                        <td>{{ $item->quantity }}кнопка удалить</td>
                        <!-- Другие ячейки таблицы с информацией о продукте -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Your cart is empty.</p>
    @endif

    <a href="{{ route('index') }}">Continue Shopping</a> <!-- Подставьте ваш маршрут продолжения покупок -->
@endsection