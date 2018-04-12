<form action="/auto/editado" method="post">
	 {{ csrf_field() }}
  Placa: <input type="text" name="placa" value="{{$auto->placa}}"><br>
  Color: <input type="text" name="color" value="{{$auto->color}}"><br>
  <input type="hidden" name="id" value="{{$auto->id}}"><br>
  <input type="submit" value="Submit">
</form>