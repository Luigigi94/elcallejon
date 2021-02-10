<?php

namespace App\Http\Controllers;

use App\Models\Commands;
use Illuminate\Http\Request;

class CommandsController extends Controller
{
    public function index()
    {
        $commands = Commands::all();
        return view('admin.commands.index')->with(compact('commands'));
    }
}
