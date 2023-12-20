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
    <title>Listening</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="icon" type="image/x-icon" href="assets/images/icon.ico">
    <audio autoplay src="assets/audio/ielts1.mp3"></audio>
    <script src="assets/javascript/listen.js"></script>
  </head>
  <body>
    
    <!-- HEADER -->
  <div class="Container">
    <form action="" method="POST">
      <div class="header">
        <br />
        <p class="font-head white" style="margin-left: 20px">
          Listening Section     
          <input class="no-style finish cursor" type="submit" name="submit" value="Finish">
          </input>
        </p>
        <p style="margin-left: 20px;margin-top:5px;">You should spend about 30 minutes on Questions 1-40, which are based on audio player. <span class="count-time" id="countdown"></span></p>  
        <br />
      </div>

      <!-- ISI -->
  <div class="wrapper" style="overflow:scroll;background-color:#c0d6f9;">
  <br><br><br><br><br><br><br>
    <div class="listening">
      <div style="border:solid; padding:2%;">
        <h2>SECTION 1</h2>
        <br>
        <h3><strong>Questions 1-10</strong></h3>
        <h4 style="margin-top: 2px; font-weight: 100;">Write <strong>ONE WORD AND OR A NUMBER</strong> in each gap!</h4>
        <br>
        <h3 class="text-center" style="font-style: italic;">HOLIDAY RENTALS</h3>
        <p class="text-center">Dates 10th – 22nd July</p>
        <br>

        <div>
          <table>
            <tr>
              <th style="padding-bottom: 1%;border-bottom:solid;border-right:solid;"><strong>Name of property</strong></th>
              <th style="padding-bottom: 1%;border-bottom:solid;border-right:solid;"><strong>Location</strong></th>
              <th style="padding-bottom: 1%;border-bottom:solid;border-right:solid;"><strong>Features</strong></th>
              <th style="padding-bottom: 1%;border-bottom:solid;border-right:solid;"><strong>Disadvantages</strong></th>
              <th style="padding-bottom: 1%;border-bottom:solid;"><strong>Booking details</strong></th>
            </tr>

            <tr>
              <td style="padding-top:10px;border-right:solid;"><input name="list1" tabindex="1" class="text-center box-width" type="text" placeholder="1"></td>
              <td style="padding-top:10px;border-right:solid;"><p>Rural</p></td>
              <td style="padding-top:10px;border-right:solid;"><p>Apartment</p></td>
              <td style="padding-top:10px;border-right:solid;"><p>Distance from <input name="list3" tabindex="3" class="text-center box-width" type="text" placeholder="3"></p></td>
              <td style="padding-top:10px;"><p>www.<input name="list4" tabindex="4" class="text-center box-width" type="text" placeholder="4">.com</p></td>
            </tr>

            <tr>
              <td style="border-right:solid;"></td>
              <td style="border-right:solid;"><p>Surrounded by <input name="list2" tabindex="2" class="text-center box-width" type="text" placeholder="2"></p></td>
              <td style="border-right:solid;"><p>Two bedroooms</p></td>
              <td style="border-right:solid;"></td>
              <td></td>
            </tr>

            <tr>
              <td style="border-bottom:solid;border-right:solid;"></td>
              <td style="border-bottom:solid;border-right:solid;"></td>
              <td style="border-bottom:solid;border-right:solid;"><p>Open plan</p></td>
              <td style="border-bottom:solid;border-right:solid;"></td>
              <td style="border-bottom:solid;"></td> 
            </tr>

            <tr>
              <td style="padding-top:10px;border-right:solid;"><p>King fisher</p></td>
              <td style="padding-top:10px;border-right:solid;"><p>Rural</p></td>
              <td style="padding-top:10px;border-right:solid;"><p>House</p></td>
              <td style="padding-top:10px;border-right:solid;"><p>Expensive</p></td>
              <td style="padding-top:10px;"><p>Phone the owner (01752669218)</p></td>
            </tr>

            <tr>
              <td style="border-right:solid;"></td>
              <td style="border-right:solid;"><p>Next to the <input name="list5" tabindex="5" class="text-center box-width" type="text" placeholder="5"></p></td>
              <td style="border-right:solid;"><p>Three bedrooms</p></td>
              <td style="border-right:solid;"></td>
              <td ></td>
            </tr>

            <tr>
              <td style="border-right:solid;"></td>
              <td style="border-right:solid;"><p>Nice view</p></td>
              <td style="border-right:solid;"><p><input name="list6" tabindex="6" class="text-center box-width" type="text" placeholder="6"> room</p></td>
              <td style="border-right:solid;"></td>
              <td></td>
            </tr>

            <tr>
              <td style="border-bottom:solid;border-right:solid;"></td>
              <td style="border-bottom:solid;border-right:solid;"></td>
              <td style="border-bottom:solid;border-right:solid;"><p>Kitchen</p></td>
              <td style="border-bottom:solid;border-right:solid;"></td>
              <td style="border-bottom:solid;"></td>
            </tr>

            <tr>
              <td style="padding-top:10px;border-right:solid;"><p>Sunnybank</p></td>
              <td style="padding-top:10px;border-right:solid;"><p>In a village</p></td>
              <td style="padding-top:10px;border-right:solid;"><p>House</p></td>
              <td style="padding-top:10px;border-right:solid;"><p>No <input name="list9" tabindex="9" class="text-center box-width" type="text" placeholder="9"></p></td>
              <td style="padding-top:10px;"><p>Contact the <input name="list10" tabindex="10" class="text-center box-width" type="text" placeholder="10"></p></td>
            </tr>

            <tr>
              <td style="border-right:solid;"></td>
              <td style="border-right:solid;"><p>Next to the <input name="list7" tabindex="7" class="text-center box-width" type="text" placeholder="7"></td>
              <td style="border-right:solid;"><p>Has private <input name="list8" tabindex="8" class="text-center box-width" type="text" placeholder="8"></td>
              <td style="border-right:solid;"></td>
              <td></td>
            </tr>

          </table>
          <br>
          </div>
        </div>

        <br><br><br>

      <div style="border:solid; padding:2%;">
        <h2>SECTION 2</h2>
        <br>
          <h3>Questions 11-14</h3>
          <h4 style="font-weight: 100;">Choose the <strong>CORRECT</strong> answer!</h4>
          <br>
        <table>
          <tbody>
          <tr>
            <td>
              <p>
                <h3>Question 11</h3>
                When is this year’s festival being held?
                </p>
          
              <ul>
                <label><li><input type="radio" name="list11" value="A">A. 1-13 January</input></li></label>
                <label><li><input type="radio" name="list11" value="B">B. 5-17 January</input></li></label>
                <label><li><input type="radio" name="list11" value="C">C. 25-31 January</input></li></label>
              </ul>
            </td>
            
            <td>
            <p>
            <h3>Question 12</h3>
            What will the reviewer concentrate on today?
          </p>
          
          <ul>
            <label><li><input type="radio" name="list12" value="A">A. Theatre</input></li></label>
            <label><li><input type="radio" name="list12" value="B">B. Dance</input></li></label>
            <label><li><input type="radio" name="list12" value="C">C. Exhibitions</input></li></label>
          </ul>
            </td>
          </tr>

          <tr>
            <td>
            <p>
            <h3>Question 13</h3>
            How many circuses are there in the festivals?
          </p>
          
          <ul>
            <label><li><input type="radio" name="list13" value="A">A. One</input></li></label>
            <label><li><input type="radio" name="list13" value="B">B. Two</input></li></label>
            <label><li><input type="radio" name="list13" value="C">C. Several</input></li></label>
          </ul>
            </td>
            <td>
            <p>
            <h3>Question 14</h3>
            Where does Circus Romano perform?
          </p>
          
          <ul>
            <label><li><input type="radio" name="list14" value="A">A. In a theatre</input></li></label>
            <label><li><input type="radio" name="list14" value="B">B. In a tent</input></li></label>
            <label><li><input type="radio" name="list14" value="C">C. In a stadium</input></li></label>
          </ul>
            </td>
          </tr>
          </tbody>
        </table>

        <h3 style="margin-top: 2px; padding-top:5px;">Questions 15-20</h3>
        <p>Write <strong>NO MORE THAN THREE WORDS</strong> in each gap!</p>
        <br>
        <table class="text-center">
            <tr>
              <td style="padding-bottom: 1%;border-bottom:solid;border-right:solid;"></td>
              <td style="padding-bottom: 1%;border-bottom:solid;border-right:solid;"><strong>Where</strong></td>
              <td style="padding-bottom: 1%;border-bottom:solid;border-right:solid;"><strong>Types of performance</strong></td>
              <td style="padding-bottom: 1%;border-bottom:solid;border-right:solid;"><strong>Highlights</strong></td>
              <td style="padding-bottom: 1%;border-bottom:solid;"><strong>Types of audience</strong></td>
            </tr>

            <tr>
              <td style="padding-top:10px;border-right:solid;"><p>Circus Romano</p></td>
              <td style="padding-top:10px;border-right:solid;">############</td>
              <td style="padding-top:10px;border-right:solid;"><p>Clowns and acrobats</p></td>
              <td style="padding-top:10px;border-right:solid;"><p>Music and <input name="list15" class="text-center" type="text" placeholder="15"></p></td>
              <td style="padding-top:10px;"><p><input name="list16" class="text-center" type="text" placeholder="16"></p></td>
            </tr>

            <tr>
              <td style="border-right:solid;"><p>Circus Electrica</p></td>
              <td style="border-right:solid;"><p><input name="list17" class="text-center" type="text" placeholder="17"></p></td>
              <td style="border-right:solid;"><p>Dancers and magicians</p></td>
              <td style="border-right:solid;">Aerial displays</td>
              <td><p><input name="list18" class="text-center" type="text" placeholder="18"></p></td>
            </tr>

            <tr>
              <td style="border-right:solid;"><p>Mekong Water Puppets</p></td>
              <td style="border-right:solid;"><p><input name="list19" class="text-center" type="text" placeholder="19"></p></td>
              <td style="border-right:solid;"><p>Puppets</p></td>
              <td style="border-right:solid;"><p>Seeing the puppeteers at the end</p></td>
              <td><p><input name="list20" class="text-center" type="text" placeholder="20"></p></td> 
            </tr>
        </table>
        <br>
        </div>

        <br><br><br>
        
      <div style="border:solid; padding:2%;">
        <h2>SECTION 3</h2>
        <br>
        <div>
          <h3>Questions 21 – 23</h3>
          <h4 style="font-weight: 100;">Choose <strong>THREE</strong> letters, A – F!</h4>
          <br>
          <p><strong>21-23. </strong>Which <strong>THREE</strong> things are the students to submit to their professor?</p>
          <br>
          <table>
            <tr>
              <td>
                <label><input name="list21_23[]" type="checkbox" value="A">A. A written summary</label>
              </td>
              <td>
                <label><input name="list21_23[]" type="checkbox" value="D">D. Charts and graphs</label>
              </td>
            </tr>
            <tr>
              <td>
                <label><input name="list21_23[]" type="checkbox" value="B">B. Maps</label>
              </td>
              <td>
                <label><input name="list21_23[]" type="checkbox" value="E">E. A list of resources used</label>
              </td>
            </tr>
            <tr>
              <td>
                <label><input name="list21_23[]" type="checkbox" value="C">C. A case study</label>
              </td>
              <td>
                <label><input name="list21_23[]" type="checkbox" value="F">F. A video</label>
              </td>
            </tr>
          </table>
        </div>
        <br>
        <div>
          <h3>Questions 24 and 25</h3>
          <h4 style="font-weight: 100;">Answer the questions below. Write <strong>NO MORE THAN THREE WORDS</strong> for each answer.</h4>
          <br>
          <p><strong>24. </strong>What two sources of information will the students use when preparing their presentation? 
            <strong> Answer: </strong><input style="width:200px;" name="list24" class="text-center" type="text" placeholder="24">
          </p>
          <p><strong>25. </strong>What will the students show during their presentation? 
            <strong> Answer: </strong><input style="width:200px;" name="list25" class="text-center" type="text" placeholder="25">
          </p>
        </div>

        <br><br>

        <div>
        <h3>Questions 26-30</h3>
          <h4 style="font-weight: 100;">Choose the <strong>CORRECT</strong> answer!</h4>
          <br>
        <table>
          <tbody>
          <tr>
            <td>
              <p>
                <h3>Question 26</h3>
                Only rescue birds that are
                </p>
          
              <ul>
                <label><li><input type="radio" name="list26" value="A">A. All alone</input></li></label>
                <label><li><input type="radio" name="list26" value="B">B. Obviously hurt</input></li></label>
                <label><li><input type="radio" name="list26" value="C">C. Sitting on the ground</input></li></label>
              </ul>
            </td>
            
            <td>
            <p>
            <h3>Question 27</h3>
            Protect yourself by wearing
          </p>
          
          <ul>
            <label><li><input type="radio" name="list27" value="A">A. Gloves</input></li></label>
            <label><li><input type="radio" name="list27" value="B">B. A hat</input></li></label>
            <label><li><input type="radio" name="list27" value="C">C. Protective glasses</input></li></label>
          </ul>
            </td>

            <td>
            <p>
            <h3>Question 28</h3>
            Put the bird in a
          </p>
          
          <ul>
            <label><li><input type="radio" name="list28" value="A">A. Cage</input></li></label>
            <label><li><input type="radio" name="list28" value="B">B. Box</input></li></label>
            <label><li><input type="radio" name="list28" value="C">C. Bag</input></li></label>
          </ul>
            </td>
          </tr>

          <tr>
            <td>
            <p>
            <h3>Question 29</h3>
            Keep the bird calm by
          </p>
          
          <ul>
            <label><li><input type="radio" name="list29" value="A">A. Petting it</input></li></label>
            <label><li><input type="radio" name="list29" value="B">B. Talking to it</input></li></label>
            <label><li><input type="radio" name="list29" value="C">C. Leaving it alone</input></li></label>
          </ul>
            </td>
            <td>
            <p>
            <h3>Question 30</h3>
            When transporting the bird,
          </p>
          
          <ul>
            <label><li><input type="radio" name="list30" value="A">A. Speak quietly</input></li></label>
            <label><li><input type="radio" name="list30" value="B">B. Play music</input></li></label>
            <label><li><input type="radio" name="list30" value="C">C. Drive very slowly</input></li></label>
          </ul>
            </td>
            <td></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>

    <br><br><br>

    <div style="border:solid; padding:2%;">
      <h2>SECTION 4</h2>
        <br>
          <h3>Questions 31 – 34.</h3>
          <h4 style="font-weight:100">Label the diagrams below!</h4>
          <h4 style="font-weight: 100;">Write <strong>NO MORE THAN TWO WORDS</strong>  for each answer.</h4>
        <br>

        <table>
          <tr>
            <td style="width:360px;"><img src="assets/images/list-section.png"></td>
            <td>
              <p><strong>Question 31: </strong><input style="width:200px;" name="list31" class="text-center" type="text" placeholder="31"></p>
              <br><br>
              <p><strong>Question 32: </strong><input style="width:200px;" name="list32" class="text-center" type="text" placeholder="32"></p>
              <br><br>
              <p><strong>Question 33: </strong><input style="width:200px;" name="list33" class="text-center" type="text" placeholder="33"></p>
              <br><br>
              <p><strong>Question 34: </strong><input style="width:200px;" name="list34" class="text-center" type="text" placeholder="34"></p>
            </td>
          </tr>
        </table>
        
        <br>
          <h3>Questions 35 – 40.</h3>
          <h4 style="font-weight:100">Complete the summary below!</h4>
          <h4 style="font-weight: 100;">Write <strong>NO MORE THAN TWO WORDS</strong>  for each answer.</h4>
        <br>
        <h3 class="text-center">Cochlear impiants – Advantages, Disadvantages and Factors</h3>
        <br>
        <p style="text-align:justify;">
        Hearing aids <input name="list35" class="text-center box-width" type="text" placeholder="35"> normal sounds, so they are good for mild hearing loss but not for severe loss, 
        Cochlear implants help some people a lot, but do not work so well for everyone. 
        The brain gets different <input name="list36" class="text-center box-width" type="text" placeholder="36"> from an implant, so users must relearn how to hear. 
        Cochlear implants are not a cure, Users need ongoing training in <input name="list37" class="text-center box-width" type="text" placeholder="37">, lip – reading and sign language. 
        The surgery can damage nerves. It may also destroy any <input name="list38" class="text-center box-width" type="text" placeholder="38"> in such cases, 
        those users cannot go back to using a hearing aid. 
        The most important factor for selecting users is the <input name="list39" class="text-center box-width" type="text" placeholder="39"> of their deafness, 
        and also age and previous speaking ability. Finally, the condition of the nerve cells in the cochlea is a factor, 
        because <input name="list40" class="text-center box-width" type="text" placeholder="40"> can damage these cells.
        </p>

        <br>
      </div>
      <br><br><br>
      </form>

      <?php

        if(isset($_POST['submit']))
        { 
          $list1 = $_POST['list1'];
          $list2 = $_POST['list2'];
          $list3 = $_POST['list3'];
          $list4 = $_POST['list4'];
          $list5 = $_POST['list5'];
          $list6 = $_POST['list6'];
          $list7 = $_POST['list7'];
          $list8 = $_POST['list8'];
          $list9 = $_POST['list9'];
          $list10 = $_POST['list10'];
          $list11 = $_POST['list11'];
          $list12 = $_POST['list12'];
          $list13 = $_POST['list13'];
          $list14 = $_POST['list14'];
          $list15 = $_POST['list15'];
          $list16 = $_POST['list16'];
          $list17 = $_POST['list17'];
          $list18 = $_POST['list18'];
          $list19 = $_POST['list19'];
          $list20 = $_POST['list20'];
          $list21_23 = $_POST['list21_23'];
          $list24 = $_POST['list24'];
          $list25 = $_POST['list25'];
          $list26 = $_POST['list26'];
          $list27 = $_POST['list27'];
          $list28 = $_POST['list28'];
          $list29 = $_POST['list29'];
          $list30 = $_POST['list30'];
          $list31 = $_POST['list31'];
          $list32 = $_POST['list32'];
          $list33 = $_POST['list33'];
          $list34 = $_POST['list34'];
          $list35 = $_POST['list35'];
          $list36 = $_POST['list36'];
          $list37 = $_POST['list37'];
          $list38 = $_POST['list38'];
          $list39 = $_POST['list39'];
          $list40 = $_POST['list40'];

          $cek="";
          foreach($list21_23 as $cek1)  
          {  
            $cek .= $cek1.".";  
          }  
          
          $sql = "UPDATE listening SET
                  list1='$list1',
                  list2='$list2',
                  list3='$list3',
                  list4='$list4',
                  list5='$list5',
                  list6='$list6',
                  list7='$list7',
                  list8='$list8',
                  list9='$list9',
                  list10='$list10',
                  list11='$list11',
                  list12='$list12',
                  list13='$list13',
                  list14='$list14',
                  list15='$list15',
                  list16='$list16',
                  list17='$list17',
                  list18='$list18',
                  list19='$list19',
                  list20='$list20',
                  list21_23='$cek',
                  list24='$list24',
                  list25='$list25',
                  list26='$list26',
                  list27='$list27',
                  list28='$list28',
                  list29='$list29',
                  list30='$list30',
                  list31='$list31',
                  list32='$list32',
                  list33='$list33',
                  list34='$list34',
                  list35='$list35',
                  list36='$list36',
                  list37='$list37',
                  list38='$list38',
                  list39='$list39',
                  list40='$list40'
                  WHERE id='$id'
                  ";
  
          $res = mysqli_query($conn,$sql);
         
          if($res==true)
          {
            header("location:".SITEURL."writing1.php?id=".htmlspecialchars($id)."&name=".htmlspecialchars($name));
          }
          else 
          {
              // Handle deletion failure (e.g., display an error page)
              header("location:".SITEURL."error.html");
          }
        }

      ?>  
    </div>
    </div>
    </div>
    <!-- FOOTER --> 
    <div class="footer text-center">
        <p>All rights reserved &copy; IELTS online 2023</p>
      </div>
      
  </body>
</html>
