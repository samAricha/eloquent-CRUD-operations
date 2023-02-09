<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    public function index()
    {

        $cars = Car::all();
        //dd($cars);
        //$cars = Car::where('name', '=', 'Mercedes')->get();
       /* $cars = Car::Chunk(2, function ($cars){
            foreach ($cars as $car){
                print_r($car);
            }

        }); */

        return view('cars.index',
        ['cars' => $cars]);
    }


    public function create()
    {

        return view('cars.create');

    }

    public function store(Request $request)
    {
//        $car = new Car;
//        $car->name = $request->input('name');
//        $car->founded = $request->input('founded');
//        $car->description = $request->input('description');
//
//        $car->save();

        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);

        return redirect('/cars');
    }


    public function show($id)
    {


    }


    public function edit($id)
    {
        $car = Car::find($id)->first();
        //dd($car);
        return view('cars.edit')->with('car', $car);
    }


    public function update(Request $request, $id)
    {
        $car = Car::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);

        return redirect('/cars');
    }

    public function destroy(Car $car)
    {
        //dd($id);
        //$car = Car::find($id);//this is one way of doing it using id as a parameter in the function

        $car->delete();

        return redirect('/cars');

    }
}
