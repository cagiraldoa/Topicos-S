<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fragance;

class FraganceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {


        return view('create');
    }


    public function add(Request $request)
    {


        Fragance::create([

            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return back()->withSuccess('Elemento creado satisfactoriamente');
    }

    public function list()
    {

        $fragances = Fragance::all();

        return view('list', compact('fragances'));
    }

    public function show($id)

    {

        $fragance = Fragance::findOrFail($id);


        return view('individual', compact('fragance'));
    }


    public function delete($id)

    {

        Fragance::destroy($id);


        return redirect()->route('list.index');
    }
}
