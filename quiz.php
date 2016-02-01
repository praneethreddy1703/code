<?php
include "database.php";
$no = 1;
$select="SELECT * FROM quiz";
$query1=$db->prepare($select);
$query1->execute();
$no1=1;

/*$qno=$ques['id'];
$_SESSION['id']=$ques['id'];
$question=$ques['question'];
$ch1=$ques['optionA'];
$ch2=$ques['optionB'];
$ch3=$ques['optionC'];*/
while($ques=$query1->fetch(PDO::FETCH_ASSOC))
{
	$no1++;
	$qno=$ques['id'];
	//$_SESSION['id']=$ques['id'];
	$question=$ques['question'];
	$ch1=$ques['optionA'];
	$ch2=$ques['optionB'];
	$ch3=$ques['optionC'];
	echo "$qno) $question <br>";
	echo "<input type='radio' name='choices' value='A'> ".$ch1."<br>";
	echo "<input type='radio' name='choices' value='B'> ".$ch2."<br>";
	echo "<input type='radio' name='choices' value='C'> ".$ch3."<br>";
	echo "<button onclick='checkAnswer()'>Submit Answers</button><br><br>";
}

//$no += 1;
if($_POST['answ'] != ""){
$insert="INSERT INTO ans(answer) VALUES ('$_POST[answ]')";
$q= $db->prepare($insert);
$q->execute();
$no++;
}
if($no >= $no1)
{
	echo "TEST COMPLETED";
}





?>