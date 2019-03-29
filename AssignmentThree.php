<?php
print "
<html lang=\"en\">
<head>
	<meta charset=\"utf-8\">
	<title>Your Grade</title>
</head>";

print"<body bgcolor=\"#e2e2e2\">";


$q1=$_POST['quizOne'];
$q2=$_POST['quizTwo'];
$a1=$_POST['assignmentOne'];
$a2=$_POST['assignmentTwo'];
$a3=$_POST['assignmentThree'];
$me=$_POST['midtermExam'];
$fe=$_POST['finalExam'];
$fp=$_POST['finalProject'];

$grade=(($q1/20)*0.05+($q2/20)*0.05+($a1/100)*0.05+($a2/100)*0.05+($a3/100)*0.05+($me/100)*0.1+($fe/200)*0.4+($fp/25)*0.25)*100;

print "<h1 style = \" text-align: center ;\">Your grades:</h1>";
print "<ul style = \" list-style-type:none; text-align: center;\">";
print "<li>Quiz 1 = $q1</li>";	
print "<li>Quiz 2 = $q2</li>";
print "<li>Assignment 1 = $a1</li>";
print "<li>Assignment 2 = $a2</li>";
print "<li>Assignment 3 = $a3</li>";	
print "<li>Midterm exam = $me</li>";
print "<li>Final exam = $fe</li>";
print "<li>Project = $fp</li>";
print "</ul>";	
print "<h2 style = \" text-align: center ;\">Total Grade: $grade</h2>";		   

print "
</body>
</html>
";
?>