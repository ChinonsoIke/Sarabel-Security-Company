<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\Session;
use Image;
use Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= Service::all();
        return view('admin.services.index', ['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'service_name'=> 'required|max:255',
            'slug'=> 'required|alpha_dash|max:255|unique:services,slug',
            'image'=> 'required|image',
            'description'=> 'required'
        ]);

        //store in db
        $service= new Service;
        $service->service_name = $request->service_name;
        $service->slug= $request->slug;
        $service->description= $request->description;

        //save image
        if ($request->hasFile('image')) {
            $image= $request->file('image');
            $filename= time() . '.' . $image->getClientOriginalExtension();
            $location= public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            //put img in db
            $service->image= $filename;
        }

        $service->save();

        Session::flash('success', 'Service successfully added');

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $service= Service::where('slug', '=', $slug)->first();
        return view('admin.services.show', ['service'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service= Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
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
        //
    }
}
