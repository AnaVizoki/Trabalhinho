<!DOCTYPE html>
<!-- Arquivo de retorno do formulário de consulta de form_cunsultar_cliente.php -->
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <title>Dados do Cliente</title>
</head>

<body>
  <?php
    $codclient = $_POST ["codc"];
  //Criar conexão //
    $conec = mysqli_connect('localhost','root','','avfit');
    //Reportar mensagem caso não conecte//
    if (!$user) {
      die ('Usuário não encontrado!');
    }
    //Reportar o código de cliente selecionado//
    echo 'Cliente de código: ' .$codclient;
    mysqli_close ($conec);
  ?>
</body>
</html>
