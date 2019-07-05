<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="post" action="">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option value="0">Suma</option>
      <option value="1">Resta</option>
      <option value="2">Multiplicacion</option>
      <option value="3">Division</option>
      <option>Modulo</option>
      <option>Incremento</option>
      <option>Decremento</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>
<p>&nbsp;</p>

<?php
  
  include ("calculadora.php");

  if (isset($_POST["button"])) {
   $numero1=$_POST["num1"];
   $numero2=$_POST["num2"];
   $operacion=$_POST["operacion"];
   switch ($operacion) {
   	case 0:echo "$numero1 + $numero2 =".calculadora::suma($numero1,$numero2); break;
   	case 1:echo "$numero1 - $numero2 =".calculadora::resta($numero1,$numero2); break;
   	case 2:echo "$numero1 * $numero2 =".calculadora::multiplicacion($numero1,$numero2); break;
   	case 3:echo "$numero1 / $numero2 =".calculadora::division($numero1,$numero2); break;
   	
   	
   }
   }

?>


</body>
</html>

