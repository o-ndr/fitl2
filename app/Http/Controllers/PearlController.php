<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pearl;

class PearlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pearls = Pearl::all();
        // We need to load up a view and pass along this object data:  $pearls = Pearl::all();
        
        // Created a new data array;
        $data = array();
        // Added the $pearls array of objects to the data array using the key 'shonibud'
        $data['shonibud'] = $pearls;

        // Loaded the index view, and passed along the data array
        return view('pearls.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Load up a view, and pass one thing to the view: empty, or new object
        // Create a new object...
        $pearl = new Pearl;
        // ..and pass it through. Create a data array. Add a pearl. Pass that through to the view.
        $data = array();
        $data['shopopalo'] = $pearl;
        // This key, "shopopalo", actually becomes a variable name..
        // ..that' available to blade
        return view('pearls.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // The $request variable will contain all of the form's data
        echo '<pre>';
        echo $request->pearl;
        echo '</pre>';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array();
        // $data['the_id'] = $id;
        // In the view, you access the values in this array...
        // via variables named after these keys.

        $pearl = Pearl::findOrFail($id);
        // name of variable + name of model.
        // This says to the model to talk to database to find...
        //..the pearl object with this id

        // The following prints out the object from db
        // echo '<pre>';
        // print_r($pearl);
        // echo '</pre>';
        // exit;

        // When you retrieve objects from the database using a model, each object...
        // ..is an instance of the model class.
        // You access a class instance’s properties using the arrow syntax ..
        // .. in the view: e.g. {{ $pearl->child_name }}
        // So to print out just a pearl’s text, use the following code: 
        // echo $pearl->pearl;
        // exit;

        // Let's pass this object to the view.
        // We will add the object variable ($pearl) to the data array
        // [[ We don't need to pass the id by the way any longer,...
        // ... so delete this: $data['the_id'] = $id;]]
        // We'll use the key 'pearl' which means that we'll be able to access..
        //.. this pearl object in the view using the $pearl variable.
        $data['pearl'] = $pearl;

        return view('pearls/show', $data);
        // now pass the array to the view,...
        // as a 2nd parameter to the view function
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
        //
    }
}
