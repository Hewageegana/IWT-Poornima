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

    <script type="text/javascript" src="../js//home.js"></script>

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
                <img src='../images/av.png' alt="logo Image">
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
            <li class="linein login" id="login"><a>Profile</a></li>



        </ul>
    </header>

    
    <div class="block-1">
        <center>
            <div class="reach-our-team">
                <h1>Reach Our Team</h1>
            </div>
        </center>
        <div class="aboutus-card-container">
            <div class="aboutus-card">
                <div class="col-1">
                    <div class="logo-cover">
                        <img src='../images/talk.jpg' alt="logo Image" class="card-logo">
                    </div>
                    <div class="body-cover">
                        <div class="card-header">
                            <h3>Talk to get vaccine</h3>
                        </div>

                        <div class="card-body">
                            <p>Chat with our team to discover how product can work best for you</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="aboutus-card2">
                <div class="col-1">
                    <div class="logo-cover">
                        <img src='../images/support.jpg' alt="logo Image" class="card-logo">

                    </div>
                    <div class="body-cover">
                        <div class="card-header">
                            <h3>Contact for support</h3>
                        </div>

                        <div class="card-body">
                            <p>We are waiting to help you... so do not hesitate to reach out..
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <hr class="about-hr">

        <div class="about-us-informations">
            <div class="contact-details">
                <div class="head-q">
                    <h1>Headquarters.</h1>
                </div>
                <div class="about-address">
                    <p> <i class="fa fa-home">&nbsp; &nbsp;Colombo | Sri - Lanka 117,<br>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Gall Road, Colombo </i></p>
                </div>
                <div class="about-phone">
                    <p> <i class="fa fa-phone">&nbsp; &nbsp;011 - 2 222 222</i></p>
                </div>
                <div class="about-gmail">
                    <p><i class="fa fa-envelope">&nbsp; &nbsp;contact.info@gmail.com</i></p>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.992153799242!2d79.85762960154983!3d6.891540963084806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bdc5d527d75%3A0x60d7c8e804c7e977!2s117%20Galle%20Rd%2C%20Colombo%2000400!5e0!3m2!1sen!2slk!4v1666528593982!5m2!1sen!2slk" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <hr class="about-hr">
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