<?php

include '../includes/functions.php';

if (isset(
    $_POST['FirstName'],
    $_POST['LastName'],
    $_POST['username'],
    $_POST['password'],
    $_POST['Email']
)) 

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
            <div class = "nav-brand login"><p>Login</p></div>
        </div>
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
            
                    <div class = "inline-form">
                        <input  type="text" class="form-control input-item" placeholder="First name" aria-label="First name">
                  
                        <input  type="text" class="form-control input-item" placeholder="Last name" aria-label="Last name">
                
                    </div>
                    
                
                
            

            
                    <div class ="inline-form">
                        <input type="text" class="form-control input-item" placeholder="U$eRn@mE" aria-label="username">                
                        <input type="password" class="form-control input-item" placeholder="Password" aria-label="password">
                    </div>
                    
            

            
                <div class="inline-form">
                    <input type="email" class="form-control input-item email" placeholder="Email" aria-label="Email">
                </div>
            
            
        </div>


    </main>

    <footer>
        <ul>
            <li><a href="https://github.com/Jtothesun/CampVerse"><i class="fa-brands fa-github"></i></a></li>
            <li>Saketh</li>
            <li>Baara</li>
            <li>Jason</li>
            <li>Arshal</li>
        </ul>
    </footer>
</body>

</html>