<?php

namespace App\Http\Controllers;
use App\Models\ToDo;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Gate;
class ToDoController extends Controller
{
   public function index() {
        $id = auth()->user()->id;
        $todos = User::find($id)->todos;

        return view("todos.index", compact("todos"));
    }

    public function show(ToDo $todo) {


        if(!Gate::allows('interact-todo', $todo)) {
            return redirect('/');
        } else
        return view("todos.show", compact("todo"));
    }

    public function create() {
        return view("todos.create");
    }

    public function store (Request $request) {
       $validated = $request->validate([
            "content" => ["required", "max:255"],
            "priority" => ["required"]
        ]);

        ToDo::create([
  "content" => $validated["content"],
  "completed" => false,
  "user_id" => auth()->id(),
  "priority" => $validated["priority"]
]);
    return redirect("/todos");
    }


    public function edit(ToDo $todo) {
         if(!Gate::allows('interact-todo', $todo)) {
            return redirect('/');
        } else
        return view("todos.edit", compact("todo"));
    }

    public function update(Request $request, ToDo $todo) {
         if(!Gate::allows('interact-todo', $todo)) {
            return redirect('/');
        } else
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "completed" => ["boolean"]
        ]);

        $todo->content = $validated["content"];
        $todo->completed = $validated["completed"];

        $todo->save();

        return redirect("/todos/$todo->id");
    }


    public function destroy(ToDo $todo) {
         if(!Gate::allows('interact-todo', $todo)) {
            return redirect('/');
        } else
        $todo->delete();
        return redirect("/todos");
    }

}
