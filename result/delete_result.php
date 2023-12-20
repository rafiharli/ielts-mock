<?php
include('../config/constants.php');

if (isset($_POST['delete']) && isset($_POST['name']) && isset($_POST['id'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];

    // Perform the SQL DELETE operation
    $sql00 = "DELETE FROM reading WHERE name = '$name' AND id = '$id'";
    $res00 = mysqli_query($conn, $sql00);
    $sql11 = "DELETE FROM listening WHERE name = '$name' AND id = '$id'";
    $res11 = mysqli_query($conn, $sql11);
    $sql22 = "DELETE FROM writing WHERE name = '$name' AND id = '$id'";
    $res22 = mysqli_query($conn, $sql22);

    if ($res00==true && $res11==true && $res22==true) {
        // Deletion was successful
        header("location:".SITEURL."result");

    } 
    else 
    {
        // Handle deletion failure (e.g., display an error page)
        header("location:".SITEURL."error.html");
    }
}
else 
    {
        // Handle deletion failure (e.g., display an error page)
        header("location:".SITEURL."error.html");
    }
?>
