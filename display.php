<!DOCTYPE html>
<html >
<head>
    <title>Display</title>
    <style>
body
{
    background: #d071f9;
}
table
{
    background-color: white;
}
    </style>
</head>
<body>
    
</body>







<?php
include("connection.php");
error_reporting(0);

$query ="SELECT * FROM form";

$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);




// echo $total;

if($total !=0)
{
?>
<center>
<h2 align="center">  <mark>  Displaying All Records </mark></h2>
<table border="3" cellspacing="7" width="85%">
    <tr>
<th  width="10%">First Name</th>
<th  width="10%">Last Name</th>
<th  width="10%">Gender</th>
<th  width="20%">Email</th>
<th  width="10%">Phone</th>
<th  width="25%">Address</th>
    </tr>

<?php
while( $result = mysqli_fetch_assoc($data))

    {
        echo "<tr>
                 <td>".$result['fname']."</td>
                 <td>".$result['lname']."</td>
                 <td>".$result['gender']."</td>
                 <td>".$result['email']."</td>
                 <td>".$result['phone']."</td>
                 <td>".$result['address']."</td>
             </tr>
             ";
     }
}
else
{
    echo "No records found";
}


?>
</table>
</center>
</html>