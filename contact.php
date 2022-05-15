<?php
if (isset($_GET['message']) && isset($_GET['email'])) {
    echo "";
    $server = "sql102.epizy.com";
    $username = "epiz_31692158";
    $password = "YG6hqyYr4FXF";
    $database = "epiz_31692158_portfolio";

    $conn = mysqli_connect($server, $username, $password, $database);

    $sql = "INSERT INTO `contact`( `email`, `message`) VALUES ('" . $_GET['email'] . "','" . $_GET['message'] . "');";

    if (mysqli_query($conn, $sql)) {
        echo ("<script>alert('Message sent')</script>");
    } else {
        echo ("<script>alert('Error')</script>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <style media="screen">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            color: white;
            font-family: Rosemary;
            background: url(4213502.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
            justify-content:space-between;
            padding: 0;
            margin: 0;
            width: 100vw;
        }

        button {
            
            color:white;
            border-color: white;
            background-color: rgb(19, 19, 19);
            font-family: Rosemary;
            border-style: thin;
            border-radius: 10px;
            transition: 0.2s;
            transition-delay: 0.2ms;
            padding:10px;
            width:60%;

        }

        button:hover {
            border-color: black;
            color:black;
            background-color:white;
            transition: 0.5s;
            transition-delay: 0.2ms;
        }

        input {
            border-radius: 5px;
            border-style: thin;
            font-family: Rosemary;
            border: none;
        }

        textarea {
            border-radius: 5px;
            border-style: thin;
            font-family: Rosemary;
            border: none;
            width: 100%;
            height:auto;
            font-size:15px;
        }

        div {
            top: 20%;
        }

        table {
            max-height: 0%;
            max-width: 20%;
            position: flex;
            border-style: thin;
            border-radius: 10px;
            background-color: rgb(11 118 241);
        }

        td {
            padding: 30px;
        }

        input {
            padding: 10px;
            font-size:15px;
        }

.lablefont{
  font-size:20px;
  color:black;
}

/* NAV STRT */
.navigation {
  height: 70px;
  width: 100%;
  background: #262626;
}
.brand {
  position: absolute;
  padding-left: 20px;
  float: left;
  line-height: 70px;
  text-transform: uppercase;
  font-size: 1.4em;
}
.brand a, .brand a:visited {
  color: #ffffff;
  text-decoration: none;
}
.nav-container {
  max-width: 1000px;
  margin: 0 auto;
}
nav {
  float: right;
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
nav ul li {
  float: left;
  position: relative;
}
nav ul li a, nav ul li a:visited {
  display: block;
  padding: 0 20px;
  line-height: 70px;
  background: #262626;
  color: #ffffff;
  text-decoration: none;
}
nav ul li a:hover, nav ul li a:visited:hover {
  transition: 0.2s;
  transition-delay: 0.2ms;
  background: #2581DC;
  color: #ffffff;
}
nav ul li a:not(:only-child):after, nav ul li a:visited:not(:only-child):after {
  padding-left: 4px;
  content: '';
}
nav ul li ul li {
  min-width: 190px;
}
nav ul li ul li a {
  padding: 15px;
  line-height: 20px;
}
.nav-dropdown {
  position: absolute;
  display: none;
  z-index: 1;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}
/* Mobile navigation */
.nav-mobile {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  background: #262626;
  height: 70px;
  width: 100%;
}
@media only screen and (max-width: 798px) {
  .nav-mobile {
    display: block;
  }
  nav {
    width: 100%;
    padding: 70px 0 15px;
  }
  nav ul {
    display: none;
  }
  nav ul li {
    float: none;
  }
  nav ul li a {
    padding: 15px;
    line-height: 20px;
  }
  nav ul li ul li a {
    padding-left: 30px;
  }
  .nav-dropdown {
    position: static;
  }
}
@media screen and (min-width: 799px) {
  .nav-list {
    display: block !important;
  }
}
#nav-toggle {
  position: absolute;
  left: 18px;
  top: 22px;
  cursor: pointer;
  padding: 10px 35px 16px 0px;
}
#nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 5px;
  width: 100%;
  background: #ffffff;
  position: absolute;
  display: block;
  content: '';
  transition: all 300ms ease-in-out;
}
#nav-toggle span:before {
  top: -10px;
}
#nav-toggle span:after {
  bottom: -10px;
}
#nav-toggle.active span {
  background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
  top: 0;
}
#nav-toggle.active span:before {
  transform: rotate(45deg);
}
#nav-toggle.active span:after {
  transform: rotate(-45deg);
}
article {
  max-width: 1000px;
  margin: 0 auto;
  padding: 10px;
}

/* Nav END */

        .footer-distributed {
            background-color: #292c2f;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: normal 16px sans-serif;
            padding: 45px 50px;
            
        }

        .footer-distributed .footer-left p {
            color: #8f9296;
            font-size: 14px;
            margin: 0;
        }

        /* Footer links */

        .footer-distributed p.footer-links {
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            margin: 0 0 10px;
            padding: 0;
            transition: ease .25s;
        }

        .footer-distributed p.footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
            transition: ease .25s;
        }

        .footer-distributed .footer-links a:before {
            content: "·";
            font-size: 20px;
            left: 0;
            color: #fff;
            display: inline-block;
            padding-right: 5px;
        }

        .footer-distributed .footer-links .link-1:before {
            content: none;
        }

        .footer-distributed .footer-right {
            float: right;
            margin-top: 6px;
            max-width: 180px;
        }

        .footer-distributed .footer-right a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background-color: #33383b;
            border-radius: 2px;
            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
            margin-left: 3px;
            transition: all .25s;
        }

        .footer-distributed .footer-right a:hover {
            transform: scale(1.1);
            -webkit-transform: scale(1.1);
        }

        .footer-distributed p.footer-links a:hover {
            text-decoration: underline;
        }

        /* Media Queries */

        @media (max-width: 600px) {

            .footer-distributed .footer-left,
            .footer-distributed .footer-right {
                text-align: center;
            }

            .footer-distributed .footer-right {
                float: none;
                margin: 0 auto 20px;
            }

            .footer-distributed .footer-left p.footer-links {
                line-height: 1.8;
            }
        }
        
    </style>
</head>

<body>

<!-- navigation -->

<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!"></a>
    </div>

    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="#!">About</a>
        </li>
        <li>
          <a href="#!">Services</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">Web Design</a>
            </li>
            <li>
              <a href="#!">Web Development</a>
            </li>
            <li>
              <a href="#!">Graphic Design</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">Work</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">Web Design</a>
            </li>
            <li>
              <a href="#!">Web Development</a>
            </li>
            <li>
              <a href="#!">Graphic Design</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</section>

<!-- navigation end -->

    <form action="contact.php" method="GET">
        <table>
            <tr>
                <td class="lablefont">Email</td>
                <td><input required type="email" name="email" id="email" placeholder="Email"></td>
            </tr>
            <tr>
                <td class="lablefont"> Message </td>
                <td><textarea rows="10" required name="message" id="message" placeholder="Type Your Thoughts "></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit">Send</button></td>
            </tr>
        </table>
    </form>



           <footer class="footer-distributed">

        <div class="footer-right">

            <a href="#"><i class="fa fa-insta"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

        <div class="footer-left">

            <p class="footer-links">
            <a class="link-1" href="home.php">Home</a>
            <a href="aboutme.php">About</a>
            <a href="contact.php">Contact</a>
            </p>
    </footer>
    
</body>

</html>