<?php
require 'db.php';
if(isset($_POST['submit'])){
   
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $Msg = $_POST['Msg'];
    

    //print_r($_POST);  //show the simple version
    //var_dump($_POST); //show more detailed version

    $sql = "INSERT INTO formdatabase (fname, email, mobile, Msg)
    VALUES ('".$fname."','".$email."','".$mobile."','".$Msg."')";

    if (mysqli_query($conn, $sql)){
        echo "New record created successfully";
    }else{
        echo "Error: " .$sql. "<br>" .mysli_error($conn);
    }
    mysqli_close($conn);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample form with PHP</title>
</head>
<body>
    <form action="" method="post"> 
        Name: <input type="text" name="fname" required><br>
        E-mail: <input type="text" name="email"><br>
        Mobile: <input type="text" name="mobile"><br> 
        Msg: <input type="text" name="Msg"><br>
        <input type="submit" name="submit" type="submit"><input type ="reset" name="reset" type="reset">
    </form>

</body>
</html>