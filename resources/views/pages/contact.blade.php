@extends('layout.app', ['categories' => $categories])

@section('column_title', 'Contact')


@section('content')
   
    <div class="container" style="height: 80vh">
        <div class="row">
            <div class="col-8">
                @include('component.small.title-components')
                <h2>Store Address :</h2>
                <p>Jalan Pembangunan Baru Raya</p>    
                <p>Kompleks 1 Address 50</p>
                <p>Jembatan Tiga</p>
                <p>Indonesia</p>

                <h2>Open Daily :</h2>
                <p>08:00 - 22:00</p>

                <h2>Contact :</h2>
                <p>Phone : 089612345678</p>
                <p>Email : happybookstore@gmail.com</p>
            </div>
            @include('component.small.category-components')
        </div>
    </div>

    
@endsection