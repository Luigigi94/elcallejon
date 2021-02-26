<?php

namespace App\Http\Controllers\Admin;

use App\Models\Savings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SavingsController extends Controller
{
    public function index()
    {
//            $data =\DB::table('organizador')
//            ->join('unidades', 'organizador.unidad', '=', 'unidades.id')
//            ->select('unidades.unidad', 'organizador.columnaElegida')
//            ->get();
//        SELECT savings.quantity AS 'Cantidad', savings.created_at AS 'Guardado', users.name as 'Guardo'
//        FROM savings
//        INNER JOIN users ON users.id = savings.users_id
        $savings = DB::table('users')
            ->join('savings','savings.users_id','=','users.id')
            ->select('savings.quantity as cantidad', 'savings.created_at as guardado', 'users.name as guardo')
            ->get();
        return view('admin.savings.index')->with(compact('savings'));
    }

    public function create()
    {
//        $usuario = Auth::user()->id;
        return view('admin.Savings.create');
    }

    public function store(Request $request)
    {
        $saving = new Savings();
        $saving->quantity = $request->input('quantity');
        $saving->users_id = Auth::user()->id;
        $saving->save();
        return redirect('/admin/savings');
    }

    public function edit($id)
    {
        $saving = Savings::find($id);
        return view('admin.Savings.edit')->with(compact('saving'));
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $saving = Savings::find($id);
        $saving->delete();
        return back();
    }
}
