<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="jbhal_Q7-aPKkFTzbzlOU5i3ix8zft-e2WA1-UuEYRo" />
    <title>IELTS Online Test</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/images/icon.ico">
  </head>
  <body>
    <div class="Container">
      <div class="Header text-center">
        <br>
          <p class="font-head white" style="margin-left: 20px">
            Welcome to IELTS Online Test
          </p>
        <br>
      </div> 
      <div style="margin-left:20%; margin-right:20%;">
      <br>
        <ul class="text-center" style="border:solid; border-width:30px; border-radius:100%; border-color:#7f99c2;">
        <br>
          <li><h1>Content</h1></li>
          <li><h3>> Reading</h3></li>
          <li><h3>> Listening</h3></li>
          <li><h3>> Writing</h3></li>
          <br>
        </ul>
        <br>
      </div>

      <br>
      <p class="text-center">Input Your Name</p>

      <form action="" method="POST">
        <div class="text-center">
          <input required class="input-name" type="text" name="name">
        </div>
      
        <br>

        <div>
          <h2 class="text-center">
            <input type="submit" style="font-weight:bold;" class="no-style start cursor" name="submit" value="Start Test"></input>
          </h2>
        </div>
      </form>

      <!-- Backend PHP -->
      

      <!-- FOOTER -->
    <div class="footer text-center">
      <p>All rights reserved &copy; IELTS online 2023</p>
    </div>
    <?php 
        if(isset($_POST['submit']))
        {
          $name = $_POST['name'];
          
          $sql = "INSERT INTO reading SET name='$name'";
          $res = mysqli_query($conn,$sql);

          $sql1 = "INSERT INTO listening SET name='$name'";
          $res1 = mysqli_query($conn,$sql1);

          $sql2 = "INSERT INTO writing SET name='$name'";
          $res2 = mysqli_query($conn,$sql2);

          if($res==true && $res1==true && $res2==true)
          {
            header("location:".SITEURL."reading1.php?name=".htmlspecialchars($name));
          }
          else
          {
            header("location:".SITEURL."error.html");
          }
        }
      ?>
  </body>
</html>
