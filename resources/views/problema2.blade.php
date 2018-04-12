
<!DOCTYPE html>
<html>
<head>
	<title>problema 2</title>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>

<div class="jumbotron">
	

<form method="post" action="/venta/gaseosas">
    {{ csrf_field() }}

Producto
<select name="producto" id="lista" >
  <option value="inkakola 3.0 90">InkaKola</option>
  <option value="cocacola 3.0 80">CocaCola</option>
  <option value="guarana 1.5 86">Guarana</option>
  <option value="pepsi 1.8 65">Pepsi</option>
  <option value="sprite 2.0 45">Sprite</option>
</select><br>
<h4>Precio: <h3 id="precio"></h3></h4>

cantidad:

<div><input type="text" name="cantidad"><br/></div>

¿Con cuanto desea pagar?:

<div><input type="text" name="pago"><br/></div>
<br>

<input type="submit" name="Enviar">
</form>
</div>
<div></div>

<script>
$( "select" )
  .change(function() {
    var str = "";
    $( "select option:selected" ).each(function() {
      str += $( this ).text() + " ";
    });
    if (str=="InkaKola ") {
    	str="3.0";
    }else if (str=="CocaCola ") {
    	str="3.0";
    }else if (str=="Guarana ") {
    	str="1.5";
    }else if (str=="Pepsi ") {
    	str="1.8";
    }else if (str=="Sprite ") {
    	str="2.0";
    }




    $( "#precio" ).text( str );
  })
  .trigger( "change" );
</script>

</body>
</html>







