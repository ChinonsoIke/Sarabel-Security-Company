<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;
use Storage;
use Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $posts= Post::orderBy('id', 'desc')->paginate(10);
        return view('admin.posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
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
            'body'=>'required',
            'featured_image'=>'sometimes|image'
        ]);

        //store in db
        $post= new Post;
        $post->title= $request->title;
        $post->slug=Str::slug($request->title);
        $post->body=$request->body;

        //save our image
        if ($request->hasFile('featured_image')) {
            $image= $request->file('featured_image');
            $filename= time() . '.' . $image->getClientOriginalExtension();
            $location= public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            //put img in db
            $post->featured_image= $filename;
        };

        $post->save();

        Session::flash('success', 'Blog post successfully created!');

        //redirect
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('admin.posts.show', ["post"=>$post]);
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
