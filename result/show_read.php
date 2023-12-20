<?php 
            $sql="SELECT * FROM reading WHERE name='$name' AND id='$id'";
            $res=mysqli_query($conn,$sql);
            if($res==true)
            {
                while ($row = mysqli_fetch_array($res)) { 
                    echo '<div class="result-item">';
                    echo '<h2> Reading Section </h2><br><br>';
                    echo '<table><tr><td><h3>Reading Passage 1</h3>Question 1 : ' . htmlspecialchars($row['read1']) . "<br>";
                    echo 'Question 2 : ' . htmlspecialchars($row['read2']) . "<br>";
                    echo 'Question 3 : ' . htmlspecialchars($row['read3']) . "<br>";
                    echo 'Question 4 : ' . htmlspecialchars($row['read4']) . "<br>";
                    echo 'Question 5 : ' . htmlspecialchars($row['read5']) . "<br>";
                    echo 'Question 6 : ' . htmlspecialchars($row['read6']) . "<br>";
                    echo 'Question 7 : ' . htmlspecialchars($row['read7']) . "<br>";
                    echo 'Question 8 : ' . htmlspecialchars($row['read8']) . "<br>";
                    echo 'Question 9 : ' . htmlspecialchars($row['read9']) . "<br>";
                    echo 'Question 10 : ' . htmlspecialchars($row['read10']) . "<br>";
                    echo 'Question 11 : ' . htmlspecialchars($row['read11']) . "<br>";
                    echo 'Question 12 : ' . htmlspecialchars($row['read12']) . "<br>";
                    echo 'Question 13 : ' . htmlspecialchars($row['read13']) . "<br><br></td><td>";
                    echo '<h3>Reading Passage 2</h3>Question 14 : ' . htmlspecialchars($row['read14']) . "<br>";
                    echo 'Question 15 : ' . htmlspecialchars($row['read15']) . "<br>";
                    echo 'Question 16 : ' . htmlspecialchars($row['read16']) . "<br>";
                    echo 'Question 17 : ' . htmlspecialchars($row['read17']) . "<br>";
                    echo 'Question 18 : ' . htmlspecialchars($row['read18']) . "<br>";
                    echo 'Question 19 : ' . htmlspecialchars($row['read19']) . "<br>";
                    echo 'Question 20 : ' . htmlspecialchars($row['read20']) . "<br>";
                    echo 'Question 21-22 : ' . htmlspecialchars($row['read21_22']) . "<br>";
                    echo 'Question 23-24 : ' . htmlspecialchars($row['read23_24']) . "<br>";
                    echo 'Question 25 : ' . htmlspecialchars($row['read25']) . "<br>";
                    echo 'Question 26 : ' . htmlspecialchars($row['read26']) . "<br><br><br><br></td><td>";
                    echo '<h3>Reading Passage 3</h3>Question 27 : ' . htmlspecialchars($row['read27']) . "<br>";
                    echo 'Question 28 : ' . htmlspecialchars($row['read28']) . "<br>";
                    echo 'Question 29 : ' . htmlspecialchars($row['read29']) . "<br>";
                    echo 'Question 30 : ' . htmlspecialchars($row['read30']) . "<br>";
                    echo 'Question 31 : ' . htmlspecialchars($row['read31']) . "<br>";
                    echo 'Question 32 : ' . htmlspecialchars($row['read32']) . "<br>";
                    echo 'Question 33 : ' . htmlspecialchars($row['read33']) . "<br>";
                    echo 'Question 34 : ' . htmlspecialchars($row['read34']) . "<br>";
                    echo 'Question 35 : ' . htmlspecialchars($row['read35']) . "<br>";
                    echo 'Question 36 : ' . htmlspecialchars($row['read36']) . "<br>";
                    echo 'Question 37 : ' . htmlspecialchars($row['read37']) . "<br>";
                    echo 'Question 38 : ' . htmlspecialchars($row['read38']) . "<br>";
                    echo 'Question 39 : ' . htmlspecialchars($row['read39']) . "<br>";
                    echo 'Question 40 : ' . htmlspecialchars($row['read40']) . "</td></tr></table></div>";
                }
            }
            else
            {
                header("location".SITEURL."error.html");
            }
?>