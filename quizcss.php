<?php
error_reporting(0);
$title = "Code away!";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION


$a = array(
1 => array(
   0 => "Full form of CSS is:",
   1 => "Cut Style Store",
   2 => "Copy Store Strip",
   3 => "Cascading Style Sheets",
   4 => "Cascade Style Storing",
   5 => "None of the above",
   6 => 3
),
2 => array(
   0 => "Which is not a function of CSS?",
   1 => "building pc games",
   2 => "describes how HTML elements are to be displayed on screen,  
  paper, or in other media",
   3 => "It can control the layout of 
  multiple web pages all at once",
   4 => "For storing external stylesheets",
   5 => "None of the above",
   6 => 1
),

3 => array(
   0 => "CSS does not contain:",
   1 => "selectors",
   2 => "head tag",
   3 => "declaration blocks",
   4 => "styling properties",
   5 => "None of the above",
   6 => 2
),
4 => array(
   0 => "Which character helps select elements with a specific class",
   1 => ".",
   2 => "%",
   3 => "#",
   4 => "$",
   5 => "None of the above",
   6 => 1
),
5 => array(
   0 => "Character used to select element with a specific id is",
   1 => "!",
   2 => "*",
   3 => "&",
   4 => "#",
   5 => "None of the above",
   6 => 4
),
6 => array(
   0 => "What is the correct syntax for CSS comments",
   1 => "Starts with /* and ends with */",
   2 => "Starts with #",
   3 => "Starts with ??",
   4 => "Starts with (",
   5 => "None of the above",
   6 => 1
),
7 => array(
   0 => "Pick the incorrect statement:",
   1 => "Comments are used to explain the code",
   2 => "May help when you edit the source code at a later date",
   3 => "Comments are ignored by browsers.",
   4 => "Comments provide the front end of the application",
   5 => "None of the above",
   6 => 4
),
8 => array(
   0 => "External style sheet is written in:",
   1 => "Only in an android app",
   2 => "One particular software",
   3 => "Text editor",
   4 => "Browsers",
   5 => "None of the above",
   6 => 3
),
9 => array(
   0 => "Inline styles are written in",
   1 => "Greeck",
   2 => "HTML files",
   3 => "notebooks",
   4 => "Javascript",
   5 => "None of the above",
   6 => 2
),
10 => array(
   0 => "a-Browser default b-Inline style c-External and internal style sheets Correct cascading preference order is:",
   1 => "a-b-c",
   2 => "b-c-a",
   3 => "x-y-z",
   4 => "a-c-b",
   5 => "None of the above",
   6 => 2
),
);

$max=10;

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
    <!--<BR>     <input type=text name=response size=8>-->


</FORM>
    <HR color=black>
    
    <TR style="color:black;background-color:#ADD8E6;opacity:0.8;"><TD>
<FORM METHOD=POST NAME="percentage" ACTION="<?php print $URL; ?>">

    <BR>percentage of correct responses: <?php print $percentage; ?> &nbsp;&nbsp;<?php print $question+1; ?> <?php print $max; ?> <object align='right'><input type=submit value="Next >>"><input type=hidden name=response value=0> <input type=hidden name=question value=<?php print $question; ?> > <input type=hidden name=ok value=<?php print $ok; ?>><input type=hidden name=Randon value=<?php print $randval; ?>>&nbsp;&nbsp;</object>
</FORM>
<HR>
</TD></TR>
  
<?php
}elseif($ok>4){
    
?>
    <H1 style="color:#FFFFE0;background-color:#191970;opacity:0.7;width:40%">The Quiz has finished</H1>
    <H1 style="color:#FFFFE0;background-color:#191970;opacity:0.7;width:40%">CONGRATULATIONS YOU PASSED THE TEST AND MAY PROCEED TO THE NEXT MODULE</H1>
    <p style="color:#FFFFE0;background-color:orangered;opacity:0.7;width:39%"><a style="color:#FFFFE0;" HREF="Codersden.htm">HOME</a><p>

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
        
        <a href="certicifatecss.php?value_key=<?php print $percentage ; ?>" > Certificate </a>
        
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

</CENTER>
</BODY>
</HTML>