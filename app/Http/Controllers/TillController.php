<?php

namespace App\Http\Controllers;

use App\Models\Tills;
use Illuminate\Http\Request;

class TillController extends Controller
{
    public function index()
    {
        $till = Tills::all();
        return view('admin.till.index')->with(compact('till'));
    }
}
