<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use App\Project;
use Illuminate\Support\Facades\Session;
use Str;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks= task::orderBy('id', 'asc')->paginate(20);
        return view('admin.tasks.index', ['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $project_id= $id;
        return view('admin.tasks.create', compact('project_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'title'=> 'required|max:255',
            'description'=> 'required'
        ]);

        //store in db
        $project= Project::find($request->project_id);
        $task= new Task;
        $task->title = $request->title;
        $task->slug=Str::slug($request->title);
        $task->description= $request->description;
        $task->project_id= $request->project_id;
        $task->status= $request->status;

        $task->save();

        $project->tasks()->save($task);

        Session::flash('success', 'Task successfully created!');

        //redirect
        return redirect()->route('backend.projects.show', $project->slug);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task= Task::find($id);
        return view('admin.tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task= Task::find($id);
        $task->project()->dissociate();
        $task->delete();

        Session::flash('success', 'Task deleted successfully');
        return redirect()->back();
    }
}
