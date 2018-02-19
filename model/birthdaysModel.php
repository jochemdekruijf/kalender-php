<?php

function getAllBirthdays() 
{
	$db = openDatabaseConnection();

	$sql = 'SELECT * FROM birthdays ORDER BY month,  day';
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;

	return $query->fetchAll();
}
function deleteBirthday($id){
    $db = openDatabaseConnection();

    $sql = "DELETE FROM birthdays WHERE id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();
}

function getBirthdateById($id) 
{

    echo "received in model:<br>";
    echo($id . '<br>');
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM birthdays where id = :id ";

    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();

    $db = null;

    return $query->fetch(PDO::FETCH_ASSOC);
}
function saveBirthday($answers){
    $db = openDatabaseConnection();

    $sql = "INSERT INTO birthdays (name, day, month, year) VALUES (:name, :day, :month, :year);";
    
    $query = $db->prepare($sql);
    $query->bindParam(":name", $answers['person']);
    $query->bindParam(":day", $answers['day']);
    $query->bindParam(":month", $answers['month']);
    $query->bindParam(":year", $answers['year']);
    $query->execute();
}
 function update($answers){
$db = openDatabaseConnection();

    $sql = "UPDATE birthdays SET name = :person, day = :day, month= :month, year= :year WHERE id = :id ";
    
    $query = $db->prepare($sql);
    $query->bindParam(":person", $answers['person']);
    $query->bindParam(":day", $answers['day']);
    $query->bindParam(":month", $answers['month']);
    $query->bindParam(":year", $answers['year']);
    $query->bindParam(":id", $answers['id']);
    $query->execute();

 }
