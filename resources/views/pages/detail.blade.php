@extends('layout.app', ['categories' => $categories])

@section('column_title', 'Book Detail')


@section('content')
   
    <div class="container" style="height: 80vh">
        <div class="row">
            <div class="col-8">
                @include('component.small.title-components')
                <p>Title : {{$detail->book->title}}</p>    
                <p>Author : {{$detail->author}}</p> 
                <p>Publisher : {{$detail->publisher}}</p>
                <p>Year : {{$detail->year}}</p>
                <p>Description :</p>
                <p>{{$detail->description}}</p>
            </div>
            @include('component.small.category-components')
        </div>
    </div>

    
@endsection