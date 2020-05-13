<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <style>a.button {
    background-color: #4CAF50; /* Green */
    border: 2px solid black;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
float: right;
}</style>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css1/style.css" />
</head>


<body style="background-image:url('tutorial backgroung.jpg')">
    
    <div style="background-color:#ccffe6;color:black;padding:5px;margin-left:20%;margin-right:20%;margin-bottom: 5px;margin-top:2%;border: 1px black solid;">

	<div id="page-wrap">

		<h1>Attempt Quiz</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
           
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
           
            
            echo "<div id='results'>$totalCorrect / 2 correct</div>";
            if($totalCorrect==2)
            {
                echo "<div id='results'>You Passed the Test </div>";
                
echo '<a href="5.Comments.html" class="button">Next Page</a>';
            }
        else{
            echo "<div id='results'>You Failed the test Learn again</div>";
            echo '<a href="4variables.html" class="button">Previous Page</a>';
        }
        ?>
	
	</div>
    </div>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>