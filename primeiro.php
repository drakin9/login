<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
</head>
<body>
<?php
session_start();

$_SESSION['nome']="Administrador";

/*session_unset();*/

/*session_destroy();*/

?>    

<h3>Sessaõ do usuario</h3>
Bem vindo, SR.<?php echo $_SESSION['nome'];?>
<br/>
O id da sessão é: <?php echo session_id();?>

</body>
</html>

