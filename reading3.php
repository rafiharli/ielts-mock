<?php include('config/constants.php'); ?>

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
    <title>Reading Passage 3</title>
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
            Reading Passage 3
            <input class="no-style finish cursor" type="submit" name="submit" value="Finish">
            </input>
          </p>
          <p style="margin-left: 20px;margin-top:5px;">You should spend about 20 minutes on Questions 27-40, which are based on Reading Passage 3 below.<span class="count-time" id="countdown"></span></p>
        <br>
      </div>

      <!-- ISI -->

      <div class="Content">
        <div class="Wrapper">
          <div class="RightContent" style="text-align: justify">
              <div>
                <br>
                <p>
                  <h2><strong>Question 27-30</strong></h2>
                </p>
                <br>
                <p>
                Choose the correct letter, A, B, C or D
                </p>
                <br>
                <p>
                Write the correct letter in boxes 27-30 on your answer sheet.
                </p>

                <br>
                <p style="border-bottom:solid;"></p>
                <br>

                <p>
                  <h3 style="margin-bottom:3px;">Question 27</h3>
                  In the first paragraph, why does the writer say ‘This is not merely an academic debate’?
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read27" value="A">A. Anthropologists’ theories need to be backed up by practical research.</input></li></label>
                  <label><li><input type="radio" name="read27" value="B">B. There have been some important misunderstandings among anthropologists.</input></li></label>
                  <label><li><input type="radio" name="read27" value="C">C. The attitudes of anthropologists towards adolescence are changing.</input></li></label>
                  <label><li><input type="radio" name="read27" value="D">D. The work of anthropologists could inform our understanding of modem adolescence.</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 28</h3>
                  What was Susan Anton’s opinion of the Turkana boy?
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read28" value="A">A. He would have experienced an adolescent phase had he lived.</input></li></label>
                  <label><li><input type="radio" name="read28" value="B">B. His skull showed he had already reached adulthood.</input></li></label>
                  <label><li><input type="radio" name="read28" value="C">C. His skeleton and teeth could not be compared to those from a more modern age.</input></li></label>
                  <label><li><input type="radio" name="read28" value="D">D. He must have grown much faster than others alive at the time.</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 29</h3>
                  What point does Steven Leigh make?
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read29" value="A">A. Different parts of the human skeleton develop at different speeds.</input></li></label>
                  <label><li><input type="radio" name="read29" value="B">B. The growth period of many apes is confined to times when there is enough food.</input></li></label>
                  <label><li><input type="radio" name="read29" value="C">C. Humans have different rates of development from each other depending on living conditions.</input></li></label>
                  <label><li><input type="radio" name="read29" value="D">D. The growth phase in most apes lasts longer if more food is available.</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 30</h3>
                  What can we learn from a mammal’s teeth?
                </p>
              
                <ul>
                  <label><li><input type="radio" name="read30" value="A">A. A poor diet will cause them to grow more slowly.</input></li></label>
                  <label><li><input type="radio" name="read30" value="B">B. They are a better indication of a lifestyle than a skeleton.</input></li></label>
                  <label><li><input type="radio" name="read30" value="C">C. Their growing period is difficult to predict accurately.</input></li></label>
                  <label><li><input type="radio" name="read30" value="D">D. Their speed of growth is directly related to the body’s speed of development.</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <br>
                <p>
                  <h2><strong>Question 31-36</strong></h2>
                </p>
                <br>
                <p>
                Do the following statements agree with the claims of the writer in Reading Passage 3.
                </p>
                <br>
                <p>
                In boxes 31-36 on your answer sheet, choose:
                </p>
                <br>
                <p><strong>YES</strong>, if the statement agrees with the claims of the writer.</p>
                <p><strong>NO</strong>, if the statement contradicts the claims of the writer.</p>
                <p><strong>NOT GIVEN</strong>, if it is impossible to say what the writer thinks about this.</p>
                <br>
                <p style="border-bottom:solid;"></p>
                <br>
              </div>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 31</h3>
                  It is difficult for anthropologists to do research on human fossils because they are so rare.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read31" value="YES">YES</input></li></label>
                  <label><li><input type="radio" name="read31" value="NO">NO</input></li></label>
                  <label><li><input type="radio" name="read31" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 32</h3>
                  Modern methods mean it is possible to predict the age of a skeleton with accuracy.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read32" value="YES">YES</input></li></label>
                  <label><li><input type="radio" name="read32" value="NO">NO</input></li></label>
                  <label><li><input type="radio" name="read32" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 33</h3>
                  Susan Anton’s conclusion about the Turkana boy reinforces an established idea.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read33" value="YES">YES</input></li></label>
                  <label><li><input type="radio" name="read33" value="NO">NO</input></li></label>
                  <label><li><input type="radio" name="read33" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 34</h3>
                  Steven Leigh’s ideas are likely to be met with disbelief by many anthropologists.
                </p>
              
                <ul>
                  <label><li><input type="radio" name="read34" value="YES">YES</input></li></label>
                  <label><li><input type="radio" name="read34" value="NO">NO</input></li></label>
                  <label><li><input type="radio" name="read34" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 35</h3>
                  Researchers in France and Spain developed a unique method of analysing teeth.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read35" value="YES">YES</input></li></label>
                  <label><li><input type="radio" name="read35" value="NO">NO</input></li></label>
                  <label><li><input type="radio" name="read35" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 36</h3>
                  There has been too little research comparing the brains of Homo erectus and Neanderthals.
                </p>
                
                <ul>
                  <label><li><input type="radio" name="read36" value="YES">YES</input></li></label>
                  <label><li><input type="radio" name="read36" value="NO">NO</input></li></label>
                  <label><li><input type="radio" name="read36" value="NOT GIVEN">NOT GIVEN</input></li></label>
                </ul>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
              <br>
                <p>
                  <h2><strong>Question 37-40</strong></h2>
                </p>
                <br>
                <p>
                Complete each sentence with the correct ending, A-G, below.
                </p>
                <br>
                <p>
                <strong>Write the correct letter, A-G, in boxes 37-40 on your answer sheet.</strong>
                </p>
                <br>
                <p><strong>List of Headings</strong></p>
                <p>A. inconsistencies between height, skeleton and dental evidence.</p>
                <p>B. the fact that human beings walk on two legs.</p>
                <p>C. the way teeth grew.</p>
                <p>D. a need to be dependent on others for survival.</p>
                <p>E. difficult climatic conditions.</p>
                <p>F. increased quantities of food.</p>
                <p>G. the existence of much larger brains than previously.</p>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 37</h3>
                  Until recently, delayed growth in humans until adolescence was felt to be due to .....
                </p>
                
                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read37" value="A">A</input></label></td>
                            <td><label><input type="radio" name="read37" value="C">C</input></label></td>     
                            <td><label><input type="radio" name="read37" value="E">E</input></label></td>
                            <td><label><input type="radio" name="read37" value="G">G</input></label></td>   
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read37" value="B">B</input></label></td>
                            <td><label><input type="radio" name="read37" value="D">D</input></label></td>     
                            <td><label><input type="radio" name="read37" value="F">F</input></label></td>
                        </tr>
                    </tbody>
                </table>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 38</h3>
                  In her research, Margaret Clegg discovered .....
                </p>
                
                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read38" value="A">A</input></label></td>
                            <td><label><input type="radio" name="read38" value="C">C</input></label></td>     
                            <td><label><input type="radio" name="read38" value="E">E</input></label></td>
                            <td><label><input type="radio" name="read38" value="G">G</input></label></td>     
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read38" value="B">B</input></label></td>
                            <td><label><input type="radio" name="read38" value="D">D</input></label></td>     
                            <td><label><input type="radio" name="read38" value="F">F</input></label></td>    
                        </tr>
                    </tbody>
                </table>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 39</h3>
                  Steven Leigh thought the existence of adolescence is connected to .....
                </p>
                
                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read39" value="A">A</input></label></td>
                            <td><label><input type="radio" name="read39" value="C">C</input></label></td>     
                            <td><label><input type="radio" name="read39" value="E">E</input></label></td>
                            <td><label><input type="radio" name="read39" value="G">G</input></label></td>
                                 
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read39" value="B">B</input></label></td>
                            <td><label><input type="radio" name="read39" value="D">D</input></label></td>     
                            <td><label><input type="radio" name="read39" value="F">F</input></label></td>
                                
                        </tr>
                    </tbody>
                </table>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 40</h3>
                  Research on Neanderthals suggests that they had short lives because of .....
                </p>

                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read40" value="A">A</input></label></td>
                            <td><label><input type="radio" name="read40" value="C">C</input></label></td>     
                            <td><label><input type="radio" name="read40" value="E">E</input></label></td>
                            <td><label><input type="radio" name="read40" value="G">G</input></label></td>
                                 
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read40" value="B">B</input></label></td>
                            <td><label><input type="radio" name="read40" value="D">D</input></label></td>     
                            <td><label><input type="radio" name="read40" value="F">F</input></label></td>
                                
                        </tr>
                    </tbody>
                </table>
              </div>
              <br><br>
              </form>
              <?php 

      if(isset($_POST['submit']))
      {
        $read27 = $_POST['read27'];
        $read28 = $_POST['read28'];
        $read29 = $_POST['read29'];
        $read30 = $_POST['read30'];
        $read31 = $_POST['read31'];
        $read32 = $_POST['read32'];
        $read33 = $_POST['read33'];
        $read34 = $_POST['read34'];
        $read35 = $_POST['read35'];
        $read36 = $_POST['read36'];
        $read37 = $_POST['read37'];
        $read38 = $_POST['read38'];
        $read39 = $_POST['read39'];
        $read40 = $_POST['read40'];
        
        $sql = "UPDATE reading SET
                read27='$read27',
                read28='$read28',
                read29='$read29',
                read30='$read30',
                read31='$read31',
                read32='$read32',
                read33='$read33',
                read34='$read34',
                read35='$read35',
                read36='$read36',
                read37='$read37',
                read38='$read38',
                read39='$read39',
                read40='$read40'
                WHERE id='$id'
                ";

        $res = mysqli_query($conn,$sql);
       
        if($res==true)
        {
          header("location:".SITEURL."sound.php?id=".htmlspecialchars($id)."&name=".htmlspecialchars($name));
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
            <h2 class="text-center"><strong>Reading Passage 3</strong></h2>
            <br>
            <p>
           <strong>A.</strong> Our ancestor, Homo erectus, may not have had culture or even language, but did they have teenagers? That question has been contested in the past few years, with some anthropologists claiming evidence of an adolescent phase in human fossil. This is not merely an academic debate. Humans today are the only animals on Earth to have a teenage phase, yet we have very little idea why. Establishing exactly when adolescence first evolved and finding out what sorts of changes in our bodies and lifestyles it was associated with could help us understand its
purpose. Why do we, uniquely, have a growth spurt so late in life?
            </p>
            <br />
            <p>
            <strong>B.</strong> Until recently, the dominant explanation was that physical growth is delayed by our need to grow large brains and to learn all the behaviour patterns associated with humanity – speaking, social interaction and so on. While such behaviour is still developing, humans cannot easily fend for themselves, so it is best to stay small and look youthful. That way your parents and other
members of the social group are motivated to continue looking after you. What’s more, studies of mammals show a strong relationship between brain size and the rate of development, with larger-brained animals taking longer to reach adulthood. Humans are at the far end of this spectrum. If this theory is correct, and the development of large brains accounts for the teenage growth spurt, the origin of adolescence should have been with the evolution of our own species (Homo sapiens) and Neanderthals, starting almost 200,000 years ago. The trouble is, some of the fossil evidence seems to tell a different story.
            </p>
            <br />
            <p>
            <strong>C.</strong> The human fossil record is extremely sparse, and the number of fossilised children minuscule. Nevertheless, in the past few years, anthropologists have begun to look at what can be learned of the lives of our ancestors from these youngsters. One of the most studied is the famous Turkana boy, an almost complete skeleton of Homo erectus from 1.6 million years ago found in Kenya in 1984. Accurately assessing how old someone is from their skeleton is a tricky business. Even with a modern human, you can only make a rough estimate based on the
developmental stage of teeth and bones and the skeleton’s general size.</p>
            <br>
            <p>
            <strong>D.</strong> You need as many developmental markers as possible to get an estimate of age. The Turkana boy’s teeth made him 10 or 11 years old. The features of his skeleton put him at 13, but he was
as tall as a modern 15-year-old. Susan Anton of New York University points to research by Margaret Clegg who studied a collection of 18th- and 19th-century skeletons whose ages at death were known. When she tried to age the skeletons without checking the records, she found similar discrepancies to those of the Turkana boy. One 10-year-old boy, for example, had a dental age of 9, the skeleton of a 6-year-old but was tall enough to be 11. The Turkana kid still has a rounded skull, and needs more growth to reach the adult shape,’ Anton adds. She thinks that Homo erectus had already developed modern human patterns of growth, with a late, if not quite so extreme, adolescent spurt. She believes Turkana boy was just about to enter it.
            </p>
            <br>
            <p>
            <strong>E.</strong> If Anton is right, that theory contradicts the orthodox idea linking late growth with the development of a large brain. Anthropologist Steven Leigh from the University of Illinois goes further. He believes the idea of adolescence as catch-up growth does not explain why the growth rate increases so dramatically. He says that many apes have growth spurts in particular body regions that are associated with reaching maturity, and this makes sense because by timing the short but crucial spells of maturation to coincide with the seasons when food is plentiful, they minimise the risk of being without adequate food supplies while growing. What makes humans unique is that the whole skeleton is involved. For Leigh, this is the key.
            </p>
            <br>
            <p>
            <strong>F.</strong> According to his theory, adolescence evolved as an integral part of efficient upright locomotion, as well as to accommodate more complex brains. Fossil evidence suggests that our ancestors first walked on two legs six million years ago. If proficient walking was important for survival, perhaps the teenage growth spurt has very ancient origins. While many anthropologists will consider Leigh’s theory a step too far, he is not the only one with new ideas about the evolution of teenagers.
            </p>
            <br>
            <p>
            <strong>G.</strong> Another approach, which has produced a surprising result, relies on the minute analysis of tooth growth. Every nine days or so the growing teeth of both apes and humans acquire ridges on their enamel surface. These are like rings in a tree trunk: the number of them tells you how long the crown of a tooth took to form. Across mammals, the rate at which teeth develop is closely related to how fast the brain grows and the age you mature. Teeth are good indicators of life history because their growth is less related to the environment and nutrition than is the growth of the skeleton.
            </p>
            <br>
            <p>
            <strong>H.</strong> A more decisive piece of evidence came last year when researchers in France and Spain published their findings from a study of Neanderthal teeth. Neanderthals had much-festered tooth growth than Homo erectus who went before them, and hence, possibly, a shorter childhood. Lead researcher Fernando Ramirez-Rozzi thinks Neanderthals died young – about 25 years old — primarily because of the cold, harsh environment they had to endure in glacial Europe. They evolved to grow up quicker than their immediate ancestors. Neanderthals and
Homo erectus probably had to reach adulthood fairly quickly, without delaying for an adolescent growth spurt. So it still looks as though we are the original teenagers.
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
