<form action="/auto/crear" method="post">
	 {{ csrf_field() }}
  Placa: <input type="text" name="placa"><br>
  Color: <input type="text" name="color"><br>
  <input type="submit" value="Submit">
</form>