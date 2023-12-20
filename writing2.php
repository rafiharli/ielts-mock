<?php include("config/constants.php"); ?>

<?php 
  if(isset($_GET['name']) && isset($_GET['id']))
  {
    $id = $_GET['id'];
    $name = $_GET['name'];
  }
  else 
  {
      // Handle deletion failure (e.g., display an error page)
      header("location:".SITEURL."error.html");
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Writing 2</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="icon" type="image/x-icon" href="assets/images/icon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/javascript/write2.js"></script>
  </head>
  <body>
    <!-- HEADER -->
    <div class="Container">
      <div class="Header">
      <form action="" method="POST">
        <br />
        <p class="font-head white" style="margin-left: 20px">
          Writing Section 2
          <input class="no-style finish cursor" type="submit" name="submit" value="Finish">
            </input>
        </p>
        <p style="margin-left: 20px;margin-top:5px;">You should spend about 30 minutes on Writing Section 1. <span class="count-time" id="countdown"></span></p> 
        <br />
      </div>

      <!-- ISI -->

      <div class="Content">
        <div class="Wrapper">
          <div class="RightContent">
            <br>
            <h3>PERTANYAAN NYA APAAN GUA JUGA KAGATAU</h3>
            <br>
            <textarea
              class="text-box"
              name="writing2"
              cols="65"
              rows="20"
              placeholder="Write your sentences here"
              style="text-align: justify"
            ></textarea>
            <div id="the-count">
              <span id="current">0</span>
              <span id="maximum">/ 250</span>
            </div>
          </div>
        </form>

        <?php 
          if(isset($_POST['submit']))
          {
            $writing2 = htmlspecialchars($_POST['writing2']);
            
            $sql = "UPDATE writing SET writing2='$writing2' WHERE id='$id'";
    
            $res = mysqli_query($conn,$sql);
           
            if($res==true)
            {
              header("location:".SITEURL."end.php?name=".htmlspecialchars($name));
            }
            else 
            {
                // Handle deletion failure (e.g., display an error page)
                header("location:".SITEURL."error.html");
            }
          }
        ?>

          <div class="LeftContent" style="text-align: justify">
          <br>
            <h2>INI DITULIS APANI GANGERTI</h2>
          <br><br>
          
            <img src="assets/images/writing2.jpg" class="text-center center" style="width:500px" alt="">
          <br>
          <p class="text-center" style="font-style:italic">src: assets/writing2.jpg</p>
          </div>
        </div>
      </div>

      <!-- FOOTER -->
      <div class="footer text-center">
        <p>All rights reserved &copy; IELTS online 2023</p>
      </div>
    </div>
  </body>
</html>
