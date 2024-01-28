<?php
include("connection.php");
$id=  $_GET['id'];
$query ="DELETE FROM form WHERE id='$id'";
$data=mysqli_query($conn,$query);

if($data)
{
    echo "Record deleted";
}
else
{
    echo "Not change";
}
?>