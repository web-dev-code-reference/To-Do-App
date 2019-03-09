@extends('layouts')

@section('content')
   

    <form action="{{route('todo.save',['id'=>$todo->id])}}" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control" name="todo" value=" {{$todo->todo}}" > <br>
    </form>



@stop()