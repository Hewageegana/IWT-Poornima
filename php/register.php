<!DOCTYPE html>
<html lang="en">

<head>

    <title>Online Vaccination Portal</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/header.css">
    <script type="text/javascript" src="../js/register.js"></script>
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
        <h1>Welcome to the Public Health Vaccine Portal</h1>

        <div class="main-wrapper">
            <div class="main">
                <form method="POST" action="register.php" onsubmit="return cheakpassword()">
                    <div class="container">
                        <center>
                            <h6>Registration form</h6>
                        </center>

                        <hr>
                        <div class="regis">


                            <label for="fname"><b>First Name:</b></label><br>
                            <input type="text" id="fname" name="fname" placeholder="First Name" required><br />

                            <label for="fname"><b>Last Name:</b></label><br>
                            <input type="text" id="fname" name="lname" placeholder="Last Name" required><br />

                            <label for="gender"><b>Gender:</b></label><br>
                            <label class="gen">Male
                                <input type="radio" value="Male" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label><br>
                            <label class="gen">Female
                                <input type="radio" value="Female" name="radio">
                                <span class="checkmark"></span>
                            </label><br>

                            <!--<label for = gender><b>Gender</b></label><br>
                    <select name ="radio" id="radio">
                        <option selected hidden value ="">Choose gender</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select><br><br>-->

                            <label for="phone"><b>Phone number :</b></label><br>
                            <input type="tel" id="fname" name="phone" pattern="[0-9]{10}" placeholder="Phone number" required><br>

                            <label for="address"><b>Address :</b></label><br>
                            <textarea id="fname" name="address" rows="10" cols="50" placeholder="Address" ;required></textarea><br>

                            <!--<label for="dob"><b>Choose your DOB:</b></label><br>
                        <input type="date" name="day" id="fname" style="width:300px" required><br><br>-->
                            <label for="nic"><b>Nic</b></label><br>
                            <input type="text" placeholder="Enter NIC" name="nic" id="fname" required><br>

                            <label for="email"><b>Email</b></label><br>
                            <input type="text" placeholder="Enter Email" name="email" id="fname" required><br>

                            <label for="psw"><b>Password</b></label><br>
                            <input type="password" placeholder="Enter Password" name="Pass" id="Pass" required><br>
                            <input type="checkbox" onclick="myFunction()">Show Password <br><br>

                            <label for="psw-repeat"><b>Repeat Password</b></label><br>
                            <input type="password" placeholder="Repeat Password" name="rePass" id="rePass" required><br>
                            <input type="checkbox" onclick="reFunction()">Show Password <br><br>
                            <hr>

                            <p id="reg"><input type="checkbox" id="policy" name="policy" required onclick="enablebutton()"> I agree to <a href="#">Terms & Privacy</a>.</p>

                            <button type="submit" id="registerbtn" name="registerbtn" value="registerbtn" class="registerbtn" disabled>Register</button>
                            <button type="reset" class="resetbtn">Reset</button>
                        </div>
                        <?php
                        require './DbConfig.php';
                        if (isset($_POST['registerbtn'])) {

                            $first = $_POST["fname"];
                            $last = $_POST["lname"];
                            $Gender = $_POST["radio"];
                            $tel = $_POST["phone"];
                            $address = $_POST["address"];
                            $nic = $_POST["nic"];
                            $email = $_POST["email"];
                            $psw = $_POST["Pass"];
                            $isActive = true;
                            $userType = 1;
                            $createdDate = date('Y-m-d H:i:s');

                            $sql = "SELECT * FROM users WHERE nic= '" . $nic . "'";
                            $result = $conn->query($sql);
                            if ($result) {
                                if ($result->num_rows > 0) {
                                    echo '<script language = "javascript">';
                                    echo 'alert("Nic Number Already Exists :( ")';
                                    echo '</script>';
                                } else {
                                    $sqltwo = "INSERT INTO users (user_Id, first_name, last_name, gender, phone_number, address, nic, email, password, isActive,  user_type, created_date)
                                    VALUES (0,'$first','$last','$Gender',$tel,'$address','$nic','$email','$psw','$isActive', '$userType', '$createdDate' )";

                                    if ($conn->query($sqltwo) === TRUE) {
                                        echo '<script language = "javascript">';
                                        echo 'success()';
                                        echo '</script>';
                                    } else {
                                        echo '<script language = "javascript">';
                                        echo 'alert("Unsuccessfully :( ")';
                                        echo '</script>';
                                    }
                                    $conn->close();
                                }
                            }
                        }

                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>