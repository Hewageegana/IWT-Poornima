<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
	<script type="text/javascript" src="../js/register.js"></script>
</head>

<body>
    <div>
        <h5>Welcome to the cool rentals</h5>

        <form method="POST" action="register.php" onsubmit="return cheakpassword()">
            <div class="regis">
                <h6>Registration form</h6>

                <hr>

                <label for="fname"><b>First Name:</b></label><br>
                <input type="text" id="fname" name="fname" style="width:1000px" placeholder="First Name" required><br />

                <label for="fname"><b>Last Name:</b></label><br>
                <input type="text" id="fname" name="lname" style="width:1000px" placeholder="Last Name" required><br />

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
                <input type="tel" id="fname" name="phone" pattern="[0-9]{10}" style="width:1000px" placeholder="Phone number" required><br>

                <label for="address"><b>Address :</b></label><br>
                <textarea id="fname" name="address" rows="10" cols="50" style="width:500px" placeholder="Address" ;required></textarea><br>

                <!--<label for="dob"><b>Choose your DOB:</b></label><br>
    <input type="date" name="day" id="fname" style="width:300px" required><br><br>-->

                <label for="email"><b>Email</b></label><br>
                <input type="text" placeholder="Enter Email" name="email" id="fname" style="width:1000px" required><br>

                <label for="psw"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="Pass" id="Pass" style="width:1000px" required><br>
                <input type="checkbox" onclick="myFunction()">Show Password <br><br>

                <label for="psw-repeat"><b>Repeat Password</b></label><br>
                <input type="password" placeholder="Repeat Password" name="rePass" id="rePass" style="width:1000px" required><br>
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
                $email = $_POST["email"];
                $psw = $_POST["Pass"];
                $isActive = true;
                $userType = 1;
                $createdDate = date('Y-m-d H:i:s');



                $sql = "INSERT INTO users (user_Id, first_name, last_name, gender, phone_number, address, email, password, isActive,  user_type, created_date)
	            VALUES (0,'$first','$last','$Gender',$tel,'$address','$email','$psw','$isActive', '$userType', '$createdDate' )";



                if ($conn->query($sql) === TRUE) {
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

            ?>
        </form>
    </div>
</body>

</html>