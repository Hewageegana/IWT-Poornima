<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/header.css">
    <script type="text/javascript" src="../js/checkAccess.js"></script>
    <script type="text/javascript" src="../js/profile.js"></script>

</head>

<body onload="checkAccess()">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


    <div class="main-card-wrapper">
        <div class="main-card">


            <div class="card">
                <img src="../images/av.png" alt="John" style="width:65%">

                <?php
                require 'DbConfig.php';
                if (isset($_COOKIE['user'])) {

                    $userID = json_decode($_COOKIE['user'])->user_Id;


                    $sql = "SELECT * FROM users WHERE user_Id= '" . $userID . "'";
                    $result = $conn->query($sql);
                    // echo $conn->query($sql);
                    // $data = json_encode($result->user);
                    if ($result) {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                ?>
                                <h1 id="name"><?php echo $row['first_name']; ?></h1>
                                <p id="email" class="title"><?php echo $row['email']; ?></p>
                                <p id="telephone"><?php echo $row['phone_number']; ?></p>
                                <p id="address"><?php echo $row['address']; ?></p>

                <?php
                            }
                        }
                    } else {
                        echo "Error in " . $sql . "
                    " . $conn->error;
                    }

                    $conn->close();
                }
                ?>
                <!-- <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a> -->
                <!-- <p><button class="black-button"></button></p> -->

            </div>
            <div class="vl"></div>
            <div class="card2">
                <div class="button-wrpper">
                    <a href="../php/myVaccinations.php"><button type="button" class="resetbtn" style="background-color: #2962FF">My Vaccination</button></a>
                    <a href="../php/updateUserprofile.php"><button type="button" class="resetbtn" style="background-color: #2962FF">Update Profile</button></a>
                    <!-- <button type="button" class="resetbtn" style="background-color: #2962FF">Change Password</button> -->
                    <form method="POST" action="userProfile.php">
                        <button type="submit" id="deleteBtn" name="deleteBtn" class="resetbtn" style="background-color: #D50000" value="10" onclick="return confirm('Are you sure?\n Do You Want To Delete Account ?');">Delete Account</button>
                    </form>
                    <button type="button" class="resetbtn" style="background-color: #D50000" onclick="logOut()">Log out</button>
                    <?php
                    require 'DbConfig.php';
                    if (isset($_POST['deleteBtn'])) {
                        $sql = "DELETE FROM users WHERE user_Id= '$userID'";

                        if ($conn->query($sql) === TRUE) {
                            echo '<script language = "javascript">';
                            echo 'onDeleteSuccess()';
                            echo '</script>';
                        } else {
                            echo '<script language = "javascript">';
                            echo 'alert("Unsuccessfull :( ")';
                            echo '</script>';
                        }
                        $conn->close();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <table style="width:100%" class="tbl">
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </tr>
        <tr>
            <td>
                <h2 id="footer">© 2020 Copyright: Cool Rentals</h2>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.facebook.com"><img src="../images/fb.jpg" class="icon"></a>&nbsp;&nbsp;<a href="www.instagram.com"><img src="../images/insta.jpg" class="icon"></a>&nbsp;&nbsp;<a href="www.web.whatsapp.com"><img src="../images/wh.png" class="icon"></a>&nbsp;&nbsp;<a href="www.twitter.com"><img src="../images/tw.png" class="icon"></a>&nbsp;&nbsp;</td>
        </tr>

    </table>
    <hr>


</body>

</html>