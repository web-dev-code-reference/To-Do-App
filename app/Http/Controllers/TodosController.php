<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Session;

class TodosController extends Controller
{
    //


    public function index(){


         $todos=Todo::all();

        return view('todos')->with('todos', $todos );
    }


    public function store(Request $request){
    //    dd($request->all());
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();
        Session::flash('success', 'Your todo was created');
        return redirect()->back();
    }


    public function delete($id){
        //  dd($id);
        $todo = Todo::find($id);
        $todo->delete();
        Session::flash('success', 'Your todo was created');
        return redirect()->back();
    }


    public function update($id){
        // return 'updte';
        // dd($id);
        $todo = Todo::find($id);

        return view('update')->with('todo', $todo);
    }

    public function save(Request $request, $id ){
            $todo = Todo::find($id);
            $todo->todo= $request->todo;
            $todo->save();
            Session::flash('success', 'Your todo was updated');
            return redirect()->route('todo.home');
    }

    public function completed(Request $request, $id){
        $todo = Todo::find($id);
        $todo->completed  = 1;
        $todo->save();
        Session::flash('success', 'Your todo was completed');
        return redirect()->route('todo.home');
    }

}
