<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Personales;
use Illuminate\Http\Request;

class PersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personales = Personales::latest()->get();

        return view('personales.index',compact('personales'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personales  $personales
     * @return \Illuminate\Http\Response
     */
    public function show(Personales $personales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personales  $personales
     * @return \Illuminate\Http\Response
     */
    public function edit(Personales $personales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personales  $personales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personales $personales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personales  $personales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personales $personales)
    {
        //
    }
}
