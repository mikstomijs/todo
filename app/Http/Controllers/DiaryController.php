<?php

namespace App\Http\Controllers;
use App\Models\diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index() {
        $diaries = diary::all();
        return view("diaries.index", compact("diaries"));
    }

      public function show(diary $diary) {
        return view("diaries.show", compact("diary"));
    }


        public function create() {
        return view("diaries.create");
    }

      public function store (Request $request) {
       $validated = $request->validate([
            "title" => ["required", "max:100"],
            "body" => ["required"],
            "date" => ["required"]
        ]);
     
        diary::create([
  "title" => $validated["title"],
  "body" => $validated["body"],
  "date" => $validated["date"]
]);
    return redirect("/diaries");
    }


    public function edit(diary $diary) {
        return view("diaries.edit", compact('diary'));
    }


    public function update(Request $request, diary $diary) {
         $validated = $request->validate([
            "title" => ["required", "max:100"],
            "body" => ["required"],
            "date" => ["required"]
        ]);

        $diary->title = $validated["title"];
        $diary->body = $validated["body"];
        $diary->date = $validated["date"];

        $diary->save();

        return redirect("/diaries/$diary->id");
    }

    public function destroy(diary $diary) {
        $diary->delete();
        return redirect("/todos");
    }



}

