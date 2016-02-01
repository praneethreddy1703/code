<?php 
try{
	$db = new PDO ('mysql:host=localhost;dbname=quiz','praneeth','praneeth');
}
catch(PDOException $e)
{
	echo "Could not connect";
}
$createTb="CREATE TABLE IF NOT EXISTS quiz(
					id int NOT NULL AUTO_INCREMENT,
					question TEXT NOT NULL,
					optionA TEXT NOT NULL,
					optionB TEXT NOT NULL,
					optionC TEXT NOT NULL,
					answer TEXT NOT NULL,
					PRIMARY KEY (id)
					)";
$Tb1 = $db->prepare($createTb);
$Tb1->execute();

?>