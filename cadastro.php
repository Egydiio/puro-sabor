<?php 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$host="localhost"; $user="root"; $password="";
$db="banco_purosabor";
$connect = mysqli_connect($host,$user,$password,$db) or die("impossível conectar ao MysqL");
$query_select = "SELECT cliente FROM login WHERE login = '$login'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];
 
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    index.html';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        index.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO cliente (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($connect,$query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='tela-cardapio.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='index.html'</script>";
        }
      }
    }
?>