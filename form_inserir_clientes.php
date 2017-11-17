<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Inserir Cliente</title>
  <script type="text/javascript" src="validacao.js"></script>
</head>
<body>
  <form method="post" nome="form" action="insere_cliente.php" onSubmit="return valido ();">
      <h2>Insira dados do Cliente</h2>
      <legend>
        <label for="aNome">Nome:</label>
      </legend>
      <input type="text" id="aNome" name="nome" maxlenght="50" size=" 50"/>

      <legend>
        <label for="aMail">E-mail:</label>
      </legend>
      <input type="e-mail" id="aMail" name="email" size=" 30" maxlenght="30" />
      <input type="submit" name="botao" value="Enviar">

  </form>
</body>
</html>
