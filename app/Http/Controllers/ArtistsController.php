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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('/artists/create');
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
     * @param  \App\Artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function show(Artists $artists)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function edit(Artists $artists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artists $artists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artists $artists)
    {
        //
    }
}
