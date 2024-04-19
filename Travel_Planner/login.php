<?php
session_start();
require "connectdb.php";
require "validate.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tourist Venues</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img/fevicon.png" type="image/x-icon" />
  

</head>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background:transparent;
    overflow: hidden;
    background-image: url("OD-images/log.jpg");
    background-size: cover;
    background-repeat: no-repeat;
}

.wrapper {
    position: relative;
    width: 400px;
    height: 500px;
}

.form-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    background:white;
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
}

.wrapper.animate-signUp .form-wrapper.sign-in {
    transform: rotate(7deg);
    animation: animateRotate .7s ease-in-out forwards;
    animation-delay: .3s;
}

.wrapper.animate-signIn .form-wrapper.sign-in {
    animation: animateSignIn 1.5s ease-in-out forwards;
}

@keyframes animateSignIn {
    0% {
        transform: translateX(0);
    }

    50% {
        transform: translateX(-500px);
    }

    100% {
        transform: translateX(0) rotate(7deg);
    }
}

.wrapper .form-wrapper.sign-up {
    transform: rotate(7deg);
}

.wrapper.animate-signIn .form-wrapper.sign-up {
    animation: animateRotate .7s ease-in-out forwards;
    animation-delay: .3s;
}

@keyframes animateRotate {
    0% {
        transform: rotate(7deg);
    }

    100% {
        transform: rotate(0);
        z-index: 1;
    }
}

.wrapper.animate-signUp .form-wrapper.sign-up {
    animation: animateSignUp 1.5s ease-in-out forwards;
}

@keyframes animateSignUp {
    0% {
        transform: translateX(0);
        z-index: 1;
    }

    50% {
        transform: translateX(500px);
    }

    100% {
        transform: translateX(0) rotate(7deg);
    }
}

h2 {
    font-size: 30px;
    color: #555;
    text-align: center;
}

.input-group {
    position: relative;
    width: 320px;
    margin: 30px 0;
}

.input-group label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 16px;
    color: #333;
    padding: 0 5px;
    pointer-events: none;
    transition: .5s;
}

.input-group input {
    width: 100%;
    height: 40px;
    font-size: 16px;
    color: #333;
    padding: 0 10px;
    background: transparent;
    border: 1px solid #333;
    outline: none;
    border-radius: 5px;
}

.input-group input:focus~label,
.input-group input:valid~label {
    top: 0;
    font-size: 12px;
    background: #c1f1ff;
}

.forgot-pass {
    margin: -15px 0 15px;
}

.forgot-pass a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
}

.forgot-pass a:hover {
    text-decoration: underline;
}

.btn {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 40px;
    background: rgb(72, 72, 241);
    box-shadow: 0 2px 10px rgba(0, 0, 0, .4);
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    cursor: pointer;
    border-radius: 5px;
    border: none;
    outline: none;
}

.btn:hover{
    background-color: #f06896;
}

.sign-link {
    font-size: 14px;
    text-align: center;
    margin: 25px 0;
}

.sign-link p {
    color: #333;
}

.sign-link p a {
    color: #e91e63;
    text-decoration: none;
    font-weight: 600;
}

.sign-link p a:hover {
    text-decoration: underline;
}
</style>

<!-- preloader section start -->

<style>
    #loading {
      position: fixed;
      width: 100%;
      height: 100vh;
      background: #ffffff url(" ./img/loader.gif")
        no-repeat center;
      z-index: 99999;
    }
  </style>
  <!-- preloader section end -->


<body>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <div id="loading"></div>  -->
    <?php
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['emailid']);
    $password = mysqli_real_escape_string($conn, $_POST['PassWord']);
    $pass = password_hash($password, PASSWORD_DEFAULT);
    $emailquery = "select passwrd from userids where email='$email'";
    $query = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($query);
    $row = $query->fetch_assoc();
    $_SESSION['username']= $row['username'];
    if ($emailcount > 0 && password_verify($password,$row["passwrd"])) {
        header('Location: index.php');
    }else{?>
        <script>
            alert("Invalid Login ID or Password!");
        </script>
    <?php 
    }
}
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['emailid']);
    $password = mysqli_real_escape_string($conn, $_POST['PassWord']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['CpassWord']);
    $pass = password_hash($password, PASSWORD_BCRYPT);
    // $cpassword = password_hash($cpassword, PASSWORD_BCRYPT);
    $emailquery = "select * from userids where email='$email' ";
    $query = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($query);

    if ($emailcount > 0) { ?>
        <script>
            alert("email already exists! Please Sign in");
        </script>
        <?php
    } else {
        if (ValidateMail($email) == true) {
            if (password_verify($password,$pass)){
                $insertquery = "insert into userids( username, email, passwrd) values('$username ','$email','$pass')";
                $iquery = mysqli_query($conn, $insertquery);
                if ($iquery) { ?>
                    <script>
                        alert("Registration Successful");
                    </script>
                    <?php
                    // header('Location:');
                    // $conn->close();
                } else { ?>
                    <script>
                        alert("NO Connection ");
                    </script>
                    <?php
                }
            } else { ?>
                <script>
                        alert("Password are not matching !! ");
                    </script>
                    <?php
            }
        } else {?>
            <script>
                alert("Invalid Email !!");
            </script>
            <?php
        }
    }
}
?>
    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="email"  name="emailid" placeholder="Email id" required>
                    <label for="">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="PassWord" placeholder="Password" required>
                    <label for="">Password</label>
                </div>

                <div class="input-group">
                    <input type="password" name="CpassWord" placeholder="Confirm Password " required>
                    <label for=""> Confirm Password</label>
                </div>
                
                <button type="submit" name="register" class="btn">Sign Up</button>
                <div class="sign-link">
                    <p>Existing user? <a href="#" class="signIn-link">Sign In</a></p>
                </div>
            </form>
        </div>

        <div class="form-wrapper sign-in">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="email" name="emailid" placeholder="Email ID" required>
                    <label for="">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="PassWord" placeholder="Password" required>
                    <label for="">Password</label>
                </div>
                <div class="forgot-pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name="login" class="btn">Login</button>
                <div class="sign-link">
                    <p>New User? <a href="#" class="signUp-link">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>


    <script>
        const wrapper = document.querySelector('.wrapper');
const signUpLink = document.querySelector('.signUp-link');
const signInLink = document.querySelector('.signIn-link');

signUpLink.addEventListener('click', () => {
    wrapper.classList.add('animate-signIn');
    wrapper.classList.remove('animate-signUp');
});

signInLink.addEventListener('click', () => {
    wrapper.classList.add('animate-signUp');
    wrapper.classList.remove('animate-signIn');
});
    </script>

    <script src="script.js"></script>
<!-- preloader section start -->
    <script>
        var preloader = document.getElementById("loading");
        setTimeout(function () {
          preloader.style.display = "none";
        }, 0000); // 3000 milliseconds = 3 seconds
      </script>
      <!-- preloader section End -->
</body>

</html>
  <script  src="script.js"></script>

</body>
</html>
