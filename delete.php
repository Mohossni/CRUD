<?php
include "DB.php";
if(isset($_GET['deleteid']))
{
    $id=$_GET["deleteid"];

    $sql="DELETE FROM `crud_table` where Id =$id";

    $resalt=mysqli_query($cone,$sql);

    if($resalt)
    {
        header('location:index.php');
    }else{
        die(mysqli_error($cone));
    }

}
?>
