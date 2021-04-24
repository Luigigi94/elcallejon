<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tills;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TillController extends Controller
{
    public function index()
    {
        $till = DB::table('tills')
            ->select('total')
            ->orderBy('id','desc')
            ->first();

        return view('admin.till.index')->with(compact('till'));
    }

    public function create()
    {
        //Aquí habrá código en un futuro probablemente
    }

    public function store(Request $request)
    {
        Tills::create([
            'total' => $request->total,
            'user_id' => auth()->id(),
        ]);

        return redirect('/admin/tills');
    }

    public function edit(Tills $tills, Request $request)
    {

    }
    public function update(Tills $tills, Request $request)
    {

    }

    public function destroy(Tills $tills)
    {

    }
}
