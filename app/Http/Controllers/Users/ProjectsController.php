<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use Auth;

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
            'title'=>'required|max:255',
            'slug'=>'required|alpha_dash|min:5|max:255|unique:projects,slug',
            'description'=>'required',
        ]);

        //store in db
        $user= Auth::user();
        $project= new Project;
        $project->title= $request->title;
        $project->slug=$request->slug;
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
        return view('users.projects.show', ["project"=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $categories= Category::all();
    //     $post= Post::find($id);
    //     $tags= Tag::all();
    //     $cats= [];
    //     $tags2= [];
    //     foreach ($categories as $category) {
    //         $cats[$category->id]= $category->name;
    //     }
    //     foreach ($tags as $tag) {
    //         $tags2[$tag->id]= $tag->name;
    //     }
    //     return view('admin.posts.edit', ['categories'=>$cats, 'post'=>$post, 'tags'=>$tags2]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //validate
    //     $post= Post::find($id);

    //     $this->validate($request, [
    //         "title"=>"required|max:255",
    //         'slug'=>"required|alpha_dash|min:5|max:255|unique:posts,slug,$id",
    //         'category_id'=>'required|integer',
    //         "body"=>"required",
    //         'author'=>'required|max:255'
    //     ]);

    //     //save to db
    //     $post= Post::find($id);

    //     $post->title= $request->input('title');
    //     $post->body= Purifier::clean($request->input('body'));
    //     $post->slug= $request->input('slug');
    //     $post->category_id= $request->category_id;
    //     $post->author= $request->author;

    //     if ($request->hasFile('featured_image')) {
    //         $image= $request->file('featured_image');
    //         $filename= time() . '.' . $image->getClientOriginalExtension();
    //         $location= public_path('images/' . $filename);
    //         Image::make($image)->resize(800, 400)->save($location);
    //         $oldFileName= $post->featured_image;

    //         //update the db
    //         $post->featured_image= $filename;

    //         //delete old img
    //         Storage::delete($oldFileName);
    //     };

    //     $post->save();

    //     if (isset($request->tags)) {
    //         $post->tags()->sync($request->tags, true);
    //     } else {
    //         $post->tags()->sync([]);
    //     };

    //     //flash message
    //     Session::flash('success', 'Post successfully updated');

    //     //redirect
    //     return redirect()->route('admin.posts.show', $post->id);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $post= Post::find($id);
    //     $post->tags()->detach();
    //     Storage::delete($post->featured_image);

    //     $post->delete();

    //     Session::flash('success', 'Post deleted successfully');

    //     return redirect()->route('admin.posts.index');
    // }

    // public function getCategory($id) {
    //     $category= Category::find($id);


    //     return view('categories.index', ['category'=>$category]);
    // }

    
}
