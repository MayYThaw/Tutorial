<?php

namespace App\Http\Controllers;

use App\Artists;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $artists = Artists::paginate(5);
        return view("artists/list",compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("artists/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artist = new Artists;
        $artist->name = $request->name;
        $artist->gender = $request->gender;
        $artist->nativetown = $request->nativetown;
        $artist->save();
        return redirect("artists");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artists $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artists $artist)
    {
        return view("artists/edit",compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artists $artist)
    {
        $artist = Artists::find($artist->id);
        $artist->name = $request->name;
        $artist->gender = $request->gender;
        $artist->nativetown = $request->nativetown;
        $artist->save();
        return redirect("artists");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artists $artist)
    {
        Artists::destroy($artist->id);
        return redirect("artists");
    }
}
