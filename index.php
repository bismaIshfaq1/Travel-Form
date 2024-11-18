<?php

if(isset($_POST['name'])){
$servername = "localhost";

    $username = "root";

    $password = "";
    $conn = mysqli_connect($servername, $username, $password, "trip");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
       // echo "Connection is Successful<br>";
    }
   // echo "Success connecting to the db";
 
   $name = $_POST['name'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];  
   $phone = $_POST['phone'];
   $des = $_POST['des'];

   //sql query to be inserted
   
   $sql = "INSERT INTO tripi (name, age, gender, mail, phone, other, dt) 
VALUES ('$name', '$age', '$gender', '$email', '$phone', '$des', NOW())";


   
  // echo $sql;
   

  if ($conn->query($sql)) {
  //  echo "Successfully inserted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


}
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <img class="bg" src="bg.jpg">
    <div class="container">
        <h3>Welcome to Travel Form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="text" name="email" id="email" placeholder="Enter your Mail">
            <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number">
            <textarea name="des" id="des" cols="30" rows="10" placeholder="Enter anyother information here"></textarea>
            <button class="btn" type="submit">Submit</button>
        </form>

    </div>

    
    <script src="script.js"></script>
</body>

</html>

