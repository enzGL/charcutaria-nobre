<?php 
 $servidor = "localhost";
 $bd = "charcutaria_nobre";
 $usuario = "root";
 $senha = "";
 $id = $_GET['id'] ?? 0;

 $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
 if (!$conexao) {
     die("Não conectado" . mysqli_connect_error());
 }
 ?>