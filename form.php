<?php include("connection.php"); ?>


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
        <div class="title">
            Registration Form
        </div>

        <div class="form">
            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label for="">Password</label>
                <input type="password" class="input">
            </div><div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" class="input">
            </div><div class="input_field">
                <label for="">Gender</label>
                <div class="custom_select">
             <select>
                <option value="">Select</option>
                <option value="">Male</option>
                <option value="">Female</option>
                </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">Email Address</label>
                <input type="email" class="input">
            </div>
            <div class="input_field">
                <label for="">Phone Number</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label for="">Address</label>
                <textarea class="textarea"  ></textarea>
            </div>
            <div class="input_field terms">
                <label class="check">
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p> 
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn">
            </div>
        </div>
    </div>
</body>
</html>