<!DOCTYPE html>
<!-- Arquivo de retorno do formulário de consulta de form_cunsultar_cliente.php -->
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <title>Dados do Cliente</title>
</head>

<body>
  <?php
    $user='root';
    $codclient = $_POST ["codc"];
  //Criar conexão //
    $conec = mysqli_connect('localhost',$user,'','avfit');
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
