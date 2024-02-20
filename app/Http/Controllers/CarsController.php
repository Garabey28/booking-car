<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Location;
use Illuminate\Http\Request;


class CarsController extends Controller
{
    public function index(Request $request)
    {
        $model = Cars::where('location_id', $request->input('location_id'))
            ->get();
        return response()->json($model);
    }
    public function store(Request $request)
    {
        $request->validate([
            'model'=>'required',
            'price'=>'required',
            'location_id'=>'required',
            'color'=>'required',
            'transmission'=>'required',
            'image'=>'required',
            'is_active'
        ]);
       Location::created($request->all());
       return response()->json([
           'message'=>'локация добавлена'
       ]);
    }

}
