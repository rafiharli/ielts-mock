<?php include("config/constants.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="icon" type="image/x-icon" href="assets/images/icon.ico">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="Container">
    <br><br><br><br><br><br><br><br><br><br><br>
      <div class="Header text-center">
        
          <p class="font-head white" style="margin: 20px; margin-top:30px;">
          Congratulations to<strong>
            <?php 
              if(isset($_GET['name']))
              {
                $name = $_GET['name'];
                if($name == '')
                {
                  echo '"whoever you are:)"';
                }
                else
                {
                  echo '"'.htmlspecialchars(ucwords($name)).'"';
                }
              }
              else 
              {
                  // Handle deletion failure (e.g., display an error page)
                  header("location:".SITEURL."error.html");
              }
            ?></strong> for completing the online IELTS exam! Hooray! 
          </p>
        <br>
      </div>
      <br><br>
      <div class="text-center">
        <h2><a class="no-style" href="index.php">Back to Home</a></h2>
      </div>
    </div>
</body>
</html>