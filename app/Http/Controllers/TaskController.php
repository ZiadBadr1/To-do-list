<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
       $tasks = DB::table("tasks")->get();
        return view("tasks.index",compact("tasks"));
    }

    public function add()
    {
        return view("tasks.add");
    }
    public function store(Request $request)
    {
       DB::table("tasks")->insert(
           [
               'title'=> $request->title,
               'comment'=> $request->comment,
           ]
       );
       return redirect("tasks");
    }
    public function edit($id)
    {
        $post = DB::table('tasks')->where('id',$id)->first();
        return view("tasks.edit",compact("post"));
    }

    public function update(Request $request,$id)
    {
        DB::table("tasks")->where('id',$id)->update(
            [
                'title'=> $request->title,
                'comment'=> $request->comment,
            ]
        );
        return redirect('tasks');
    }

    public function delete($id)
    {
        DB::table('tasks')->where('id',$id)->delete();
        return redirect('tasks');

    }
    public function deleteAll()
    {
    DB::table('tasks')->delete();
    return redirect('tasks');

    }
    public function deleteWithTruncate()
    {
        DB::table('tasks')->truncate();
        return redirect('tasks');
    }

}
