<html>

<head>
  <title>My Portfolio</title>

<style>
    * {
            font-family: rosemary;
        }

body{
  background: url('4213502.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  display: flex;
  flex-direction: column;
  align-content: center;
  align-items: center;
  justify-content: flex-start;
  padding: 0;
  margin:0;
  height:100vh;
  justify-content:space-between;
}
a{
  text-decoration: none;
  color:white;
}
a:hover{
  text-decoration: none;
  color:black;
}

/* text in page */
P{
  align-items: center;
  color: rgb(184, 184, 184);
  font-style: italic;
}
    /* Profile img */
    div {
      height: auto;
      width: auto;
      border-radius: 5px;
      border-color: blue;
      border-width: 5px;
    }

   
    h3{
      font-weight: 100;
      color: rgb(26, 139, 245);
    }
    /* button{
      border:none;
      color: white;
      font-family: Rosemary;  
      background-color: black;
      border-radius: 7px;
      max-width: 50%;
      height: auto;
      transition: 0.2s;
      transition-delay: 0.2ms;
      border:NONE;
     
    }
    button:hover{
      border:none;
      background-color: white;
      transition: 0.2s;
      transition-delay: 0.2ms;
      max-width: 50%;
      height: auto;
    } */

    button {
            color: white;
            border-color: white;
            background-color: rgb(19, 19, 19);
            border-style: thin;
            font-family: Rosemary;
            border-radius: 10px;
            transition: 0.2s;
            transition-delay: 0.2ms;
            padding:10px;
            width:15%;

        }

        button:hover {
           color: black;
            border-color: black;
            background-color:white;
            transition: 0.5s;
            transition-delay: 0.2ms;
        }
.social{
  height:15px;
  width:5px;
}
    .img {
      border-radius: 15px;
      border-color: white;
      border-width: 3px;
      max-width: 20%;
      height: auto;
      clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);
    }
    .img:hover {
      border-radius: 15px;
      max-width: 22%;
      height: auto;
      transition: 0.2s;
      transition-delay: 0.2ms;
      clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);
      border-color: rgb(86, 5, 238);
      border-width: 5px;
    }
    
    .content {
      position: relative bottom 0;
      background: rgba(0, 0, 0, 0.5);
      color: #f1f1f1;
      width: 100%;
      padding: 20px;
    }

 

  .maindiv{
        display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;
  }
  .flex{
     display: flex;
    flex-direction: column;
    align-content: center;
    align-items: center;
    justify-content: flex-start;
  }
  /* header */
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
</head>

<body>

<!------------------------------------------ Navigation Bar Start ------------------------------------------>

<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!"></a>
    </div>

    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="#!">Home</a>
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
<!------------------------------------------ Navigation Bar End ------------------------------------------>
<!------------------------------------------ Content ------------------------------------------>
<section class="flex">

  <marque><h3>Hi There!!!</h3></marque>
  <p>Welcome To My Portfolio.</p>
  <p>I am Mayur Patel and I am a Web developer :)</p>

  <div class="maindiv">
    <image class="img" src="profile.png" alt="Oh no" >
      <br>
    </div>
    <button><a  href="contact.php">Contact Me</a></button>
</section>
<!------------------------------------------ Content End ------------------------------------------>
<!------------------------------------------ Footer Start ------------------------------------------>
    <footer class="footer-distributed">

        <div class="footer-right">

            <a href="#"><i class="fa fa-instagram"></i></a>
            <img class="social" href="" src="instagram.png"></img>
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
<!------------------------------------------ Footer End ------------------------------------------>
<!------------------------------------------ JS Start ------------------------------------------>
<script>
  (function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery
</script>
<!------------------------------------------ JS End ------------------------------------------>      
</body>

</html>