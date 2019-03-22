<?php
print "
<html lang=\"en\">
<head>
	<meta charset=\"utf-8\">
	<title>Your Grade</title>
</head>";

print"<body bgcolor=\"pink\">";

print "<font size =\"5\">
We have received your grades, thank you!</font><br>";

$q1=$_POST['quizOne'];
$q2=$_POST['quizTwo'];
$a1=$_POST['assignmentOne'];
$a2=$_POST['assignmentTwo'];
$a3=$_POST['assignmentThree'];
$me=$_POST['midtermExam'];
$fe=$_POST['finalExam'];
$fp=$_POST['finalProject'];

$grade=((q1/20)*0.05+(q2/20)*0.05+(a1/100)*0.05+(a2/100)*0.05+(a3/100)*0.05+(me/100)*0.1+(fe/200)*0.4+(fp/25)*0.25)*100;

print "<font size=\"5\">";
print "Your grade for each coursework is below:<br>";
print "<ul>";
print "<li>Quiz 1 = $q1</li>";	
print "<li>Quiz 2 = $q2</li>";
print "<li>Assignment 1 = $a1</li>";
print "<li>Assignment 2 = $a2</li>";
print "<li>Assignment 3 = $a3</li>";	
print "<li>Midterm exam = $me</li>";
print "<li>Final exam = $fe</li>";
print "<li>Project = $fp</li>";
print "</ul>";
print "</font>";			   
print "<p style = \"color:red;font-size:20px;\">Your total grade for this course is: $t</p>";

print "
</body>
</html>
";
?>