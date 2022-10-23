<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <script type="text/javascript" src="../js/login.js"></script>
</head>


<body>
    <div>
        <div class="login">
            <div class="login-image">
                <img src='../images/logo.png' alt="logo Image" class="login-logo" style="width: 400px;height: 250px;">
            </div>
            <form id="login" method="post">
                <div class="log-container">
                <label><b>Email Address
                    </b>
                </label> <br>
                <input type="text" name="Uname" id="Uname" placeholder="Email Address" required style="width: 400px;">
                <br><br>
                <label><b>Password </b>
                </label> <br>
                <input type="Password" name="Pass1" id="Pass1" placeholder="Password" required style="width: 400px;"></br>
                <input type="checkbox" onclick="psFunction()">Show Password
                <input type="checkbox" id="check">
                <span>Remember me</span>
                <br><br>
                <center>
                <button type="submit" class="button" name="login" value="login">Log In</button>
                
                <br><br>
                <a href="#" id="forg">Forgot Password ?</a><br>
                <h6>If you don't have an account <a href="./register.php" id="regi">Register in here</a></h6>
                </div>
                </center>
            </form>

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