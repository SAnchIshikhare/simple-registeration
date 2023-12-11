<?php
    session_start();

    include("php/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location : index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php"> Logo</a></p>
        </div>
        <div class="right-links">


            <?php

            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT * FROM users WHERE ID = $id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Mobile = $result['Mobile'];
                $res_id = $result['id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>"; 
            
            ?>

            <a href="php/logout.php"><button class="btn">Log out</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b> <?php echo $res_Uname ?> </b>,Welcome</p>
                </div>
                <div class="box">
                    <p>Your email is  <b> <?php echo $res_Email ?> </b>.</p>
                </div>
                <div class="box">
                    <p>And you are <b> <?php echo $res_Mobile ?> number is 9594540392</b>.</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>