<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica sessões</title>
    <?php
    session_start();
if($_SESSION['nome'] != "master"){
    session_destroy();
    header("location: sessao_bloqueando_paginas.php");}

?> 
</head>
<body>
   
<h1>Pagina autorizada</h1>
</body>
</html>