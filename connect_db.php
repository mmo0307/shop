<?php

$p_ip = "localhost";
$p_name = "mmo030702";
$p_password = "Zxc123zxc@";
$p_db = "mmo030702_product";


$answer = mysqli_connect($p_ip, $p_name, $p_password, $p_db);

if($answer == false){
    echo "Fail to connected";
}

?>