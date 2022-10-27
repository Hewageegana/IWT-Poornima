<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addMyVaccine.css">
    <!-- <link rel="stylesheet" href="../css/home.css"> -->
    <link rel="stylesheet" href="../css/header.css">
    <script type="text/javascript" src="../js/checkAccess.js"></script>
    <title>Document</title>
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
                <li class="linein"><a href="#">View Inventory</a></li>
                <li class="linein"><a href="./aboutUs.php">About Us</a></li>
                <li class="linein"><a href="#">Help</a></li>
                <li class="linein"><a href="#">Contact Us</a></li>
                <li class="linein login" id="login"><a href="../php/userProfile.php">Profile</a></li>



            </ul>
        </header>
        <div class="main-wrapper">
            <div class="main">
                <form action="login.php" method="post">

                    <div class="container">
                        <h2>Add New Vaccine Details</h2>
                        <hr/>
                        <label for="DoseNumber"><b>Dose Number</b></label>
                        <input type="text" name="DoseNumber" id="DoseNumber" placeholder="Dose Number" required>

                        <label for="NameofVaccine"><b>Name of Vaccine</b></label>
                        <input type="text" name="NameofVaccine" id="NameofVaccine" placeholder="Name of Vaccine" required>

                        <label for="PlaceofVaccined"><b>Place of Vaccined</b></label>
                        <input type="text" name="PlaceofVaccined" id="PlaceofVaccined" placeholder="Place of Vaccined" required>
                        <label for="DateofVaccined"><b>Date of Vaccined</b></label>
                        <input type="text" name="DateofVaccined" id="DateofVaccined" placeholder="Date of Vaccined" required>
                        <label for="BatchNumber"><b>Batch Number</b></label>
                        <input type="text" name="BatchNumber" id="BatchNumber" placeholder="Batch Number" required>
                        <label for="Remarks"><b>Remarks</b></label>
                        <input type="text" name="Remarks" id="Remarks" placeholder="Remarks" required>
                        <button type="submit" class="button" name="login" value="login">SAVE</button>

                    </div>

                    <!-- <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div> -->
                </form>
            </div>
        </div>
    </div>
</body>

</html>