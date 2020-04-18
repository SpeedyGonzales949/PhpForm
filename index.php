<?php
include("loginserv.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylesheets/Form.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="hero">
      <header>
        <nav>
          <h3 class="title">Star Dust</h3>
          <a class="home" href="">Home</a>
          <a class="redirect" href="">Get Started</a>
          <a class="about" href="">About</a>
          <a class="contact" href="">Contact Us</a>
        </nav>
      </header>

      <div class="form-box">
      
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" class="toggle-btn" onclick="login()">
            Login
          </button>
          <button type="button" class="toggle-btn" onclick="register()">
            Register
          </button>
        </div>
        <div class="social-icons">
          <img src="stylesheets/img/fb.png" alt="" />
          <img src="stylesheets/img/tw.png" alt="" />
          <img src="stylesheets/img/gp.png" alt="" />
        </div>
        <?php if($error=="Succesfully registered")
        echo'<span style="top:150px;color:green;font-size:18px;left:50%;transform:translateX(-50%)">Succesfully registered</span>';
        else
        echo'<span style="top:150px;color:red;font-size:18px;left:50%;transform:translateX(-50%)">Invalid Data</span>';
        ?>
        
       
        <form method="post" id="login" action="" class="input-group">
          <input
            type="text"
            class="input-field"
            placeholder="User Id"
            name="user"
            required
          />
          <input
            type="password"
            class="input-field"
            placeholder="Enter Password"
            name="pass"
            required
          />
          <input type="checkbox" class="check-box" /><span
            >Remember Password</span
          >
          <input type="submit" name="submit" value="Login"class="submit-btn"/>
         
        </form>
        <form method="post" id="register" action="#" class="input-group">
          <input
          name="reguser"
            type="text"
            class="input-field"
            placeholder="User Id"
            required
          />
          <input
          name="regemail"
            type="email"
            class="input-field"
            placeholder="Enter Email"
            required
          />
          <input
          name="regpass"
            type="text"
            class="input-field"
            placeholder="Enter Password"
            required
          />
          <input type="checkbox" class="check-box" required/><span
            >I agree to Terms and Conditions</span
          >
          <input type="submit" name="regsubmit" value="Register" class="submit-btn">
         
        </form>
      </div>
    </div>
    
    <script src="js/form.js"></script>
  </body>
</html>
