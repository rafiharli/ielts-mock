<?php include('../config/constants.php'); ?>


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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result for <?php echo htmlspecialchars(ucwords($name)); ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/pinkicon.ico">
</head>
<body>
    <div class="Container" style="overflow: scroll;background-color:pink">
        <div class="Header text-center">
        <form method="post" action="delete_result.php"><p class="font-head white" style="margin-bottom:10px; margin-top:10px;margin-left:20px;">
          Result for <?php echo htmlspecialchars(ucwords($name)); ?>
            
                    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                    <input style="cursor:pointer;" class="finish" type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete this result?')">
            
          </p></form>
        </div>
        <br>
        
        <?php 
            include('show_read.php');
            include('show_list.php');
            include('show_write.php');
        ?>


    </div>

    <div class="footer text-center">
      <p>All rights reserved &copy; IELTS online 2023</p>
    </div>
<!-- <form method="post" action="delete_result.php">
                    <input type="hidden" name="result_id" value="<php echo $row['id']; ?>">
                    <input class="finish" type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete this result?')">
                    </form>
                -->
</body>
</html>