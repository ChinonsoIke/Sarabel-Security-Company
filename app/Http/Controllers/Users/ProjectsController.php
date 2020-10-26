<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use Auth;
use Str;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $user= Auth::user();
        $projects= Project::orderBy('id', 'desc')->paginate(10);
        return view('users.projects.index', compact('projects', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.projects.create');
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
            'title'=>'required|max:255|unique:projects,title',
            // 'slug'=>'required|alpha_dash|min:5|max:255|unique:projects,slug',
            'description'=>'required',
        ]);

        //store in db
        $user= Auth::user();
        $project= new Project;
        $project->title= $request->title;
        $project->slug=Str::slug($request->title);
        $project->description=$request->description;

        $user->projects()->save($project);

        Session::flash('success', 'Project successfully created!');

        //redirect
        return redirect()->route('users.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project= Project::where('slug', '=', $slug)->first();
        $user= $project->users;
        return view('users.projects.show', compact("project","user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project= Project::find($id);
        return view('users.projects.edit', compact('project'));
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
        //validate
        $project= Project::find($id);
        $this->validate($request, [
            'title'=>'required|max:255',
            //'slug'=>"required|alpha_dash|min:5|max:255|unique:projects,slug,$id",
            'description'=>'required',
        ]);

        //store in db
        $user= Auth::user();
        $project= Project::find($id);
        $project->title= $request->title;
        $project->slug=Str::slug($request->title);
        $project->description=$request->description;

        $user->projects()->save($project);

        Session::flash('success', 'Project successfully updated!');

        //redirect
        return redirect()->route('users.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project= Project::find($id);
        $project->users()->dissociate();

        $project->delete();

        Session::flash('success', 'Project deleted successfully');

        return redirect()->route('users.dashboard');
    }

    public function getCategory($id) {
        $category= Category::find($id);


        return view('categories.index', ['category'=>$category]);
    }

    
}
