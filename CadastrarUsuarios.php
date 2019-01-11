<?php
    include "conexao.inc";
?>
<html>
    <head>
        <title>Meu jogo</title>
        <script type="text/javascript" src=js.js></script>
    </head>
    <body>
        <?php
            $nome=$_POST['nome'];
            $user=$_POST['usuario'];
            $senha=$_POST['senha'];

            $sql = "INSERT INTO jogadores(cod,nome, usuarios, senhas) VALUES (NULL,'$nome','$user','$senha')";
            $res = mysqli_query($con, $sql);
            $linhas = mysqli_affected_rows($con);

            if($linhas != 0){
                echo "<center>";
                echo "<h3>";
                echo "Cadastrado com sucesso! Aguarde um instante...";
                echo "</h3>";
                echo "</center>";
                echo "<script>cadastrar()</script>";
            }else{
                echo "<center>";
                echo "<h3>";
                echo " Erro ao cadastrar! Aguarde um instante...";
                echo "</h3>";
                echo "</center>";
                echo "<script>cadastroErro()</script>";
            }
        ?>
        </body>
</html>