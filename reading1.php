<?php include('config/constants.php'); ?>

<?php 
  if(isset($_GET['name']))
  {
    $name = $_GET['name'];

    $sql0 = "SELECT * FROM reading WHERE name='$name' ORDER BY id DESC";
    $res0 = mysqli_query($conn,$sql0);
    if($res0==true)
    {
      if($row0=mysqli_fetch_assoc($res0))
      {
        $id = $row0['id'];
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
    <title>Reading Passage 1</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="icon" type="image/x-icon" href="assets/images/icon.ico">
    <script src="assets/javascript/read.js"></script>
  </head>

  <body>
    <!-- HEADER -->
    <div class="Container">
      <div class="Header">
      <form action="" method="POST">
        <br>
          <p class="font-head white" style="margin-left: 20px">
            Reading Passage 1 
            <input class="no-style finish cursor" type="submit" name="submit" value="Finish">
            </input>
            
          </p>
          <p style="margin-left: 20px;margin-top:5px;">You should spend about 20 minutes on Questions 1-13, which are based on Reading Passage 1 below. <span class="count-time" id="countdown"></span></p>
          
        <br>
      </div>

      <!-- ISI -->

      <div class="Content">
        <div class="Wrapper">
          <div class="RightContent" style="text-align: justify">
              <div>
                <br>
                <p>
                  <h2><strong>Question 1-7</strong></h2>
                </p>
                <br>
                <p>
                Do the following statements agree with the information given in Reading Passage 1.
                </p>
                <br>
                <p>
                In boxes 1-7 on your answer sheet, choose:
                </p>
                <br>
                <p><strong>TRUE</strong>, if the statement agrees with the information.</p>
                <p><strong>FALSE</strong>, if the statement contradicts the information.</p>
                <p><strong>NOT GIVEN</strong>, if there is no information on this.</p>
                <br>
                <p style="border-bottom:solid;"></p>
                <br>
                <p>
                  <h3 style="margin-bottom:3px;">Question 1</h3>
                  Few people recognise nowadays that human beings are designed to function best in daylight.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read1" value="TRUE">TRUE</input></li></label>
                  <label><li><input type="radio" name="read1" value="FALSE">FALSE</input></li></label>
                  <label><li><input type="radio" name="read1" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 2</h3>
                  Most light pollution is caused by the direction of artificial lights rather than their intensity.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read2" value="TRUE">TRUE</input></li></label>
                  <label><li><input type="radio" name="read2" value="FALSE">FALSE</input></li></label>
                  <label><li><input type="radio" name="read2" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 3</h3>
                  By 1800 the city of London had such a large population, it was already causing light pollution.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read3" value="TRUE">TRUE</input></li></label>
                  <label><li><input type="radio" name="read3" value="FALSE">FALSE</input></li></label>
                  <label><li><input type="radio" name="read3" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 4</h3>
                  The fishermen of the South Atlantic are unaware of the light pollution they are causing.
                </p>
              
                <ul>
                  <label><li><input type="radio" name="read4" value="TRUE">TRUE</input></li></label>
                  <label><li><input type="radio" name="read4" value="FALSE">FALSE</input></li></label>
                  <label><li><input type="radio" name="read4" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 5</h3>
                  Shadows from the planet Venus are more difficult to see at certain times of the year.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read5" value="TRUE">TRUE</input></li></label>
                  <label><li><input type="radio" name="read5" value="FALSE">FALSE</input></li></label>
                  <label><li><input type="radio" name="read5" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>
              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 6</h3>
                  In some Swiss valleys, the total number of bats declined rapidly after the introduction of streetlights.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read6" value="TRUE">TRUE</input></li></label>
                  <label><li><input type="radio" name="read6" value="FALSE">FALSE</input></li></label>
                  <label><li><input type="radio" name="read6" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>
              <br>
                <p style="border-bottom:solid;"></p>
              <br>
              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 7</h3>
                  The first attempts to limit light pollution were carried out to help those studying the stars.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read7" value="TRUE">TRUE</input></li></label>
                  <label><li><input type="radio" name="read7" value="FALSE">FALSE</input></li></label>
                  <label><li><input type="radio" name="read7" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>
              <br>
                <p style="border-bottom:solid;"></p>
              <br><br>

              <div>
                <p>
                  <h2><strong>Question 8-13</strong></h2>
                </p>
                <br>
                <p>
                Complete the table below.
                </p>
                <br>
                <p>
                Choose <strong>NO MORE THAN THREE WORDS</strong> from the passage for each answer.
                </p>
                <p>Write your answers in boxes 8-13 on your answer sheet!</p>
              </div>
              
              <table style="text-align:left;">
                <tr class="text-center">
                  <td style="border-bottom:solid;">CREATURE</td>
                  <td style="border-bottom:solid;">EFFECTS of LIGHT</td>
                </tr>
                <br>
                <tr>
                  <td style="border-right:solid;border-bottom:solid;">Songbirds and seabirds they bump into <input name="read9" tabindex="2" class="text-center box-width" type="text" placeholder="9"></td>
                  <td style="border-bottom:solid;">The worst-affected birds are those which are seabirds <input name="read8" tabindex="1" class="text-center box-width" type="text" placeholder="8"> which stand out at night</td>
                </tr>
                <tr>
                  <td style="border-right:solid;border-bottom:solid;">Desert rodents and badgers</td>
                  <td style="border-bottom:solid;">They are more at risk from <input name="read10" tabindex="3" class="text-center box-width" type="text" placeholder="10"></td>
                </tr>
                <tr>
                  <td style="border-right:solid;border-bottom:solid;">Migrating birds not suitable on arrival.</td>
                  <td style="border-bottom:solid;">Early migration may mean the <input name="read11" tabindex="4" class="text-center box-width" type="text" placeholder="11"> are</td>
                </tr>
                <tr>
                  <td style="border-right:solid;border-bottom:solid;">Sea turtles</td>
                  <td style="border-bottom:solid;">They suffer from a decreasing number of <input name="read12" tabindex="5" class="text-center box-width" type="text" placeholder="12">.</td>
                </tr>
                <tr>
                  <td style="border-right:solid;">Frogs and toads</td>
                  <td>If they are near <input name="read13" tabindex="6" class="text-center box-width" type="text" placeholder="13"> their routines will be upset.</td>
                </tr>
              </table>

              <br>
              <input type="hidden" name="name" value="<?php echo htmlspecialchars($name);?>"></input>
              <input type="hidden" name="id" value="<?php echo htmlspecialchars($id);?>"></input>
              </form>
              <?php 

      if(isset($_POST['submit']))
      {
        $read1 = $_POST['read1'];
        $read2 = $_POST['read2'];
        $read3 = $_POST['read3'];
        $read4 = $_POST['read4'];
        $read5 = $_POST['read5'];
        $read6 = $_POST['read6'];
        $read7 = $_POST['read7'];
        $read8 = $_POST['read8'];
        $read9 = $_POST['read9'];
        $read10 = $_POST['read10'];
        $read11 = $_POST['read11'];
        $read12 = $_POST['read12'];
        $read13 = $_POST['read13'];
        
        $sql = "UPDATE reading SET
                read1='$read1',
                read2='$read2',
                read3='$read3',
                read4='$read4',
                read5='$read5',
                read6='$read6',
                read7='$read7',
                read8='$read8',
                read9='$read9',
                read10='$read10',
                read11='$read11',
                read12='$read12',
                read13='$read13'
                WHERE id='$id'
                ";

        $res = mysqli_query($conn,$sql);
       
        if($res==true)
        {
          header("location:".SITEURL."reading2.php?id=".htmlspecialchars($id)."&name=".htmlspecialchars($name));
        }
        else 
        {
            // Handle deletion failure (e.g., display an error page)
            header("location:".SITEURL."error.html");
        }
      }

    ?>
              <br>
            </div>

          <div class="LeftContent" style="text-align: justify">
          <br>
            <h2 class="text-center"><strong>Vanishing Night</strong></h2>
            <br>
            <p>
            ” Most city skies have become virtually empty of stars “
            </p>
            <br>
            <p>
           <strong>A.</strong> If humans were truly at home under the light of the moon and stars, it would make no difference to us whether we were out and about at night or during the day, the midnight world as visible to us as it is to the vast number of nocturnal species on this planet. Instead, we are diurnal creatures, meaning our eyes are adapted to living in the sun’s light. This is a basic evolutionary fact, even though most of us don’t think of ourselves as diurnal beings any more than as primates or mammals or Earthlings. Yet it’s
the only way to explain what we’ve done to the night: we’ve engineered it to meet our needs by filling it with light.
            </p>
            <br />
            <p>
            <strong>B.</strong> This kind of engineering is no different from damming a river. Its benefits come with consequences – called light pollution – whose effects scientists are only now beginning to study. Light pollution is largely the result of bad lighting design, which allows artificial light to shine outward and upward into the sky, where it is not wanted, instead of focusing it downward, where it is. Wherever human light spills into the natural world, some aspect of life – migration, reproduction, feeding – is affected. For most of human history, the phrase “light pollution” would have made no sense. Imagine walking toward London on a moonlit night around 1800, when it was one of Earth’s most populous cities. Nearly a million people lived there, making do, as they always had, with candles and lanterns. There would be no gaslights in the streets or squares for another seven years.
            </p>
            <br />
            <p>
            <strong>C.</strong> Now, most of humanity lives under reflected, refracted light from overlit cities and suburbs, from light-flooded roads and factories. Nearly all of night-time Europe is a bright patch of light, as is most of the United States and much of Japan. In the South Atlantic, the glow from a single fishing fleet – squid fishermen luring their prey with metal halide lamps – can be seen from space, burning brighter on occasions than Buenos Aires. In most cities, the sky looks as though it has been emptied of stars, and
taking their place is a constant orange glow. We’ve become so used to this that the glory of an unlit night – dark enough for the planet Venus to throw shadows on Earth – is wholly beyond our experience, beyond memory almost. And yet above the city’s pale ceiling lies the rest of the universe, utterly undiminished by the light we waste.
            </p>
            <br>
            <p>
            <strong>D.</strong> We’ve lit up the night as if it were an unoccupied country when nothing could be further from the truth. Among mammals alone, the number of nocturnal species is astonishing. Light is a powerful biological force, and on many species, it acts as a magnet. The effect is so powerful that scientists speak of songbirds and seabirds being ‘captured’ by searchlights on land or by the light from gas flares on marine oil platforms, circling and circling in the thousands until they drop. Migrating at night, birds are apt to collide with brightly lit buildings; immature birds suffer in much higher numbers than adults.
            </p>
            <br>
            <p>
            <strong>E.</strong> Insects, of course, cluster around streetlights, and feeding on those insects is a crucial means of survival for many bat species. In some Swiss valleys, the European lesser horseshoe bat began to vanish after streetlights were installed, perhaps because those valleys were suddenly filled with fight-feeding pipistrelle bats. Other nocturnal mammals, like desert rodents and badgers, are more cautious about searching for food under the permanent full moon of fight pollution because they’ve become easier targets for the predators who are hunting them.
            </p>
            <br>
            <p>
            <strong>F.</strong> Some birds – blackbirds and nightingales, among others-sing at unnatural hours in the presence of artificial light. Scientists have determined that long artificial days — and artificially short nights — induce early breeding in a wide range of birds. And because a longer day allows for longer feeding, it can also affect migration schedules. The problem, of course, is that migration, like most other aspects of bird behaviour, is a precisely timed biological behaviour. Leaving prematurely may mean reaching a destination too soon for nesting conditions to be right.
            </p>
            <br>
            <p>
            <strong>G.</strong> Nesting sea turtles, which seek out dark beaches, find fewer and fewer of them to bury their eggs on. When the baby sea turtles emerge from the eggs, they gravitate toward the brighter, more reflective sea horizon but find themselves confused by artificial lighting behind the beach. In Florida alone, hatching losses number in the hundreds of thousands every year. Frogs and toads living on the side of major highways suffer nocturnal fight levels that are as much as a million times brighter than normal, disturbing nearly every aspect of their behaviour, including their night-time breeding choruses.
            </p>
            <br>
            <p>
            <strong>H.</strong> It was once thought that light pollution only affected astronomers, who need to see the night sky in all its glorious clarity. And, in fact, some of the earliest civic efforts to control light pollution were made half a century ago to protect the view from Lowell Observatory in Flagstaff, Arizona. In 2001 Flagstaff was declared the first International Dark Sky City. By now the effort to control light pollution has spread around the globe. More and more dues and even entire countries have committed themselves to reduce
unwanted glare.
            </p>
            <br><br>
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
