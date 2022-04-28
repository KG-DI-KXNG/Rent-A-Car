<?php

namespace App\Http\Controllers;

use App\Models\CarDetail;
use App\Models\Category;
use App\Models\Image;
use App\Models\Vehicles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allVehicle = Vehicles::with(['image', 'category'])->get();
      return \view('dashboard', \compact('allVehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'model' => 'required|string',
            'make' => 'required',
            'color' => 'required',
            'year' => 'required',
            'lic' => 'required',
            'price' => 'required',
            'cat' => 'required',
        ]);


        

       if( Category::where('type', $request->cat)->count()) {
           $c = Category::where('type', $request->cat)->get()->first();
       }else{
            $c = new Category;
            $c->type = $request->cat;
            $c->save();
       }

            $car = new Vehicles();
            $car->make = $request->make;
            $car->model = $request->model;
            $car->year = $request->year;
            $car->capacity = 5;
            $car->price = $request->price;
            $car->currency = 'JMD';
            $car->color = $request->color;
            $car->license_no = $request->lic;
            $car->category_id = $c->id;

            $car->save();
// dd($request->file('files')[0]->getFilename());
            foreach ($request->file('files') as $key=>$file) {
                $filename = $file->getFilename() . '.' . $file->extension(); //Custom Filename
                // Storage::put('public/'.$request->make.'/'.$filename, $file); //Store image
                
                $temp = $file->storeAs('public/'.$request->make.'/', $filename);


                $image = new Image();
                $image->vehicle_id = $car->id;
                $image->image_name = $request->make.'/'.$filename;
                $image->save();
            }

        return \response('Successfully Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        Vehicles::findOrFail($id);
        Vehicles::destroy($id);

        return \response('Deleted');
    }
}
