<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameVhModel;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['games' => GameVhModel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'game_name' => 'required',
            'release_date' => 'required',
            'developer' => 'required', 
            'publisher',
            'space_required' => 'required',
            'created_at',
            'updated_at'

        ]);
      
        Product::create($request->all());
       
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');

        DB::insert('insert into games(game_name, release_date, developer, publisher, space_required, created_at, updated_at) values(?, ?, ?, ?, ?, ?, ?)', []);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = GameVhModel::find($id);
        return view('show', ['games' => $game]);
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
