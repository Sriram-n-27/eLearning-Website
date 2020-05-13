<?php
error_reporting(0);
$title = "Code away!";
$address = "1.Python_Home Page.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Python is a:",
   1 => "Low-level programming language",
   2 => "Assembly language",
   3 => "High-level programming language",
   4 => "Visual language",
   5 => "None of the above",
   6 => 3
),
2 => array(
   0 => "Which of the following is an Invalid Identifier",
   1 => "sales_For_2010",
   2 => "totalSales",
   3 => "salesFor2010",
   4 => "2010sales",
   5 => "None of the above",
   6 => 1
),

3 => array(
   0 => "Keywords are:",
   1 => "name (identifier) that is associated with a value",
   2 => "reserved words which mean something to the compiler",
   3 => "sequence of one or more characters used to name a given program element",
   4 => "meant as documentation for anyone reading the code",
   5 => "None of the above",
   6 => 2
),
4 => array(
   0 => "Which is not a Python Keyword",
   1 => "error",
   2 => "yeild",
   3 => "global",
   4 => "raise",
   5 => "None of the above",
   6 => 1
),
5 => array(
   0 => "Variables are assigned values by use of the x operator. x is",
   1 => "Arithmetic",
   2 => "Relational",
   3 => "Logical",
   4 => "Assignment",
   5 => "None of the above",
   6 => 4
),
6 => array(
   0 => "What is a literal",
   1 => "a sequence of one or more characters that stands for itself.",
   2 => "documentation for anyone reading the code",
   3 => "a name (identifier) that is associated with a value.",
   4 => "a variable ",
   5 => "None of the above",
   6 => 1
),
7 => array(
   0 => "Which data type is not supported in python",
   1 => "Lists",
   2 => "Numbers",
   3 => "Tuples",
   4 => "Special characters",
   5 => "None of the above",
   6 => 4
),
8 => array(
   0 => "Python uses:",
   1 => "Assembler",
   2 => "Compiler",
   3 => "Interpreter",
   4 => "Terminator",
   5 => "None of the above",
   6 => 3
),
9 => array(
   0 => "Which is a version of Python",
   1 => "IceCreamSandwich",
   2 => "2.x",
   3 => "Marshmallow",
   4 => "Eclair",
   5 => "None of the above",
   6 => 2
),
10 => array(
   0 => "Python was developed by:",
   1 => "John Doe",
   2 => "Guido van Rossum",
   3 => "Manne Quinn",
   4 => "KRK",
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

    <!--<BR>percentage of correct responses: <?php print $percentage; ?> %-->&nbsp;&nbsp;<?php print $question+1; ?> / <?php print $max; ?> <object align='right'><input type=submit value="Next >>"><input type=hidden name=response value=0><input type=hidden name=question value=<?php print $question; ?>><input type=hidden name=ok value=<?php print $ok; ?>><input type=hidden name=Randon value=<?php print $randval; ?>>&nbsp;&nbsp;</object>
</FORM>
<HR>
</TD></TR>

<?php
}elseif($ok>4){
    
?>
    <H1 style="color:#FFFFE0;background-color:#191970;opacity:0.7;width:40%">The Quiz has finished</H1>
    <H1 style="color:#FFFFE0;background-color:#191970;opacity:0.7;width:40%">CONGRATULATIONS YOU PASSED THE TEST AND MAY PROCEED TO THE NEXT MODULE</H1>
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
        <a href="certicifatep.php".php?value_key=<?php print $percentage ; ?>">Certificate</a>
        
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
    <p><b>Percentage of correct responses: <?php print $percentage ; ?></b> <br>
    <div id="contain">
        <div class="clearfix">
                
                <div id="pie" class="c100 p<?php$percentage; ?> orange" >
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