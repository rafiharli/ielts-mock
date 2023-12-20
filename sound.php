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
    <title>Sound Check</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" type="image/x-icon" href="assets/images/icon.ico">
  </head>
  
  <body>
    <!-- HEADER -->
    <div class="Container">
      <div class="Header">
        <br />
        <p class="font-head white" style="margin-left: 20px">
          Listening Section
        </p>
        <br />
      </div>

      <!-- ISI -->
      <audio id="player" src="assets/audio/canon.mp3"></audio>
      <br><br><br>
      <div class="result-item text-center" style="width:50%;margin:auto;">
        <p><strong>Check your sound system first! Make sure your audio is unmute!</strong></p>
        <br />
        <button
          class="start cursor"
          onclick="document.getElementById('player').play()"
        >
          Check Sound
        </button>
        <br /><br />
        <p style="color: red">
          <strong>Warning! Audio is autoplay after clicked the button!</strong>
        </p>
        <br />
        <a class="no-style" href="listening.php?id=<?php echo htmlspecialchars($id); ?>&name=<?php echo htmlspecialchars($name); ?>">
        <button class="start cursor">
          <i style="font-size: 20px" class="fa"
            >&#xf04b;</i
          >
        </button></a>
        <br /><br />
        <p><strong>After click the button you'll be redirect to listening test page.</strong></p>
      </div>

      <!-- FOOTER -->
      <div class="footer text-center">
        <p>All rights reserved &copy; IELTS online 2023</p>
      </div>
    </div>
  </body>
</html>
