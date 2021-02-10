<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with(compact('users'));
    }

    public function create()
    {

        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required | min:3',
            'email' => 'required | email ',
            'password' => 'required | min : 9'
        ];
        $messages = [
            'name.required' => 'Nombre Requerido',
            'email.required' => 'Correo Requerido',
            'password.required' => 'Contraseña Requerida',
            'name.min' => 'Ingresa al menos un nombre con 3 letras',
            'email.email' => 'Ingresa un correo valido',
            'password.min' => 'Ingresa al menos una contraseña con 9 caracteres',
        ];

        $this->validate($request,$rules,$messages);

        $userio = new User();
        $userio->name = $request->input('name');
        $userio->email = $request->input('email');
        $userio->password = $request->input('password');
        $userio->admin = $request->input('admin');
        $userio->save();

        return redirect('/admin/users');

    }

    public function edit($id)
    {
        $userio =User::find($id);
        return view('admin.users.edit')->with(compact('userio'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required | min:3',
            'email' => 'required | email ',
            'password' => 'required | min : 9'
        ];
        $messages = [
            'name.required' => 'Nombre Requerido',
            'email.required' => 'Correo Requerido',
            'password.required' => 'Contraseña Requerida',
            'name.min' => 'Ingresa al menos un nombre con 3 letras',
            'email.email' => 'Ingresa un correo valido',
            'password.min' => 'Ingresa al menos una contraseña con 9 caracteres',
        ];

        $this->validate($request,$rules,$messages);

        $userio = User::find($id);
        $userio->name = $request->input('name');
        $userio->email = $request->input('email');
        $userio->password = $request->input('password');
        $userio->admin = $request->input('admin');
        $userio->save();

        return redirect('/admin/users');
    }

    public function destroy($id)
    {
        $userio = User::find($id);
        $userio->delete();
        return back();
    }
}
