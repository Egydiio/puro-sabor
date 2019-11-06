<?php 
$login = $_POST['login'];
$logar = $_POST['logar'];
$senha = md5($_POST['senha']);
$host="localhost"; $user="root"; $password="";
$db="banco_purosabor";
$connect = mysqli_connect($host,$user,$password,$db) or die("impossível conectar ao MysqL");
  if (isset($logar)) {
           
    $query_select = "SELECT * FROM cliente WHERE login = '$login' AND senha = '$senha'" or die("erro ao selecionar");
    $verifica = mysqli_query($connect,$query_select);
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:tela-cardapio.html");
      }
  }
?>