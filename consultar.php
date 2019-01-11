<?php
    include "conexao.inc";
?>
<html>
    <head>
        <title>Meu jogo</title>
        <script>
            function login(){
                setTimeout("window.location='inde1.php'", 1000);
            }
            function loginErro(){
                setTimeout("window.location='login.php'", 1000);
            }
        </script>
    </head>
    <body>
<?php
    $user=$_POST['usuario'];
    $senha=$_POST['senha'];

    $sql = "SELECT * FROM jogadores WHERE usuarios = '$user' and senhas = '$senha' ";
    $res=mysqli_query($con, $sql);
    $row = mysqli_num_rows($res);
    if($row>0){
        session_start();
        $_SESSION['user']=$_POST['usuario'];
        $_SESSION['senha']=$_POST['senha'];
        /*header("Location:inde1.php"); caso queira ser direcionado rapidamente*/
        echo "<center>";
        echo "<h3>";
        echo "Voce foi logado com sucesso! Aguarde um instante...";
        echo "</h3>";
        echo "</center>";
        echo "<script>login()</script>";
    }else{
        echo "<center>";
        echo "<h3>";
        echo " Nome de usuario ou senha invalida! Aguarde um instante...";
        echo "</h3>";
        echo "</center>";
        echo "<script>loginErro()</script>";
    }
?>
        </body>
</html>
