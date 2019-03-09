


@extends('layouts')

@section('content')
    <br>

    <form action="create/todo" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control" name="todo" ><br>
    </form>



    @foreach ($todos as $todo)
        <p>ID:{{ $todo->id }}  To Do:{{ $todo->todo }} 
            <a href="{{route('todo.update', ['id'=>$todo->id])}}"  class="btn btn-info">update</button></a>
            <a href="{{route('todo.delete', ['id'=>$todo->id])}}"  class="btn btn-danger">X</button></a>
            @if(!$todo->completed)
                <a href="{{route('todo.completed',['id'=>$todo->id])}}"  class="btn btn-info">Mark as completed</button></a>
            @endif()
        <p>
        <hr>
    @endforeach
@stop
