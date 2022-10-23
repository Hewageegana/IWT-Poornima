<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <script type="text/javascript" src="../js/checkAccess.js"></script>
    <script type="text/javascript" src="../js/profile.js"></script>

</head>

<body onload="checkAccess()">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                }
                else{ 
                    echo "Error in ".$sql."
                    ".$conn->error; }

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
                <button type="button" class="resetbtn" style="background-color: #2962FF">My Vaccination</button>
                <button type="button" class="resetbtn" style="background-color: #2962FF">Update Profile</button>
                <button type="button" class="resetbtn" style="background-color: #2962FF">Change Password</button>
                <button type="button" class="resetbtn" style="background-color: #D50000" onclick="logOut()">Log out</button>

            </div>
        </div>
    </div>
    </div>

</body>

</html>