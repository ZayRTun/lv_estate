<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $properties = Property::all();

        return view('admin.index', compact('properties'));
    }

    public function create()
    {
    	$prop = new Property();
        return view('admin.create', compact('prop'));
    }

    public function store()
    {
    	// If there is image in the request
        $this->validate(request(), [
//            'first_name' => 'required|min:3',
//            'last_name' => 'required|min:3',
//            'contact' => 'required',
//	        'township' => 'required',
//	        'property_images.*' => 'image|nullable|max:2000'
	    ]);

//        dd(request()->file());

	    if (request()->has('property_images')) {

            $property = Property::create(request()->except('property_images'));

		    foreach (request('property_images') as $img) {
			    // Gets filename with extension
			    $imgNameWithExt =  $img->getClientOriginalName();
			    // Gets just filename
			    $imgName = pathinfo($imgNameWithExt, PATHINFO_FILENAME);
			    // Gets just extension
			    $extension = $img->getClientOriginalExtension();
			    // File name to store
			    $fileNameToStore = $imgName .'_'.time().'.'.$extension;

			    // Upload Image
			    $img->storeAs('public/uploads', $fileNameToStore);

			    $property->images()->create([
			    	'property_images' => $fileNameToStore
			    ]);
		    }

	    } else {
	    	$fileNameToStore = 'noimage.jpg';

		    $property = Property::create(request()->all());

		    $property->images()->create([
			    'property_images' => $fileNameToStore
		    ]);
	    }

        return redirect('/admin');
    }

    public function show(Property $property)
    {
        return view('admin.show', compact('property'));
    }

    public function edit(Property $property)
    {
        return  view('admin.edit', compact('property'));
    }

    public function update($id)
    {
        Property::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect('/admin');
    }

    public function delete(Property $property)
    {
        return view('admin.delete', compact('property'));
    }

    public function destroy($id)
    {
        Property::where('id', $id)->delete();

        return redirect('/admin');
    }

}
