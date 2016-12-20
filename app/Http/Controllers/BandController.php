<?php

namespace App\Http\Controllers;

use App\Band;
use App\Http\Requests\CreateBand;
use App\Http\Requests\UpdateBand;
use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bands = Band::all()->sortBy($request->input('sort'));

        return view('bands.index', compact('bands'));
    }

    public function show($id)
    {
        $band = Band::find($id);
        $albums = $band->albums;

        return view('bands.show', compact('band', 'albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateBand  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBand $request)
    {
        $band = Band::create($request->all());
        
        return redirect('/band/'. $band->getId());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $band = Band::find($id);

        return view('bands.edit', compact('band'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateBand  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBand $request, $id)
    {
        $band = Band::find($id);

        $band->update($request->all());

        return redirect('/band/'. $band->getId());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Band::destroy($id);

        return redirect('/');
    }
}
