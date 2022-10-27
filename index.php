<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Vaccination Portal</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/card.css">
    <script type="text/javascript" src="./js/home.js"></script>

</head>

<body onload="checkAccess()">

    <div class="header">
        <div class="upper-header">
            <div class="log-cover">
                <img src='./images/logo.png' alt="logo Image" class="logo">
            </div>
            <div class="search-bar">
                <div class="search-bar-wrapper">
                    <input type="text" placeholder="Search" class="search-input" />
                </div>
            </div>
            <div class="empty-div">

            </div>
            <div class="avatar-cover">
                <img src='./images/av.png' alt="logo Image" class="avatar">
            </div>
        </div>

    </div>

    <header class="header1">

        <i class="fa fa-bars menu-toggle"></i>

        <ul class="nav">

        
            <li class="linein"><a href="homepage.html">Home</a></li>
            <li class="linein"><a href="./php/vaccinationPortal.php">Vaccination Portal</a></li>
            <li class="linein"><a href="./php/aboutUs.php">About Us</a></li>
            <li class="linein"><a href="#">Help</a></li>
            <li class="linein"><a href="#">Contact Us</a></li>
            <li class="linein noAccess" id="noAccess"><a href="./php/login.php">Login/Register</a></li>
            <li class="linein login" id="login"><a href="./php/userProfile.php">Profile</a></li>



        </ul>
    </header>
    <div class="block-1">
        <div class="vaccine-header">
            <h1>How Do I Get The Vaccine ?</h1>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="col-1">
                    <div class="logo-cover">
                        <img src='./images/children.jpg' alt="logo Image" class="card-logo">
                    </div>
                    <div class="body-cover">
                        <div class="card-header">
                            <h3>Vaccine for Children</h3>
                        </div>

                        <div class="card-body">
                            <p>Kids ages 6 month and older can now recieve the pediatric Pfizer-BioNTech or
                                Moderna COVID - 19 vaccine, which has been proven safe and effective in protecting
                                them from infection and illness from the virus</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card2">
                <div class="col-1">
                    <div class="logo-cover">
                        <img src='./images/old.jpg' alt="logo Image" class="card-logo">

                    </div>
                    <div class="body-cover">
                        <div class="card-header">
                            <h3>Booster Shots</h3>
                        </div>

                        <div class="card-body">
                            <p>Everyone 5 years older and should get their first COVID - 19 booster shot if it has been
                                at least 2 month since receiving J&J or 5 month since receiving a second shot of Pfizer or Moderna vaccine
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="block-2">
        <div class="block2-heading">
            <h1>Latest Vaccine Updates & Resources</h1>
        </div>
        <div class="block-2-cards">
            <div class="cards">
                <div class="image">
                    <img src='./images/kids.jpeg' alt="logo Image" class="card-logo" style="height: 250px;">

                </div>
                <div class="title">
                    <h3>Which vaccines are approved for kids</h3>
                </div>
                <div class="des">
                    <p>Kids ages 6 month and older can now recieve the pediatric Pfizer-BioNTech or
                        Moderna COVID - 19 vaccine, which has been proven safe and effective in protecting
                        them from infection and illness from the virus</p>
                    <button class="btn-lower">Read more</button>
                </div>

            </div>
            <div class="cards">
                <div class="image">
                    <img src='./images/date.jpg' alt="logo Image" class="card-logo" style="height: 250px;">

                </div>
                <div class="title">
                    <h3>Connecticut COVID-19 Vaccination Date Tracker</h3>
                </div>
                <div class="des">
                    <p>Kids ages 6 month and older can now recieve the pediatric Pfizer-BioNTech or
                        Moderna COVID - 19 vaccine, which has been proven safe and effective in protecting
                        them from infection and illness from the virus</p>
                    <button class="btn-lower">Read more</button>
                </div>

            </div>

            <div class="cards">
                <div class="image">
                    <img src='./images/mask.jpg' alt="logo Image" class="card-logo" style="height: 250px;">

                </div>
                <div class="title">
                    <h3>Mask - Wearing Rules by vaccination status</h3>
                </div>
                <div class="des">
                    <p>Kids ages 6 month and older can now recieve the pediatric Pfizer-BioNTech or
                        Moderna COVID - 19 vaccine, which has been proven safe and effective in protecting
                        them from infection and illness from the virus</p>
                    <button class="btn-lower">Read more</button>
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
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.facebook.com"><img src="./images/fb.jpg" class="icon"></a>&nbsp;&nbsp;<a href="www.instagram.com"><img src="./images/insta.jpg" class="icon"></a>&nbsp;&nbsp;<a href="www.web.whatsapp.com"><img src="./images/wh.png" class="icon"></a>&nbsp;&nbsp;<a href="www.twitter.com"><img src="./images/tw.png" class="icon"></a>&nbsp;&nbsp;</td>
        </tr>

    </table>
    <hr>

</body>

</html>