@extends('pattern.App')

@section('title', 'Пекарня')

@section('content')

<div class="mainProduct">
    @foreach ($products as $prd)
    <div class="productBlock">
        <div>Наименование:
    
         {{ $prd ->  name}}
        </div>
        <td> 
            <a href="{{ route('detail', ['product' => $prd->id]) }}">Подробнее...</a> 
        </td> 
    </div>
    @endforeach
    </div>    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection('content')