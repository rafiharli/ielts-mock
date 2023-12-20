<?php 
            $sql2="SELECT * FROM writing WHERE name='$name' AND id='$id'";
            $res2=mysqli_query($conn,$sql2);
            if($res2==true)
            {
            while ($row2 = mysqli_fetch_array($res2)) { 
                        echo '<div class="result-item">';
                        echo '<h2> Writing Section </h2><br><br>';
                        echo '<strong>Writing 1 : </strong>' . htmlspecialchars($row2['writing1']). "<br><br><br>";
                        echo '<strong>Writing 2 : </strong>' . htmlspecialchars($row2['writing2']). "<br><br></div>";
                        }
            }
            else
            {
                header("location".SITEURL."error.html");
            }
            
 ?>