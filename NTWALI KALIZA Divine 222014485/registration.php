<?php
$conn=new mysqli('localhost','root','','kadi');
if (isset($_POST['submit'])) {

    $firstname=$_POST['names'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    $insert="INSERT INTO users VALUES ('','$firstname','$address','$age','$gender','$email','$password','$role')";
    $check=mysqli_query($conn,$insert);
    if ($check) {
        echo "good work";
        header("location:login.php");
    }
    else
    {
        echo "subiramo".mysqli_error($conn);
    }
    
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        form {
            width: 300px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="password"], input[type="address"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
        }
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST" action="#">
        <label for="names">Name:</label>
        <input type="text" id="names" name="names">

        <label for="age">Age:</label>
        <input type="text" id="age" name="age">

        <label for="address">Address:</label>
        <input type="address" id="address" name="address">

        <label for="address">Email</label>
        <input type="text" id="email" name="email">

         <label for="role">role</label>
        <input type="text" id="role" name="role">


        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>