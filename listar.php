<html lang = "pt-br">
<head>
	<title>Listagem</title>
	<meta charset="UTF=8"/>
	<link rel="stylesheet" type="text/css" href="estilo\style.css"/>
	</head>
<body>
<table border="2" width="100%">
<tr><td colspan="6"><center><h1>Listagem</h1></center></tr>
<tr><td>Login<td>Mesa</tr>
<?php
	 $login="login";
	 $senha="senha";
	$comando = "SELECT * FROM cliente ORDER BY $cal";

	//Conectar ao MYSQL e selecionar o banco de dados agenda
	$cone = mysqli_connect("localhost","root","","banco_purosabor") or die ("impossível se conectar ao MYSQL");

	//execultar consulta
	$consulta= mysqli_query($cone,$comando);
	$aux=0;
	while(mysqli_num_rows($consulta)>$aux){
		//pegar linha da consulta
		$rs = mysqli_fetch_array($consulta);
		echo("<tr>
				<td>$rs[login]
				<td>$rs[senha]
			</tr>");
		$aux++;
	}
 ?>
 </table>
 </body>
 </html>