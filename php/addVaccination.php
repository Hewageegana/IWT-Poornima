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
    <link rel="stylesheet" href="../css/addVaccine.css">
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
    <div class="add-vaccine-main">

        <div class="add-form">

            <form>
                <div>
                    <label for="phone"><b>User ID :</b></label><br>
                    <input type="text" class="add-input" />
                </div><br>
                <div>
                    <label for="phone"><b>Full Name :</b></label><br>
                    <input type="text" class="add-input" />
                </div><br>
                <div>
                    <label for="phone"><b>NIC Number :</b></label><br>
                    <input type="text" class="add-input" />
                </div><br>

                <div>
                    <label for="phone"><b>Age :</b></label><br>
                    <input type="text" class="add-input" />
                </div><br>

                <div>
                    <label for="phone"><b>Dose Number :</b></label><br>
                    <input type="text" class="add-input" id="do-da" />
                </div><br>


                <div>
                    <label for="phone"><b>Vaccine Brand :</b></label><br>
                    <input type="text" class="add-input" />
                </div><br>


                <div>
                    <label for="phone"><b>Vaccine Place :</b></label><br>
                    <input type="text" class="add-input" />
                </div><br>
                <div>
                    <label for="phone"><b>Vaccine Date :</b></label><br>
                    <input type="date" class="add-input" id="do-da" />
                </div><br>



                <div>
                    <label for="phone"><b>Batch Number :</b></label><br>
                    <input type="text" class="add-input" />
                </div><br>

                <div>
                    <label for="phone"><b>Remarks :</b></label><br>
                    <textarea type="text" class="add-input" style="height: 100px;"></textarea>
                </div><br>
                <button type="submit" id="updateBtn" name="updateBtn" value="updateBtn" class="add-vaccine-btn">Add</button>
            </form>

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