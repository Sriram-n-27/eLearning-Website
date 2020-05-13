<?php
error_reporting(0);
$title = "Code away!";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION

$a = array(
1 => array(
   0 => "C++ is a:",
   1 => "Middle level language",
   2 => "Low level language",
   3 => "Machine Language",
   4 => "Assembly Language",
   5 => "None of the above",
   6 => 1
),
2 => array(
   0 => "C++ was developed by:",
   1 => "Albert Einstein",
   2 => "Bjarne Stroustrup",
   3 => "Isaac Newton",
   4 => "Donald Trump",
   5 => "None of the above",
   6 => 2
),

3 => array(
   0 => "In C++ main() is where:",
   1 => "Program Execution ends",
   2 => "Program collapses",
   3 => "Program Execution begins",
   4 => "Middle of the program is defined",
   5 => "None of the above",
   6 => 3
),
4 => array(
   0 => "returns 0",
   1 => "terminates main( )function",
   2 => "ends main()function",
   3 => "does nothing",
   4 => "executes the penultimate statement",
   5 => "None of the above",
   6 => 4
),
5 => array(
   0 => "Which of the following is not a C++ identifier:",
   1 => "My Name",
   2 => "helloWorld",
   3 => "age",
   4 => "length",
   5 => "None of the above",
   6 => 1
)
    );

$max=5;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentage=0;
        }else{
        $percentage= Round(100*$ok / $question);
        }
?>

<HTML><HEAD><TITLE>CodeBridge:<?php print $title; ?></TITLE>

<SCRIPT LANGUAGE='JavaScript'>
<!-- 
function Goahead (number){
        if (document.percentage.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentage.response.value=1
                        document.percentage.question.value++
                        document.percentage.ok.value++
                }else{
                        document.percentage.response.value=1
                        document.percentage.question.value++
                }
        }
        if (number==<?php print $a[$randval2][6] ; ?>){
                document.question.response.value="Correct"
        }else{
                document.question.response.value="Incorrect"
        }
}
// -->
</SCRIPT>
    
    
<link rel="stylesheet" href="circle.css">
    <style type="text/css">
    #contain
        {
            
            margin-left:37%;
            
        }
    
    </style>
</HEAD>
<BODY style="background-image:url(quizbg.jpg);background-size:     cover;">

<CENTER><br>        
        <P style="color:white;background-color:black;opacity:0.7;font-size:350%;"><?php print "$title"; ?></P>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>
<BR>
<?php if ($question<$max){ ?>

<TR style="color:black;background-color:#F0F8FF;opacity:0.8;"><TD>
<FORM METHOD=POST NAME="question" ACTION="">
    <b>Question <?php print $question+1; ?>) <?php print "<b>".$a[$randval2][0]."</b>"; ?></b>
    <BR><hr color=black>
 
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>


</FORM>
    <HR color=black>
    
    <TR style="color:black;background-color:#ADD8E6;opacity:0.8;"><TD>
<FORM METHOD=POST NAME="percentage" ACTION="<?php print $URL; ?>">

    <!--<BR>percentage of correct responses: <?php print $percentage; ?> %-->&nbsp;&nbsp;<?php print $question+1; ?> / <?php print $max; ?> <object align='right'><input type=submit value="Next >>"><input type=hidden name=response value=0><input type=hidden name=question value=<?php print $question; ?>><input type=hidden name=ok value=<?php print $ok; ?>><input type=hidden name=Randon value=<?php print $randval; ?>>&nbsp;&nbsp;</object>
</FORM>
<HR>
</TD>
</TR>

<?php
}elseif($ok>2){
    
?>
    <H1 style="color:#FFFFE0;background-color:#191970;opacity:0.7;width:40%">The Quiz has finished</H1>
    <H1 style="color:#FFFFE0;background-color:#191970;opacity:0.7;width:40%">CONGRATULATIONS YOU PASSED THE TEST AND MAY PROCEED TO PRINT THE CERTIFICATE AND GO BACK TO HOME</H1>
    <p style="color:#FFFFE0;background-color:orangered;opacity:0.7;width:39%"><a style="color:#FFFFE0;" HREF="Codersden.htm">HOME</a><p>
<TR style="color:black;background-color:#4286f4;opacity:0.8;"><TD ALIGN=Center>

    <p><b>Total number of questions: <?php print $max ; ?></b></p><hr color='black'>
    <p><b>Number of correct responses: <?php print $ok ; ?> </b></p><hr color='black'>
    <p><b>Number of incorrect responses: <?php print $max-$ok ; ?></b> </p><hr color='black'>
    <p><b>Percentage of correct responses: <?php print $percentage ; ?></b> %<br>
    <div id="contain">
        <div class="clearfix">
                
                <div id="pie" class="c100 p<?php print $percentage ; ?> orange" >
                    <span><?php print $percentage ; ?>%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                
                </div>
        </div></p></b>
        <a href="certicifatecpp.php?value_key=<?php print $percentage ; ?>">Certificate</a>
        
<?php 
}else{
?>
  <H1 style="color:#FFFFE0;background-color:#191970;opacity:0.7;width:40%">The Quiz has finished</H1>
        <H1 style="color:#FFFFE0;background-color:#191970;opacity:0.7;width:40%">YOU COULD NOT PASS THE QUIZ. GO AHEAD AND GIVE IT ANOTHER SHOT</H1>
    <p style="color:#FFFFE0;background-color:orangered;opacity:0.7;width:39%"><a style="color:#FFFFE0;" HREF="Codersden.htm">HOME</a><p>
<TR style="color:black;background-color:#4286f4;opacity:0.8;"><TD ALIGN=Center>

    <p><b>Total number of questions: <?php print $max ; ?></b></p><hr color='black'>
    <p><b>Number of correct responses: <?php print $ok ; ?> </b></p><hr color='black'>
    <p><b>Number of incorrect responses: <?php print $max-$ok ; ?></b> </p><hr color='black'>
    <p><b>Percentage of correct responses: <?php print $percentage ; ?></b> %<br>
    <div id="contain">
        <div class="clearfix">
                
                <div id="pie" class="c100 p<?php print $percentage ; ?> orange" >
                    <span><?php print $percentage ; ?>%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                
                </div>
        </div></p></b>
  <?php } ?>

</TD></TR>
</TABLE>
    
<?php 
$sql = "INSERT INTO users (CPP) " 
            . "VALUES ('$percentage')";
?>
    
</CENTER>
</BODY>
</HTML>