<?php

namespace App\Http\Controllers\Admin;

use App\Models\Commands;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommandsController extends Controller
{
    public function index()
    {
        $commands = Commands::all();
        return view('admin.commands.index')->with(compact('commands'));
    }
}
