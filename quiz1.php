<?php
include "database.php";
$createTb="CREATE TABLE IF NOT EXISTS ans(
					id int NOT NULL AUTO_INCREMENT,
					answer TEXT NOT NULL,
					PRIMARY KEY (id)
					)";
$Tb1 = $db->prepare($createTb);
$Tb1->execute();
$insert="INSERT INTO ans(answer) VALUES ('$_POST[answ]')";
$q= $db->prepare($insert);
$q->execute();
header('location:')