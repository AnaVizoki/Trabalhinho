<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Consultar Cliente</title>
  <script type="text/javascript" src="validacao.js"></script>
</head>
<body>
  <h1> Consultar Cliente</h1>
  <form method="post" name="consulta" action="consulta_cliente.php" onSubmit="return validacao ();">
    <legend><label for="cod">Informe o Código do Cliente:</label></legend><input type="number" name ="codc" id="cod" size="5"/>
    <input type="submit" name="botao" value="Enviar">
 </form>
</body>
</html>
