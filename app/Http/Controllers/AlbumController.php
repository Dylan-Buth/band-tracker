<?php

namespace App\Http\Controllers;

use App\Album;
use App\Band;
use App\Http\Requests\CreateAlbum;
use App\Http\Requests\UpdateAlbum;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->input('sort') == 'band') {
            $albums = Album::all()->sortBy(function ($album) {
                return $album->band->name;
            });
        } else {
            $albums = Album::all()->sortBy($request->input('sort'));
        }

        return view('albums.index', compact('albums'));
    }

    public function show($id)
    {
        $album = Album::find($id);

        return view('albums.show', compact('album'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bands = Band::all();
        return view('albums.create', compact('bands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateAlbum  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAlbum $request)
    {
        $album = Album::create($request->all());
        
        return redirect('/album/'. $album->getId());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        $bands = Band::all();

        return view('albums.edit', compact('album', 'bands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAlbum  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlbum $request, $id)
    {
        $album = Album::find($id);

        $album->update($request->all());

        return redirect('/album/'. $album->getId());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Album::destroy($id);

        return redirect('/album');
    }
}
