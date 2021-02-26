<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tills;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TillController extends Controller
{
    public function index()
    {
        $till = Tills::all();
        return view('admin.till.index')->with(compact('till'));
    }
}
