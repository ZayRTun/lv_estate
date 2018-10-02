<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function store()
    {
//        dd(request());
        Property::create(request([
            'first_name',
            'last_name',
            'contact',
            'property_type',
            'property_for',
            'developer',
            'bed_room',
            'bath_room',
            'air_conditioning',
            'condition',
            'width',
            'length',
            'floor',
            'address',
            'township',
            'state',
            'price',
            'description'
            ]));

        return redirect('/admin/index');
    }
}
