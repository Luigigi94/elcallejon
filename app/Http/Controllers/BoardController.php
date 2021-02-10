<?php

namespace App\Http\Controllers;

use App\Models\Board;
use http\Exception\InvalidArgumentException;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

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
}
