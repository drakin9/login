<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloqueando paginas por sessoes</title>
    <?php
    session_start();
    $_SESSION['nome'] = $_POST['nome'];  
    $_SESSION["senha"] = $_POST["senha"]; 
    date_default_timezone_set("America/Sao_Paulo");  
    ?>
</head>
<body>
    <b>Funcionario: </b> <?php echo $_SESSION['nome']?>, logado com sucesso <br>
    <b>Data de conexão: </b> <?php echo date("d/m/y")?> <br>
    <b>Hora da conexão: </b> <?php echo date("H:i:s")?> <br>
    <a href="sessoes_verifica_sessao.php">Area de administrador</a>



</body>
</html>