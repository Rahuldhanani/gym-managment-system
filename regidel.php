<?php

    $con=mysqli_connect("localhost","root","","gym");

    $id=$_GET['id'];

    $qry="DELETE FROM `register` WHERE id='$id'";

    mysqli_query($con,$qry);

    header("Location:regishow.php");
?>