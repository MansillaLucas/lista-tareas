<?php

$email = "luks3000man@gmail";

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "El email ".$email." es valido";
}else{
    echo "El email ingresado es invalido";
}

?>