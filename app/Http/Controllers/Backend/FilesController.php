<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\File;
use App\Project;
use Storage;
use Illuminate\Support\Facades\Session;

class FilesController extends Controller
{

    public function __construct() {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files= File::orderBy('id', 'desc')->paginate(20);
        return view ('admin.files.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $project_id= $id;
        return view ('admin.files.create', compact('project_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'description'=>'required',
            'file'=>'required'
        ]);

        $project= Project::find($request->project_id);
        $file= new File;
        $file->title= $request->title;
        $file->description= $request->description;
        
        if ($request->hasFile('file')) {
            $new_file= $request->file('file');
            $filename= $request->title . '.' . $new_file->getClientOriginalExtension();
            // Storage::put($filename, file_get_contents($new_file)->getRealPath());
            $path= $new_file->storeAs('files', $filename);

            $file->file= $path;
        }

        $project->files()->save($file);

        Session::flash('success', 'File successfully uploaded!');

        //redirect
        return redirect()->route('backend.projects.show', $project->slug);
    }

    public function downloadFile($id) {
        $file= File::find($id);
        
        return Storage::download($file->file);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file= File::find($id);
        $file->project()->dissociate();
        // Storage::delete($file);
        $file->delete();

        Session::flash('success', 'File deleted successfully');
        return redirect()->back();
    }
}
