@extends('layouts.app')


@section('content')


    <h1>Books</h1>
    <a href="/books/create" class="btn btn-primary">Create Book</a>
    <br>
    <br>

            Sort:
            <a href="{{route('books.index', ['BookID' => request('BookID'), 'sort' => 'asc'])}}">Ascending</a>
            <a href="{{route('books.index', ['BookID' => request('BookID'), 'sort' => 'desc'])}}">Descending</a>
    
   
    <br>
    @if(count($books) > 0)

        @foreach($books as $book)
              <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                  
                    <h3> <a href="/books/{{$book->BookID}}">{{$book->Title}}</a></h3>

                </div>
                </div>
                </div>
        @endforeach
    @else
    <p>No Books Found.</p>
    @endif

@endsection


    
