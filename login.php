<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link href="login1.css?<?=filemtime("login1.css")?>" rel="stylesheet" type="text/css" />
    <title>Document</title>
  </head>
  <body>
    <section class="login">
      </div>
      <div class="loginform">
        <div class="form">
          <h1>log in to aroma</h1>
         <h4><?php
                    if (isset($_SESSION['login'])){
                        echo $_SESSION['login'];
                       unset($_SESSION['login']);
                        
                    }
                    ?>
                   
                    </h4>
          <form action="login.inc.php" method="POST">
          <div class="textField">
          <input type="text" name="userName" id="" required>
    
          <label for="">username</label>
          </div>
          <div class="textField">
          <input type="password" name="password" id="" required>
       
          <label for="">password</label>
          </div>
          
          <input type="submit" value="submit" class="submitBtn" name="submit">
          <h5>don't have account? <span> <a href="signup.php"> sign up</a></span></h5>
          <h5><a href="inde.php">back to home</a> </h5>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
