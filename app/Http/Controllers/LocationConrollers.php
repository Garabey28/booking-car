<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocation;
use App\Models\Location;

class LocationConrollers extends Controller
{
    public function index()
    {
        $model = Location::all();
        return response()->json($model);
    }
    public function store(StoreLocation $request)
    {
        Location::created($request->all());
        return response()->json('готово');

    }



}
