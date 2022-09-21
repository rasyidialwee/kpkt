<?php

namespace App\Http\Controllers;

use App\Models\Senarai;
use Illuminate\Http\Request;

class APISenaraiController extends Controller
{
    public function index()
    {
        return Senarai::all();
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $senarai = new Senarai();
        $senarai->name = $request['name'];
        $senarai->user()->associate($user);
        $senarai->save();

        return $senarai;
    }
}
