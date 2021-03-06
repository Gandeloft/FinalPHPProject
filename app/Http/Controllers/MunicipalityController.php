<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipalities = \App\Municipality::with('city')->paginate();
        return view('municipalities/index', ['municipalities' => $municipalities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $cities = \App\City::all();
        return view('municipalities/create', ['cities' => $cities]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'municipality_name' => 'required|max:255',
            'city_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->action('MunicipalityController@create')
                ->withErrors($validator);
        }


        $data = $request->input();
        \App\Municipality::create($data);
        return redirect()->action('MunicipalityController@index');
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
        \App\Municipality::destroy($id);
    return redirect()->action('MunicipalityController@index');
    }
}
