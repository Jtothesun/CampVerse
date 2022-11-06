<?php
include '../includes/functions.php';
// $pdo = get_database_connection();

$conn = mysqli_connect("localhost","root","","campverse");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());

}echo "Connected successfully <br>";

if (isset($_POST["submit"])){
    $first=     $_POST['firs-tname'];
    $last=      $_POST['Last-name'];
    $username=  $_POST['username'];
    $password=  $_POST['Pass-word'];
    $email=     $_POST['Email-address'];
}
    // $_POST['phone-number']

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO blah Values('','$first','$last','$username','$email','$hash',0)";

    mysqli_query($conn,$sql);


    // $statement = $pdo->prepare($sql);
    
    
    // $statement->execute(array(
    //     'firs-tname'    => $first,
    //     'Last-name'     => $last,
    //     'username'      => $username,
    //     'Pass-word'      => $hash,
    //     'Email-address' => $email
    // ));

    echo $sql;
    echo '<br>';
    // echo"<script>alert ('Data inserted Successfully')</script>";

    // mysqli_query($conn,$sql)
    // Close database connection.
    // $conn = null;



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP FORM HAndling</title>
</head>


<body>
    <?php 
    var_dump($_POST);
    // if (isset)
     ?>
    <form action="" method="POST">
        <p>first name: <input type="text" name="firs-tname" value=""></p>
        <p>last name: <input type="text" name="Last-name" value=""></p>
        <p>@username: <input type="text" name="username" value=""></p>
        <p>email: <input type="text" name="Email-address" value=""></p>
        <p>password: <input type="text" name="Pass-word" value=""></p>
        <!-- <button type="submit" name="submit">submit</button> -->
        <input type="submit" name="submit" value="submit">

    </form>

</body>
</html>