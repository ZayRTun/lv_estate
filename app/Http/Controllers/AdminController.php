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
        return view('admin.create');
    }

    public function store()
    {
        Property::create(request()->all());

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
