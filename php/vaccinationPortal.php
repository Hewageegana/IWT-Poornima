<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Vaccination Portal</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="stylesheet" href="../css/vaccinationPortal.css">

    <script type="text/javascript" src="../js/vaccination.js"></script>
    <script type="text/javascript" src="../js/checkAccess.js"></script>


</head>

<body onload="checkTypeAccess()">
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


    <div class="my-vaccinations">

        <center>
            <h1>Vaccinations Portal</h1>
        </center>

        <center>

            <div class="vaccination-table">
                <div class="table-container">
                    <div class="my-vaccination-add">
                        <a href="../php/addVaccination.php"> <button class="add-vaccination-btn" style="border-radius: 5px; height: 30px;">
                                Add new record
                            </button>
                        </a>
                    </div>
                    <table class="table" style="border: 1;">

                        <thead>
                            <tr>
                                <th>NIC Number</th>
                                <th>Full Name</th>
                                <th>Dose Number</th>
                                <th>Name of Vaccine</th>
                                <th>Place of Vaccined</th>
                                <th>Date of Vaccined</th>
                                <th>Batch Number</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'DbConfig.php';
                            if (isset($_COOKIE['user'])) {

                                $userID = json_decode($_COOKIE['user'])->user_Id;


                                $sql = "SELECT * FROM vaccinations";
                                $result = $conn->query($sql);
                                // echo $conn->query($sql);
                                // $data = json_encode($result->user);
                                if ($result) {
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                            ?>
                                            <tr>
                                                <td><?php echo $row['nic']; ?></td>
                                                <td><?php echo $row['fullname']; ?></td>
                                                <td><?php echo $row['dose_no']; ?></td>
                                                <td><?php echo $row['vaccine_name']; ?></td>
                                                <td><?php echo $row['vaccine_place']; ?></td>
                                                <td><?php echo $row['vaccine_date']; ?></td>
                                                <td><?php echo $row['batch_number']; ?></td>
                                                <td><?php echo $row['remarks']; ?></td>


                                                <td>
                                                    <div class="tb-buttons">
                                                        <div class="tb-update">
                                                            <button type="button" class="btn update-btn" id="tbl-bt" onclick="onUpdate(<?php echo $row['vac_Id']; ?>)">
                                                                UPDATE
                                                            </button>
                                                        </div>

                                                        <div class="tb-delete">
                                                            <a href="delete.php?id=<?php echo $row['vac_Id']; ?>">
                                                                <button type="submit" class="btn delete-btn" id="tbl-bt" name="deleteBtn" value="10" onclick="return confirm('Are you sure?\n Do You Want To Delete This Vaccine Detail ?');">
                                                                    DELETE
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

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
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
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