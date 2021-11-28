@extends('layout.app', ['categories' => $categories])

@section('content')
    <div class="container" style="height: 80vh">
        <div class="row">
            <div class="col-8">
                @include('component.small.title-components')
                
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                       
                      </tr>
                    </thead>
                    
                    <tbody>
                        @if ($books->isEmpty())
                            <tr>
                                <td class="bg-warning">No Data</td>
                                <td class="bg-warning"></td>
                            </tr>
                           
                        @else
                            @foreach ($books as $book)
                            <tr>
                                <td><a href="/detail/{{$book->id}}">{{$book->title}}</a></td>
                                <td>{{$book->detail->author}}</td>
                            </tr>
                            @endforeach
                        @endif
                       
                       
                    </tbody>
                  </table>
                  <div class="d-flex flex-row-reverse">
                    {{$books->links()}}  
                  </div>
                  
                            
            </div>
            @include('component.small.category-components')
        </div>
    </div>
@endsection