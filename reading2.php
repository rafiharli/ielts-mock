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
    <title>Reading Passage 2</title>
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
            Reading Passage 2 
            <input class="no-style finish cursor" type="submit" name="submit" value="Finish">
            </input>
          </p>
          <p style="margin-left: 20px;margin-top:5px;">You should spend about 20 minutes on Questions 14-26, which are based on Reading Passage 2 below.<span class="count-time" id="countdown"></span></p>
        <br>
      </div>

      <!-- ISI -->

      <div class="Content">
        <div class="Wrapper">
          <div class="RightContent" style="text-align: justify">
              <div>
                <br>
                <p>
                  <h2><strong>Question 14-20</strong></h2>
                </p>
                <br>
                <p>
                Reading Passage 2 has seven paragraphs. A-G.
                </p>
                <br>
                <p>
                <strong>Choose the correct heading for A-G from the list of headings below.</strong>
                </p>
                <p>
                <strong>Write the correct number, i-x, in boxes 14-20 on your answer sheet.</strong>
                </p>
                <br>
                <p><strong>List of Headings</strong></p>
                <p>i. A comparison between similar buildings</p>
                <p>ii. The negative reaction of local residents</p>
                <p>iii. An unusual job for a psychologist</p>
                <p>iv. A type of building benefiting from prescribed guidelines</p>
                <p>v. The need for government action</p>
                <p>vi. A failure to use available information in practical ways</p>
                <p>vii. Academics with an unhelpful attitude</p>
                <p>viii. A refusal by architects to accept criticism</p>
                <p>ix. A unique co-operative scheme</p>
                <p>x. The expanding scope of environmental psychology</p>
                <br>
                <p style="border-bottom:solid;"></p>
                <br>
                <p>
                  <h3 style="margin-bottom:3px;">Question 14</h3>
                  Paragraph A
                </p>
                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read14" value="i">i</input></label></td>
                            <td><label><input type="radio" name="read14" value="ii">ii</input></label></td>     
                            <td><label><input type="radio" name="read14" value="iii">iii</input></label></td>
                            <td><label><input type="radio" name="read14" value="iv">iv</input></label></td>
                            <td><label><input type="radio" name="read14" value="v">v</input></label></td>     
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read14" value="vi">vi</input></label></td>
                            <td><label><input type="radio" name="read14" value="vii">vii</input></label></td>     
                            <td><label><input type="radio" name="read14" value="viii">viii</input></label></td>
                            <td><label><input type="radio" name="read14" value="ix">ix</input></label></td>
                            <td><label><input type="radio" name="read14" value="x">x</input></label></td>     
                        </tr>
                    </tbody>
                </table>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 15</h3>
                  Paragraph B
                </p>
                
                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read15" value="i">i</input></label></td>
                            <td><label><input type="radio" name="read15" value="ii">ii</input></label></td>     
                            <td><label><input type="radio" name="read15" value="iii">iii</input></label></td>
                            <td><label><input type="radio" name="read15" value="iv">iv</input></label></td>
                            <td><label><input type="radio" name="read15" value="v">v</input></label></td>     
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read15" value="vi">vi</input></label></td>
                            <td><label><input type="radio" name="read15" value="vii">vii</input></label></td>     
                            <td><label><input type="radio" name="read15" value="viii">viii</input></label></td>
                            <td><label><input type="radio" name="read15" value="ix">ix</input></label></td>
                            <td><label><input type="radio" name="read15" value="x">x</input></label></td>     
                        </tr>
                    </tbody>
                </table>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 16</h3>
                  Paragraph C
                </p>
                
                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read16" value="i">i</input></label></td>
                            <td><label><input type="radio" name="read16" value="ii">ii</input></label></td>     
                            <td><label><input type="radio" name="read16" value="iii">iii</input></label></td>
                            <td><label><input type="radio" name="read16" value="iv">iv</input></label></td>
                            <td><label><input type="radio" name="read16" value="v">v</input></label></td>     
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read16" value="vi">vi</input></label></td>
                            <td><label><input type="radio" name="read16" value="vii">vii</input></label></td>     
                            <td><label><input type="radio" name="read16" value="viii">viii</input></label></td>
                            <td><label><input type="radio" name="read16" value="ix">ix</input></label></td>
                            <td><label><input type="radio" name="read16" value="x">x</input></label></td>     
                        </tr>
                    </tbody>
                </table>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 17</h3>
                  Paragraph D
                </p>
              
                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read17" value="i">i</input></label></td>
                            <td><label><input type="radio" name="read17" value="ii">ii</input></label></td>     
                            <td><label><input type="radio" name="read17" value="iii">iii</input></label></td>
                            <td><label><input type="radio" name="read17" value="iv">iv</input></label></td>
                            <td><label><input type="radio" name="read17" value="v">v</input></label></td>     
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read17" value="vi">vi</input></label></td>
                            <td><label><input type="radio" name="read17" value="vii">vii</input></label></td>     
                            <td><label><input type="radio" name="read17" value="viii">viii</input></label></td>
                            <td><label><input type="radio" name="read17" value="ix">ix</input></label></td>
                            <td><label><input type="radio" name="read17" value="x">x</input></label></td>     
                        </tr>
                    </tbody>
                </table>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 18</h3>
                  Paragraph E
                </p>
                
                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read18" value="i">i</input></label></td>
                            <td><label><input type="radio" name="read18" value="ii">ii</input></label></td>     
                            <td><label><input type="radio" name="read18" value="iii">iii</input></label></td>
                            <td><label><input type="radio" name="read18" value="iv">iv</input></label></td>
                            <td><label><input type="radio" name="read18" value="v">v</input></label></td>     
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read18" value="vi">vi</input></label></td>
                            <td><label><input type="radio" name="read18" value="vii">vii</input></label></td>     
                            <td><label><input type="radio" name="read18" value="viii">viii</input></label></td>
                            <td><label><input type="radio" name="read18" value="ix">ix</input></label></td>
                            <td><label><input type="radio" name="read18" value="x">x</input></label></td>     
                        </tr>
                    </tbody>
                </table>
              </div>

              <br>
                <p style="border-bottom:solid;"></p>
              <br>
              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 19</h3>
                  Paragraph F
                </p>
                
                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read19" value="i">i</input></label></td>
                            <td><label><input type="radio" name="read19" value="ii">ii</input></label></td>     
                            <td><label><input type="radio" name="read19" value="iii">iii</input></label></td>
                            <td><label><input type="radio" name="read19" value="iv">iv</input></label></td>
                            <td><label><input type="radio" name="read19" value="v">v</input></label></td>     
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read19" value="vi">vi</input></label></td>
                            <td><label><input type="radio" name="read19" value="vii">vii</input></label></td>     
                            <td><label><input type="radio" name="read19" value="viii">viii</input></label></td>
                            <td><label><input type="radio" name="read19" value="ix">ix</input></label></td>
                            <td><label><input type="radio" name="read19" value="x">x</input></label></td>     
                        </tr>
                    </tbody>
                </table>
              </div>
              <br>
                <p style="border-bottom:solid;"></p>
              <br>
              <div>
                <p>
                  <h3 style="margin-bottom:3px;">Question 20</h3>
                  Pargraph G
                </p>
                
                <table style="margin-top:10px;">
                    <tbody>
                        <tr>
                            <td><label><input type="radio" name="read20" value="i">i</input></label></td>
                            <td><label><input type="radio" name="read20" value="ii">ii</input></label></td>     
                            <td><label><input type="radio" name="read20" value="iii">iii</input></label></td>
                            <td><label><input type="radio" name="read20" value="iv">iv</input></label></td>
                            <td><label><input type="radio" name="read20" value="v">v</input></label></td>     
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="read20" value="vi">vi</input></label></td>
                            <td><label><input type="radio" name="read20" value="vii">vii</input></label></td>     
                            <td><label><input type="radio" name="read20" value="viii">viii</input></label></td>
                            <td><label><input type="radio" name="read20" value="ix">ix</input></label></td>
                            <td><label><input type="radio" name="read20" value="x">x</input></label></td>     
                        </tr>
                    </tbody>
                </table>
              </div>
              <br>
                <p style="border-bottom:solid;"></p>
              <br>

              <div>
                <p>
                  <h2><strong>Question 21-22</strong></h2>
                </p>
                <br>
                <p>
                Choose <strong>TWO</strong> letters, A-E.
                </p>
                <p>Write the correct letters in boxes 21 and 22 on your answer sheet.</p>
                <br>
              </div>

            <div>
                <p>
                <strong>Which TWO of the following benefits are said to arise from the use of environmental psychology when planning buildings?</strong>
                </p>
                <ul>
                    <label><li><input name="read21_22[]" type="checkbox" value="A">A. Better relationships between staff.</li></label>
                    <label><li><input name="read21_22[]" type="checkbox" value="B">B. Improved educational performance.</li></label>
                    <label><li><input name="read21_22[]" type="checkbox" value="C">C. Reduction of environmental pollution.</li></label>
                    <label><li><input name="read21_22[]" type="checkbox" value="D">D. Fewer mistakes made by medical staff.</li></label>
                    <label><li><input name="read21_22[]" type="checkbox" value="E">E. Easier detection of crime.</li></label>
                </ul>
            </div>

            <br>
                <p style="border-bottom:solid;"></p>
            <br>
            <div>
                <p>
                  <h2><strong>Question 23-24</strong></h2>
                </p>
                <br>
                <p>
                Choose <strong>TWO</strong> letters, A-E.
                </p>
                <p>Write the correct letters in boxes 23 and 24 on your answer sheet.</p>
                <br>
              </div>

            <div>
                <p>
                <strong>Which TWO of the following research methods are mentioned in the passage?</strong>
                </p>
                <ul>
                    <label><li><input name="read23_24[]" type="checkbox" value="A">A. The use of existing data relating to a geographical area.</li></label>
                    <label><li><input name="read23_24[]" type="checkbox" value="B">B. Measuring the space given to a variety of activities</li></label>
                    <label><li><input name="read23_24[]" type="checkbox" value="C">C. Watching what people do in different parts of a building.</li></label>
                    <label><li><input name="read23_24[]" type="checkbox" value="D">D. Analyzing decisions made during the planning of a building.</li></label>
                    <label><li><input name="read23_24[]" type="checkbox" value="E">E. Observing patients’ reactions to each other.</li></label>
                </ul>
            </div>
            <br>
                <p style="border-bottom:solid;"></p>
            <br>
            <div>
                <p>
                  <h2><strong>Question 25-26</strong></h2>
                </p>
                <br>
                <p>Complete the sentences below</p>
                <br>
                <p>Choose <strong>NO MORE THAN TWO WORDS</strong> from the passage for each answer.</p>
                <p>Write your answers in boxes 25 and 26 on your answer sheet.</p>
                <br>
                <p><strong>25</strong>. The students from England suggested that the Scottish students should identify their <input name="read25" class="text-center" type="text" placeholder="25"></p>
                <br>
                <p><strong>26</strong>. John Zeisel believes that if the of a building is clear, patient outcomes will improve <input name="read26" class="text-center" type="text" placeholder="26"></p>
              </div>
              <br><br>
              </form>
              <?php 

      if(isset($_POST['submit']))
      {
        $read14 = $_POST['read14'];
        $read15 = $_POST['read15'];
        $read16 = $_POST['read16'];
        $read17 = $_POST['read17'];
        $read18 = $_POST['read18'];
        $read19 = $_POST['read19'];
        $read20 = $_POST['read20'];
        $read21_22 = $_POST['read21_22'];
        $read23_24 = $_POST['read23_24'];
        $read25 = $_POST['read25'];
        $read26 = $_POST['read26'];

        $cek21_22="";
          foreach($read21_22 as $cek1)  
          {  
            $cek21_22 .= $cek1.".";  
          }
        $cek23_24="";
          foreach($read23_24 as $cek2)  
          {  
            $cek23_24 .= $cek2.".";  
          }
        
        
        $sql = "UPDATE reading SET
                read14='$read14',
                read15='$read15',
                read16='$read16',
                read17='$read17',
                read18='$read18',
                read19='$read19',
                read20='$read20',
                read21_22='$cek21_22',
                read23_24='$cek23_24',
                read25='$read25',
                read26='$read26'
                WHERE id='$id'
                ";

        $res = mysqli_query($conn,$sql);
          
        if($res==true)
        {
          header("location:".SITEURL."reading3.php?id=".htmlspecialchars($id)."&name=".htmlspecialchars($name));
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
            <h2 class="text-center"><strong>Is there a psychologist in the building?</strong></h2>
            <br>
            <p>
            — CHRISTIAN JARRETT reports on psychology’s place in new architectural development. —
            </p>
            <br>
            <p>
           <strong>A.</strong> The space around us affects us profoundly – rebuilding of one south London school as a striking emotionally, behaviorally, cognitively. In Britain, that example of how building design can affect human space is changing at a pace not seen for a generation. But is anyone listening? ‘This is a hugely recognised country’s psychology research that is not only relevant but
improved schools. At the moment we’re talking to ourselves,’ says Chris Spencer, professor of environmental psychology at the University of Sheffield. Spencer recalls a recent talk he gave in which he called on fellow researchers to make a greater effort to communicate their findings to architects and planners. ‘I was amazed at the response of many of the senior researchers, who would say: “I’m doing my research for pure science, the industry can take it or leave it”. But there are models of how to apply environmental psychology to real problems if you know where to look Professor Frances Kuo is an example.
            </p>
            <br />
            <p>
            <strong>B.</strong> Kuo’s website provides pictures and plain English ” The collaborative project currently summaries of the research conducted by her Human stands as a one-off experiment. ” Among these is trainee architects will now go away with some a study using police records that found inner-city surrounded by more vegetation suffered 52 per cent fewer crimes than apartment blocks with little or no greenery. Frances Kuo and her co-researcher William Sullivan believe that greenery reduces crime – so long as visibility is preserved – because it reduces aggression, brings local residents together outdoors, and the conspicuous presence of people deters criminals.</p>
            <br />
            <p>
            <strong>C.</strong> ‘Environmental psychologists are increasingly in demand,’ says David Uzzell, professor of environmental psychology. ‘We’re asked to contribute to the planning, design and
management of many different environments, ranging from neighbourhoods, offices, schools, health, transport, traffic and leisure environments for the purpose of improving quality of life and creating a better people-environment fit.’ Uzzell points to the rebuilding of one south London school as a striking example of how building design can affect human behaviour positively. Before its redesign, it was ranked as the worst school in the area – now it is
recognised as one of the country’s twenty most improved schools.</p>
            <br>
            <p>
            <strong>D.</strong> Uzzell has been involved in a pioneering project between M.Sc students in England and Scotland. Architecture students in Scotland acted as designers while environmental psychology students in England acted as consultants, as together they worked on a community project in a run-down area of Glasgow. The psychology students encouraged the architecture students to think about who their client group was, to consider issues of crowding and social cohesion, and they introduced them to psychological methodologies, for example, observation and
interviewing local residents about their needs.’ The collaborative project currently stands as a one-off experiment. ‘Hopefully, these trainee architects will now go away with some understanding of the psychological issues involved in the design and will take into account
people’s needs,’ says Uzzell.</p>
            <br>
            <p>
            <strong>E.</strong> Hilary Barker, a recent graduate in psychology, now works for a design consultancy. She’s part of a four-person research team that contributes to the overall work of the company in helping clients use their office space more productively. Her team all have backgrounds in psychology or social science, but the rest of the firm consists mainly of architects and interior designers. ‘What I do is pretty rare, to be honest,’ Barker says. ‘I feel very privileged to be able to use my degree in such a way.’ Barker explains that the team carries out observational studies on behalf of companies, to identify exactly how occupants are using their building. The companies are often surprised by the findings, for example, that staff use meeting rooms for quiet, individual work.</p>
            <br>
            <p>
            <strong>F.</strong> One area where the findings from the environment- behaviour research have certainly influenced building is in hospital design. The government has a checklist of criteria that must be met in the design of new hospitals, and these are derived largely from the work of the
behavioural scientist Professor Roger Ulrich,’ Chris Spencer says. Ulrich’s work has shown, for example, how the view from a patient’s window can affect their recovery. Even a hospital’s
layout can impact on people’s health, according to Dr John Zeisel. ‘If people get lost in hospitals, they get stressed, which lowers their immune system and means their medication works less well. You might think that way-finding around the hospital is the responsibility of the person who puts all the signs up, but the truth is that the basic layout of a building is what helps people find their way around,’ he says.</p>
            <br>
            <p>
            <strong>G.</strong> Zeisel also points to the need for a better balance between private and shared rooms in hospitals. ‘Falls are reduced and fewer medication errors occur’ in private rooms, he says.
There’s also research showing how important it is that patients have access to the outdoors and that gardens in hospitals are a major contributor to well-being. However, more generally, Zeisel shares Chris Spencer’s concerns that the lessons from environmental psychology research are not getting through. ’There is certainly a gap between what we in social science knowledge and the world of designers and architects,’ says Zeisel. He believes that most industries, from sports to film- making, have now recognised the importance of an evidence-based approach and that the building trade needs to formulate itself more in that vein and to recognise that there is
relevant research out there. ‘It would be outrageous, silly, to go ahead with huge building projects without learning the lessons from the new towns established between 30 and 40 years ago,’ he warns.</p>
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
