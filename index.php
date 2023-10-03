<?php

$name = $_POST['name'];
$password = $_POST['password'];
/*
if($user == "gabriel" && $password == 101010){
    echo "seja benvindo";
    return;
}else{
    echo "tente novamente";
    return;
}
*/
if($name=="gabriel" && $password == 101010):
    echo"seja bem vindo";
else:
    echo "tente novamente";
endif;

?>
