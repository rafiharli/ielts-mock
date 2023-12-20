<?php include('../config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="jbhal_Q7-aPKkFTzbzlOU5i3ix8zft-e2WA1-UuEYRo" />
    <title>Result</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/pinkicon.ico">
</head>

<body>
    <div class="Container" style="overflow: scroll;background-color:pink">
        <div class="Header text-center">
            <p class="font-head white" style="margin-bottom:10px; margin-top:10px;">
                Result
            </p>
        </div>
        <div class="wrapper-result">
            <h3 class="text-center">Choose result for:</h3>
            <?php
            $sql0 = "SELECT id,name FROM reading";
            $res0 = mysqli_query($conn, $sql0);
            $no = 1;
            if ($res0 == true) {
                while ($row0 = mysqli_fetch_array($res0)) {
                    ?>
                    <a class="no-style"
                        href="result.php?id=<?php echo htmlspecialchars($row0['id']); ?>&name=<?php echo htmlspecialchars($row0['name']); ?>">
                        <div class="col-4 text-center hover-1">
                            <h2>
                                <?php echo $no++ . '. ' . htmlspecialchars(ucwords($row0['name'])); ?>
                            </h2>
                        </div>
                    </a>
                    <?php
                }
            } else {
                // Handle deletion failure (e.g., display an error page)
                header("location:" . SITEURL . "error.html");
            }

            ?>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="footer text-center">
        <p>All rights reserved &copy; IELTS online 2023</p>
    </div>
</body>

</html>