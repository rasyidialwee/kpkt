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
}
