<?php
include "conexao.php";
if(isset($_GET["id"]) && !empty($_GET["id"]))
{

    $query = "Delete from faleconosco where id=".$_GET["id"];
    $resultado = mysqli_query($conexao, $query);

    if($resultado){
                header("location: ../paginas_php/showform.php");
                exit();
    }
}
?> 



