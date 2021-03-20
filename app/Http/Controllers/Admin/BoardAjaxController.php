<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Board;
use Illuminate\Http\Request;

class BoardAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $data = Board::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('boardAjax'/*, compact('boards')*/);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Board::updateOrCreate(['id' => $request->id],
            ['name' => $request->name, 'num_board' => $request->detail]);
        return response()->json(['success' => 'Product saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Admin\Board $board
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $board = Board::find($id);
        return response()->json($board);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Board $board
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Board::find($id)->delete();
        return response()->json(['success' => 'Product deleted successfully.']);
    }
}
