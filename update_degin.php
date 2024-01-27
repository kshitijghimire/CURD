

<?php include("connection.php"); 
error_reporting(0);
// mysqli_connect_error()
$id=  $_GET['id'];
$query ="SELECT * FROM form WHERE id='$id'";

$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Opetations</title>
    <link rel="stylesheet" type="text/css"       href="style.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Update Students details
        </div>

        <div class="form">
            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" value="<?php echo $result['fname'] ?>" class="input" name="fname" required>
            </div>
            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" value="<?php echo $result['lname'] ?>"  class="input" name="lname" required>
            </div>
            <div class="input_field">
                <label for="">Password</label>
                <input type="password" value="<?php echo $result['password'] ?>"    class="input" name="password" required>
            </div><div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" value="<?php echo $result['cpassword'] ?>" class="input" name="conpassword" required >
            </div><div class="input_field">
                <label for="">Gender</label>
                <div class="custom_select">
             <select name="gender" required>

                <option value="">Select</option>

                <option value="Male" <?php if($result['gender'] == 'Male'){echo "selected";} ?>>Male</option>

                <option value="Female" <?php if($result['gender'] == 'Female'){echo "selected";} ?>>Female</option>

                </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">Email Address</label>
                <input type="email" value="<?php echo $result['email'] ?>"   class="input" name="email" required>
            </div>
            <div class="input_field">
                <label for="">Phone Number</label>
                <input type="text" value="<?php echo $result['phone'] ?>"   class="input" name="phone" required>
            </div>
            <div class="input_field">
                <label for="">Address</label>
                <textarea class="textarea" name="address" required ><?php  echo $result['address'];?></textarea>
            </div>
            <div class="input_field terms">
                <label class="check">
                <input type="checkbox" required>
                <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p> 
            </div>
            <div class="input_field">
                <input type="submit" value="Update" class="btn" name="register" >
            </div>
        </div>
        </form>
    </div>
</body>
</html>
<?php
if($_POST['register'])
{
   $fname   = $_POST['fname'];
   $lname   = $_POST['lname'];
   $pwd     = $_POST['password'];
   $cpwd    = $_POST['conpassword'];
   $gender  = $_POST['gender'];
   $email   = $_POST['email'];
   $phone   = $_POST['phone'];
   $address = $_POST['address'];

   if($fname != "" && $lname != "" && $pwd != "" && $cpwd != "" && 
   $gender != "" && $email != "" && $phone != "" && $address != "" )
   {

   

   $query="INSERT INTO form (fname,lname,password,cpassword,gender,email,phone,address)
   VALUES('$fname','$lname','$pwd','$cpwd', '$gender','$email','$phone','$address')";
   $data =mysqli_query($conn,$query);

if($data)

{
    echo "Data Inserted into Database";
}
else
{
    echo "Failed";
}
   
}

else
{
    echo   "<script> alert ('Fill the form first');</script>" ;
}
}

?>


