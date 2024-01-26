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
<table border="3">
    <tr>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
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
        