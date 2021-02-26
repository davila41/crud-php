<?php

$con = mysqli_connect('localhost', 'root', '', 'crud', '3308');
mysqli_set_charset($con, "utf8");

if(mysqli_connect_error()){
	echo "Erro na conexão:".mysqli_connect_error();
};
?>