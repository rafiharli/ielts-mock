<?php 
            $sql1="SELECT * FROM listening WHERE name='$name' AND id='$id'";
            $res1=mysqli_query($conn,$sql1);
            if($res1==true)
            {
                while ($row1 = mysqli_fetch_array($res1)) { 
                    echo '<div class="result-item">';
                    echo '<h2> Listening Section </h2>';
                    echo '<table><tr><td><h3>Section 1</h3>Question 1 : ' . htmlspecialchars($row1['list1']) . "<br>";
                    echo 'Question 2 : ' . htmlspecialchars($row1['list2']) . "<br>";
                    echo 'Question 3 : ' . htmlspecialchars($row1['list3']) . "<br>";
                    echo 'Question 4 : ' . htmlspecialchars($row1['list4']) . "<br>";
                    echo 'Question 5 : ' . htmlspecialchars($row1['list5']) . "<br>";
                    echo 'Question 6 : ' . htmlspecialchars($row1['list6']) . "<br>";
                    echo 'Question 7 : ' . htmlspecialchars($row1['list7']) . "<br>";
                    echo 'Question 8 : ' . htmlspecialchars($row1['list8']) . "<br>";
                    echo 'Question 9 : ' . htmlspecialchars($row1['list9']) . "<br>";
                    echo 'Question 10 : ' . htmlspecialchars($row1['list10']) . "</td><br><td>";
                    echo '<h3>Section 2</h3>Question 11 : ' . htmlspecialchars($row1['list11']) . "<br>";
                    echo 'Question 12 : ' . htmlspecialchars($row1['list12']) . "<br>";
                    echo 'Question 13 : ' . htmlspecialchars($row1['list13']) . "<br>";
                    echo 'Question 14 : ' . htmlspecialchars($row1['list14']) . "<br>";
                    echo 'Question 15 : ' . htmlspecialchars($row1['list15']) . "<br>";
                    echo 'Question 16 : ' . htmlspecialchars($row1['list16']) . "<br>";
                    echo 'Question 17 : ' . htmlspecialchars($row1['list17']) . "<br>";
                    echo 'Question 18 : ' . htmlspecialchars($row1['list18']) . "<br>";
                    echo 'Question 19 : ' . htmlspecialchars($row1['list19']) . "<br>";
                    echo 'Question 20 : ' . htmlspecialchars($row1['list20']) . "</td><br><td>";
                    echo '<h3>Section 3</h3>Question 21-23  : ' . htmlspecialchars($row1['list21_23']) . "<br>";
                    echo 'Question 24 : ' . htmlspecialchars($row1['list24']) . "<br>";
                    echo 'Question 25 : ' . htmlspecialchars($row1['list25']) . "<br>";
                    echo 'Question 26 : ' . htmlspecialchars($row1['list26']) . "<br>";
                    echo 'Question 27 : ' . htmlspecialchars($row1['list27']) . "<br>";
                    echo 'Question 28 : ' . htmlspecialchars($row1['list28']) . "<br>";
                    echo 'Question 29 : ' . htmlspecialchars($row1['list29']) . "<br>";
                    echo 'Question 30 : ' . htmlspecialchars($row1['list30']) . "<br><br><br></td><td>";
                    echo '<h3>Section 4</h3>Question 31 : ' . htmlspecialchars($row1['list31']) . "<br>";
                    echo 'Question 32 : ' . htmlspecialchars($row1['list32']) . "<br>";
                    echo 'Question 33 : ' . htmlspecialchars($row1['list33']) . "<br>";
                    echo 'Question 34 : ' . htmlspecialchars($row1['list34']) . "<br>";
                    echo 'Question 35 : ' . htmlspecialchars($row1['list35']) . "<br>";
                    echo 'Question 36 : ' . htmlspecialchars($row1['list36']) . "<br>";
                    echo 'Question 37 : ' . htmlspecialchars($row1['list37']) . "<br>";
                    echo 'Question 38 : ' . htmlspecialchars($row1['list38']) . "<br>";
                    echo 'Question 39 : ' . htmlspecialchars($row1['list39']) . "<br>";
                    echo 'Question 40 : ' . htmlspecialchars($row1['list40']) . "</td></tr></table><br></div>";
                    }
            }
            else 
            {
                // Handle deletion failure (e.g., display an error page)
                header("location:".SITEURL."error.html");
            }
?>