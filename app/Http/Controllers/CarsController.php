<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    public function index()
    {
        $cars = Cars::all();
        return view('cars.index',compact('cars'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show( $id)
    {
        $car = Cars::find($id);
        return view('cars/show',compact('car'));
    }

    public function edit(Cars $cars)
    {
        //
    }

    public function update(Request $request, Cars $cars)
    {
        //
    }

    public function destroy(Cars $cars)
    {
        //
    }
}
