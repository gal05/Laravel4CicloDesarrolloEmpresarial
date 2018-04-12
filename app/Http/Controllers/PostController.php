<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
	public function index()
	{
		$posts=Post::All();
		foreach ($posts as $fila) {
    		//echo "$fila->title<br/>";
			echo $fila->body."</br>";
		}
	}


	function index2()
	{
		$posts=Post::All();
		return response()->json(compact('posts'),200);
	}


    //here start

	public function show()
	{
		$posts=Post::All();
		return view('post.show',compact('posts'));
	}

	public function delete($id)
	{
		$post=Post::find($id);
		$post->delete();
		return redirect('/postshow');
	}

	public function edit($id)
	{
		$post=Post::find($id);
		$datos=array(
			'post'=>$post);
		return view('post.edit',$datos);
	}
	public function editado(Request $request)
	{
		$id=$request->input('id');
		$post= Post::find($id);
		$post->title = $request->input('title');
		$post->body=$request->input('body');
		$post->user_id=$request->input('user_id');
		$post->save();
		return redirect('/postshow');

	}

	public function create()
	{
		$users=User::All();
		return view('post.create',compact('users'));
	}

	public function store(Request $request)
	{
		$post=new Post;
		$post->title = $request->input('title');
		$post->body=$request->input('body');
		$post->user_id=$request->input('user_id');
		$post->save();
		return redirect('/postshow');

	}
}

/*tarea:
	-mantenimiento a la tabla post

*/
