<?php
    include "conexao.inc";
    session_start();
    if(!isset($_SESSION["user"]) || !isset($_SESSION["senha"]) ){
        header("Location:login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src=js.js></script>
	<BODY onload=startCountdown()>
</head>
<body>
<div id="pai">
    <nav class="menu">
        <ul>
            <li><a href="logout.php">sair</a></li>
		</ul>
    </nav>
    <FONT face=verdana color=white size=5>
      <B><DIV id=numberCountdown></DIV></B>
    </FONT>
    <img id="img" src="imagem/gameMemor.png">
    <span id="pontos">Pontos:</span>
    <form id="fpontos" method="post" action="records.php">
        <input type="text" id="bpontos" name="bpontos" value=0 readonly>
    </form>
    <img id="p" src="imagem/pergaminho.png">
        <div id="memory_board"></div>
    <script>newcard();</script>
</div>
        
</body>
</html>