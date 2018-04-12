<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
    	$user=User::find(3);
    	$post=$user->posts;
    	//echo count($post);
    	foreach ($post as $fila) {
    		//echo "$fila->title "." $fila->body<br/>";
    		//return response()->json(compact('fila'),200);
    	}
    }

    public function showUsers()
    {
        $users=User::All();
        return view('usuarios.showUsuarios',compact('users'));
    }

    public function index2()
    {
        $user=User::All();
        $val=$user[0]->posts;

        return response()->json(compact('val'),200);
    }

    public function delete($id)
    {
        $auto=User::find($id);
        $auto->delete();
        return redirect('/mostrarUsuarios');
    }

    public function edit($id)
    {
        $user=User::find($id);
        $datos=array(
                'user'=>$user);
        return view('usuarios.edit',$datos);
    }
    public function editado(Request $request)
    {
        $id=$request->input('id');

        $user= User::find($id);
        $user->name = $request->input('nombre');
        $user->save();
        return redirect('/mostrarUsuarios');

    }

     public function create()
     {
        return view('usuarios.create');
     }

    public function store(Request $request)
    {
        $user=new User;
        $user->name = $request->input('nombre');
        $user->save();
        return redirect('/mostrarUsuarios');

    }
}
