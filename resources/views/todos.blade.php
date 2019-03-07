


@extends('layouts')

@section('content')
    <br>

    <form action="create/todo" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control" name="todo" ><br>
    </form>



    @foreach ($todos as $todo)
        <p>ID:{{ $todo->id }}  To Do:{{ $todo->todo }}</p>
        <hr>
    @endforeach
@stop
