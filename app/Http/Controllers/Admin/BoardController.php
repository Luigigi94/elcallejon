<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\Tills;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        $board = Board::paginate(6);
        return view('admin.boards.index')->with(compact('board'));
    }

    public function create()
    {
        return view('admin.boards.create');
    }

    public function store(Request $request)
    {
        $board = new Board();
        $board->num_board = $request->input('num_board');
        $board->place = $request->input('place');
        $board->save();
        return redirect('/admin/boards');
    }

    public function edit($id)
    {
        $board = Board::find($id);
        return view('admin.boards.edit')->with(compact('board'));
    }

    public function update(Request $request, $id)
    {
        $board = Board::find($id);

        $board->num_board = $request->input('num_board');
        $board->place = $request->input('place');
        $board->save();

        return redirect('/admin/boards');
    }

    public function destroy($id)
    {
        $board = Board::find($id);
        $board->delete();
        return back();
    }

    public function occupy(Board $board, Tills $tills)
    {
        $board->status = 1;
        $tills->command_id = 1;
        $tills->save();
        return back();
    }

    public function setfree(Board $board)
    {
        $board->status = 0;
        $board->save();
        return back();
    }
}
