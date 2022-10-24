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
    <link rel="stylesheet" href="../css/myvaccination.css">

    <script type="text/javascript" src="../js/home.js"></script>

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
            <li class="linein"><a href="../php/aboutUs.php">About Us</a></li>
            <li class="linein"><a href="#">Help</a></li>
            <li class="linein"><a href="#">Contact Us</a></li>
            <li class="linein noAccess" id="noAccess"><a href="../php/login.php">Login/Register</a></li>
            <li class="linein login" id="login"><a href="../php/userProfile.php">Profile</a></li>



        </ul>
    </header>


    <div class="my-vaccinations">
        <center>
            <h1>My Vaccinations</h1>
            <div class="vaccination-table">
                <div class="table-container">
                    <table class="table" style="border: 1;">
                        <thead>
                            <tr>
                                <th>Vaccination ID</th>
                                <th>User ID</th>
                                <th>Dose Number</th>
                                <th>Vaccine Brand</th>
                                <th>Vaccined Place</th>
                                <th>Vaccined Data</th>
                                <th>Batch Number</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1001</td>
                                <td>200027403865</td>
                                <td>1</td>
                                <td>pfizer</td>
                                <td>waters edge</td>
                                <td>22/10/2021</td>
                                <td>1155</td>
                                <td>no allergies</td>


                                <td>
                                    <div class="tb-buttons">
                                        <div class="tb-update">
                                            <button type="button" class="btn btn-outline-secondary" id="tbl-bt">
                                                UPDATE
                                            </button>
                                        </div>

                                        <div class="tb-delete">
                                            <button type="button" class="btn btn-outline-secondary" id="tbl-bt">
                                                DELETE
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
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