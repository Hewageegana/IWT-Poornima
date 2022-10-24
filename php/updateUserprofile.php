<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/header.css">
    <!-- <script type="text/javascript" src="../js/register.js"></script> -->
    <script type="text/javascript" src="../js/checkAccess.js"></script>
    <script type="text/javascript" src="../js/profileUpdate.js"></script>
</head>

<body onload="checkAccess()">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="header">
        <div class="upper-header">
            <div>
                <img src='../images/logo.png' alt="logo Image" class="logo">
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search" />
            </div>
            <div class="avatar">
            <img src='../images/av.png' alt="logo Image" class="avatar">
            </div>
        </div>

    </div>

    <header class="header1">

        <i class="fa fa-bars menu-toggle"></i>

        <ul class="nav">

            <li class="linein"><a href="../index.php">Home</a></li>
            <li class="linein"><a href="#">View Inventory</a></li>
            <li class="linein"><a href="./aboutUs.php">About Us</a></li>
            <li class="linein"><a href="#">Help</a></li>
            <li class="linein"><a href="#">Contact Us</a></li>
            <li class="linein login" id="login"><a href="./updateUserprofile.php">Profile</a></li>



        </ul>
    </header>




    <div>

        <form method="POST" action="updateUserprofile.php">
            <center>
                <h6>Update User Details</h6>
            </center>

            <hr>
            <div class="regis">

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

                                <label for="fname"><b>First Name:</b></label><br>
                                <input type="text" id="fname" name="firstName" style="width:1000px" placeholder="First Name" value="<?php echo $row['first_name']; ?>" required><br />

                                <label for="fname"><b>Last Name:</b></label><br>
                                <input type="text" id="fname" name="lname" style="width:1000px" placeholder="Last Name" value="<?php echo $row['last_name']; ?>" required><br />

                                <!-- <label for="gender"><b>Gender:</b></label><br><br>
                <label class="gen">Male
                    <input type="radio" value="Male" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label><br>
                <label class="gen">Female
                    <input type="radio" value="Female" name="radio">
                    <span class="checkmark"></span>
                </label><br> -->

                                <!--<label for = gender><b>Gender</b></label><br>
                    <select name ="radio" id="radio">
                        <option selected hidden value ="">Choose gender</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select><br><br>-->

                                <label for="phone"><b>Phone number :</b></label><br>
                                <input type="tel" id="fname" name="phone" pattern="[0-9]{10}" style="width:1000px" placeholder="Phone number" value="0<?php echo $row['phone_number']; ?>" required><br>

                                <label for="address"><b>Address :</b></label><br>
                                <textarea id="fname" name="address" rows="10" cols="50" style="width:500px" placeholder="Address" ;required><?php echo $row['address']; ?></textarea><br>

                                <!--<label for="dob"><b>Choose your DOB:</b></label><br>
                        <input type="date" name="day" id="fname" style="width:300px" required><br><br>-->

                                <!-- <label for="email"><b>Email</b></label><br>
                <input type="text" placeholder="Enter Email" name="email" id="fname" style="width:1000px" required><br> -->
                <?php
                            }
                        }
                    } else {
                        echo "Error in " . $sql . "
                    " . $conn->error;
                    }
                }
                ?>


                <button type="submit" id="updateBtn" name="updateBtn" value="updateBtn" class="registerbtn">Update</button>
                <button type="reset" class="resetbtn">Reset</button>
            </div>
            <?php
            if (isset($_POST['updateBtn'])) {

                $first = $_POST["firstName"];
                $last = $_POST["lname"];
                $tel = $_POST["phone"];
                $address = $_POST["address"];



                $sql = "UPDATE users SET first_name='$first', last_name='$last', phone_number='$tel', address ='$address' 
                WHERE user_Id= '$userID'";

                if ($conn->query($sql) === TRUE) {
                    echo '<script language = "javascript">';
                    echo 'onUpdateSuccess()';
                    echo '</script>';
                } else {
                    echo '<script language = "javascript">';
                    echo 'alert("Unsuccessfull :( ")';
                    echo '</script>';
                }
                $conn->close();
            }

            ?>
        </form>
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
                <h2 id="footer">&copy; Public health vaccines</h2>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.facebook.com"><img src="../images/fb.jpg" class="icon"></a>&nbsp;&nbsp;<a href="www.instagram.com"><img src="../images/insta.jpg" class="icon"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.web.whatsapp.com"><img src="../images/wh.png" class="icon"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.twitter.com"><img src="../images/tw.png" class="icon"></a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>

    </table>
    <hr>
</body>

</html>