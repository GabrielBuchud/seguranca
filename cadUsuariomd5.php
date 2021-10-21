<?php
include "conexao.php";
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$scodif = md5($senha);

$sql = "insert into usuario values (null,'".$nome."','".$email."','".$scodif."')";

if(mysqli_query($conexao,$sql)){

    echo "Gravado com Sucesso!";

}else{

    echo "Erro ao Gravar!";

}
mysqli_close($conexao);
?>