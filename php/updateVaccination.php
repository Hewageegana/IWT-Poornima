<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="stylesheet" href="../css/addVaccine.css">
    <link rel="stylesheet" href="../css/myvaccination.css">

    <script type="text/javascript" src="../js/vaccination.js"></script>
    <script type="text/javascript" src="../js/checkAccess.js"></script>

    <title>Document</title>

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
    <div class="main-wrapper">
        <div class="main">
            <form action="updateVaccination.php" method="post">
                <?php
                require 'DbConfig.php';
                if (isset($_COOKIE['VacID'])) {

                    $vacID = $_COOKIE['VacID'];


                    $sql = "SELECT * FROM vaccinations WHERE vac_Id= '" . $vacID . "'";
                    $result = $conn->query($sql);
                    // echo $conn->query($sql);
                    // $data = json_encode($result->user);
                    if ($result) {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                ?>
                                <div class="container">
                                    <h2>Update Vaccine Details</h2>
                                    <hr />
                                    <label for="FullName"><b>Full Name</b></label>
                                    <input type="text" name="FullName" id="FullName" placeholder="Full Name" value="<?php echo $row['fullname']; ?>" required>

                                    <label for="NicNumber"><b>Nic Number</b></label>
                                    <input type="text" name="NicNumber" id="NicNumber" placeholder="Nic Number" value="<?php echo $row['nic']; ?>" required>

                                    <label for="DoseNumber"><b>Dose Number</b></label>
                                    <input type="text" name="DoseNumber" id="DoseNumber" placeholder="Dose Number" value="<?php echo $row['dose_no']; ?>" required>

                                    <label for="NameofVaccine"><b>Name of Vaccine</b></label>
                                    <input type="text" name="NameofVaccine" id="NameofVaccine" placeholder="Name of Vaccine" value="<?php echo $row['vaccine_name']; ?>" required>

                                    <label for="PlaceofVaccined"><b>Place of Vaccined</b></label>
                                    <input type="text" name="PlaceofVaccined" id="PlaceofVaccined" placeholder="Place of Vaccined" value="<?php echo $row['vaccine_place']; ?>" required>

                                    <label for="DateofVaccined"><b>Date of Vaccined</b></label>
                                    <input type="date" name="DateofVaccined" id="DateofVaccined" placeholder="Date of Vaccined" value="<?php echo $row['vaccine_date']; ?>" required>

                                    <label for="BatchNumber"><b>Batch Number</b></label>
                                    <input type="text" name="BatchNumber" id="BatchNumber" placeholder="Batch Number" value="<?php echo $row['batch_number']; ?>" required>

                                    <label for="Remarks"><b>Remarks</b></label>
                                    <input type="text" name="Remarks" id="Remarks" placeholder="Remarks" value="<?php echo $row['remarks']; ?>" required>

                                    <button type="submit" class="button" name="save" value="save">UPDATE</button>

                    <?php
                            }
                        }
                    } else {
                        echo "Error in " . $sql . "
                    " . $conn->error;
                    }
                }
                    ?>
                                </div>
            </form>
            <?php
            require './DbConfig.php';
            if (isset($_POST['save'])) {

                $fullName = $_POST["FullName"];
                $NicNumber = $_POST["NicNumber"];
                $DoseNumber = $_POST["DoseNumber"];
                $NameofVaccine = $_POST["NameofVaccine"];
                $PlaceofVaccined = $_POST["PlaceofVaccined"];
                $DateofVaccined = $_POST["DateofVaccined"];
                $BatchNumber = $_POST["BatchNumber"];
                $Remarks = $_POST["Remarks"];
                $createdDate = date('Y-m-d H:i:s');
                $newDate = date("Y-m-d", strtotime($DateofVaccined));

                // $sql = "INSERT INTO vaccinations (vac_Id , fullname, dose_no, vaccine_name, vaccine_place, vaccine_date, batch_number, remarks, nic, created_date)
                //                     VALUES (0,'$fullName','$DoseNumber','$NameofVaccine',$PlaceofVaccined,'$newDate','$BatchNumber','$Remarks','$NicNumber', '$createdDate' )";

                $sql = "UPDATE vaccinations SET fullname='$fullName', dose_no='$DoseNumber', vaccine_name='$NameofVaccine', vaccine_place ='$PlaceofVaccined', vaccine_date ='$newDate', batch_number ='$BatchNumber' , remarks ='$Remarks' , nic ='$NicNumber'   
                WHERE vac_Id= '$vacID'";

                if ($conn->query($sql) === TRUE) {
                    echo '<script language = "javascript">';
                    echo 'onUpdateSuccuess()';
                    echo '</script>';
                } else {
                    echo '<script language = "javascript">';
                    echo 'alert("Unsuccessfully :( ")';
                    echo '</script>';
                    echo $conn->query($sql);
                }
                //             else {
                //                 echo "Error in " . $sql . "
                // " . $conn->error;
                //             }
                $conn->close();
            }
            ?>
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