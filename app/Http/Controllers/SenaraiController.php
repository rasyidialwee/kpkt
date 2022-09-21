<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSenaraiRequest;
use App\Http\Requests\UpdateSenaraiRequest;
use App\Models\Senarai;

class SenaraiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia('Senarai/Index');
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
     * Display the specified resource.
     *
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Http\Response
     */
    public function show(Senarai $senarai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Http\Response
     */
    public function edit(Senarai $senarai)
    {
        //
    }
}
