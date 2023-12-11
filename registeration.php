
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
    
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <?php
        include("php/config.php");
        if( isset($_POST['submit'])){
            $username = $_post['username'];
            $email = $_post['email'];
            $mobile = $_post['mobile'];
            $password = $_post['password'];

        // verifying the unique email

        $verify_query = mysqli_query($con,"SELECT Email FROM Users WHERE Email= '$email' ");

         if(mysqli_num_rows($verify_query) !=0){
            echo "<div class= 'message'>
                     <p>This email is used, Try another One Please!</p>
                <div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";

         }
        else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Mobile,Password) VALUES('$usename','$email','$mobile','$password')")or die("Error occured");

                echo "<div class= 'message'>
                     <p>Registration successfully!</p>
                     <div> <br>";
                echo "<a href='index.php'><button class='btn'>Login Now</button>";

        }
        }else{

        ?>
            <header>Sign up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username<label>
                        <input type="text" name="username" id="username" autocomplete="off" required>  
                </div>

                <div class="field input">
                    <label for="email">Email <label>
                        <input type="text" name="email" id="email" autocomplete="off" required> 
                    </div>
                      
                 <div class="field input">
                            <label for="mobile">Mobile<label>
                                <input type="text" name="mobile" id="mobile" autocomplete="off"required>
                     </div>

                <div class="field input">
                            <label for="password">password<label>
                                    <input type="text" name="password" id="password" autocomplete="off"required>  
        
                <div class="field">
                        <input type="submit" class="btn" class="submit" value="Regiter"
                         required>
                </div>
                <div class="links">
                    Already have account? <a href="index.php">Login </a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
<body>
</html>