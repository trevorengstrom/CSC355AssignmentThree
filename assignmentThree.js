function gradeWeights()
		{
			var q1 = 1*document.grades.quizOne.value;
			var q2 = 1*document.grades.quizTwo.value;
			var a1 = 1*document.grades.assignmentOne.value;
			var a2 = 1*document.grades.assignmentTwo.value;
			var a3 = 1*document.grades.assignmentThree.value;
			var me = 1*document.grades.midtermExam.value;
			var fe = 1*document.grades.finalExam.value;
			var fp = 1*document.grades.finalProject.value;
			var grade = 0;
			grade = ((q1/20)*0.05+(q2/20)*0.05+(a1/100)*0.05+(a2/100)*0.05+(a3/100)*0.05+(me/100)*0.1+(fe/200)*0.4+(fp/25)*0.25)*100;
			alert("your grade is: "+grade);
		}

		
function gradeValidation() {
	var q1 = 1*document.grades.quizOne.value;
	var q2 = 1*document.grades.quizTwo.value;
	var a1 = 1*document.grades.assignmentOne.value;
	var a2 = 1*document.grades.assignmentTwo.value;
	var a3 = 1*document.grades.assignmentThree.value;
	var me = 1*document.grades.midtermExam.value;
	var fe = 1*document.grades.finalExam.value;
	var fp = 1*document.grades.finalProject.value;
	
	if (q1=="" || q1 < 0 || q1 > 20) {
		alert("Input not valid (q1)");
		document.grades.quizOne.focus();
		return false;
	} else if (q2=="" || q2 < 0 || q2 > 20) {
		alert("Input not valid (q2)");
		document.grades.quizTwo.focus();
		return false;
	} else if (a1=="" || a1 < 0 || a1 > 100) {
		alert("Input not valid (a1)");
		document.grades.assignmentOne.focus();
		return false;
	} else if (a2=="" || a2 < 0 || a2 > 100) {
		alert("Input not valid (a2)");
		document.grades.assignmentTwo.focus();
		return false;
	} else if (a3=="" || a3 < 0 || a3 > 100) {
		alert("Input not valid (a3)");
		document.grades.assignmentThree.focus();
		return false;
	} else if (me=="" || me < 0 || me > 100) {
		alert("Input not valid (me)");
		document.grades.midtermExam.focus();
		return false;
	} else if (fe=="" || fe < 0 || fe > 200) {
		alert("Input not valid (fe)");
		document.grades.finalExam.focus();
		return false;
	} else if (fp=="" || fp < 0 || fp > 25) {
		alert("Input not valid (fe)");
		document.grades.finalProject.focus();
		return false;
	} else {
		gradeWeights();
	}
}