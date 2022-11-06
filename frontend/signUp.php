<?php
include '../includes/functions.php';
// $pdo = get_database_connection();

$conn = mysqli_connect("localhost","root","","campverse");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());

}
// echo "Connected successfully <br>";

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


    // echo $sql;
    // echo '<br>';
    // echo"<script>alert ('Data inserted Successfully')</script>";

    // mysqli_query($conn,$sql)
    // Close database connection.
    // $conn = null;



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampVerse-Open</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/1a48472a15.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav>
        <div class="nav-brand">
            <img class="img-logo" src="images/musical-note.png" alt="">
            <p>CampVerse</p>
        </div>
        <div>
            <div class = "nav-brand login"><p><a style="text-decoration: none;" href="login.html">Log in</a></p></div>

        </div>
        <div class = "nav-brand login"><p><a style="text-decoration: none;" href="viewSong.html">Sounds</a></p></div>

    </nav>

    <main>

        <div class = "container-fluid">
            <div class="row">
                <div class="col text-start col-lg-6 col-md-12 col-sm-12">
                    <h3 class = "heading">Welcome to CampVerse, free ambience Music anywhere and anytime</h3>
                    <h3 class = "heading">Signup Today</h3>
                </div>
                <div class="col col-lg-6 col-md-12 col-sm-12 img-start">
                    <img class = "side-img" src="images/music.png" alt="">
                </div>
            </div>
        </div>
        
        <div class="container-fluid signup-form">
            <form action="" method="POST">
            
                    <div class = "inline-form">
                        <input  type="text" class="form-control input-item" name= "firs-tname" placeholder="First name" aria-label="First name">
                  
                        <input  type="text" class="form-control input-item" name="Last-name" placeholder="Last name" aria-label="Last name">
                
                    </div>
                    
                
                
            

            
                    <div class ="inline-form">
                        <input type="text" class="form-control input-item" name="username" placeholder="U$eRn@mE" aria-label="username">                
                        <input type="password" class="form-control input-item" name="Pass-word"placeholder="Password" aria-label="password">
                    </div>
                    
            

            
                <div class="inline-form">
                    <input type="email" class="form-control input-item email" name="Email-address" placeholder="Email" aria-label="Email">
                </div>
            
                <input type="submit" name="submit" value="submit">
                <!-- <button class="song-upload" type="submit">Sign Up</button> -->

            </form>
            
        </div>


    </main>

    <footer>
        <ul>
            <li><a href="https://github.com/Jtothesun/CampVerse"><i class="fa-brands fa-github"></i></a></li>
            <li class = "names">Saketh</li>
            <li class = "names">Baara</li>
            <li class = "names">Jason</li>
            <li class = "names">Arslan</li>
        </ul>
    </footer>
</body>

</html>