<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/header.css">
    <script type="text/javascript" src="../js/login.js"></script>
</head>


<body onload="checkAccess()">
    <div>
        <div class="header">
            <div class="upper-header">
                <div class="log-cover">
                    <img src='../images/logo.png' alt="logo Image" class="logo">
                </div>
                <div class="search-bar">
                    <div class="search-bar-wrapper">
                        <input type="text" placeholder="Search" class="search-input" />
                    </div>
                </div>
                <div class="empty-div">

                </div>
                <div class="avatar-cover">
                    <img src='../images/av.png' alt="logo Image" class="avatar">
                </div>
            </div>

        </div>

        <header class="header1">

            <i class="fa fa-bars menu-toggle"></i>

            <ul class="nav">


                <li class="linein"><a href="../index.php">Home</a></li>
                <li class="linein" id="portal"><a href="./vaccinationPortal.php">Vaccination Portal</a></li>
                <li class="linein"><a href="./aboutUs.php">About Us</a></li>
                <!-- <li class="linein"><a href="#">Help</a></li> -->
                <!-- <li class="linein"><a href="#">Contact Us</a></li> -->
                <li class="linein noAccess" id="noAccess"><a href="./login.php">Login/Register</a></li>
                <li class="linein login" id="login"><a href="./userProfile.php">Profile</a></li>



            </ul>
        </header>
        <div class="main-wrapper">
            <div class="main">
                <form action="login.php" method="post">
                    <div class="imgcontainer">
                        <img src="../images/Authentication-pana.png" alt="Avatar" class="avatar-img">
                    </div>

                    <div class="container">
                        <label for="uname"><b>Email Address</b></label>
                        <input type="text" name="Uname" id="Uname" placeholder="Email Address" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="Password" name="Pass1" id="Pass1" placeholder="Password" required>
                        <label>
                            <input type="checkbox" name="remember" onclick="psFunction()"> Show Password
                        </label>

                        <button type="submit" class="button" name="login" value="login">Login</button>
                        <h4>If you don't have an account <a href="./register.php" id="regi">Register in here</a></h4>
                    </div>

                    <!-- <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div> -->
                </form>
            </div>
        </div>
    </div>

    <?php
    require 'DbConfig.php';
    if (isset($_POST['login'])) {
        $log = $_POST['Uname'];
        $pword = $_POST['Pass1'];


        $sql = "SELECT * FROM users WHERE email LIKE '%" . $log . "%' AND password LIKE '%" . $pword . "%'";
        $result = $conn->query($sql);
        // $data = json_encode($result->user);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $cookie_name = "user";

            $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
            $cookie_value = json_encode($row);
            setcookie($cookie_name, $cookie_value, time() + (86400), '/', $domain, false);
            header('location:../index.php');
        } else {
            echo '<script language ="javascript">';
            echo 'alert("Login Faild")';
            echo '</script>';
        }

        $conn->close();
    }
    ?>
</body>

</html>