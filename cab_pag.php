<?php
$registros=10;
$pagina="";
if(isset($_GET["pagina"])){
  $pagina =(int)$_GET["pagina"];
}
if($pagina==0||$pagina==""){
  $inicio=0;
  $pagina=1;
}else{
  $inicio=($pagina-1)*$registros;
}
?>

