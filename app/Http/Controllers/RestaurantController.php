<?php

namespace App\Http\Controllers;

use App\restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usrs = User::all();
        foreach ($usrs as  $usr) {
           $usuario  = $usr->id;
        }
        $rest = restaurant::all()->where('user_id', $usuario);
        return $rest;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request)) {
        if($request->hasFile('file')){
            $file = $request->file('file');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path()."/imagenes", $name);
        }
        $users = user::all();
        foreach ($users as $user) {
        $user_id = $user->id;
        }

        $restaurant = new restaurant();
        $restaurant->user_id = $user_id;
        $restaurant->nombre = $request->input('nombre');
        $restaurant->descripcion = $request->input('descripcion');
        $restaurant->imagenRuta = $name;
        $restaurant->save();
        }
        return redirect()->route('home');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(restaurant $restaurant)
    {
          
        $restaurant = restaurant::findOrFail($restaurant)->destroy();
        return $restaurant;
    }
}
