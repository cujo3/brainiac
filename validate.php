<!doctype html>
<html>
  <head>
    <title>Password validation</title>
    <meta charset="utf-8">
  </head>
  
  <body>
    <?php
      if (isset($_POST['submit'])) {
        if ($_POST['password'] && $_POST['cpassword']) {
          $password = $_POST['password'];
          $cpassword = $_POST['cpassword'];
          // check if the password fields are the same
          if ($password !== $cpassword) {
            
          } else {
            print 'Form submission complete!';
          }
        }
      }
    ?>
    <form method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
      <label for="password">Enter your password</label><br>
      <input type="password" name="password" id="password"><br>
      <label for="password">Confirm password</label><br>
      <input type="password" name="cpassword" id="cpassword"><br>
      <input type="submit" name="submit" value="Submit">
    </form>
    
    
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          var password = $('#password').val();
          var conf_password = $('#cpassword').val();
          alert (password);
          //if (password !== conf_password) {
          //  event.preventDefault();
          //  password.css('border', 'red');
          //  conf_password.css('border','red');
          //}
        
      });
    </script>
  </body>
</html>






