<?php

require(ROOT . "model/birthdaysModel.php");

function index()
{
	render("calender/index", array(
		'verjaardagen' => getAllBirthdays()
	));
}

function delete($id)
{
    deleteBirthday($id);
    header('Location: '.URL."calender");
}

function add(){
    render("calender/add");
}

function edit($id){



    $birthdate = getBirthdateById($id);

    echo "received in controller:<br>";
    

    render("calender/edit", ['birthday' => $birthdate]);

}


function save(){
    // Maak een array aan met de waarden uit de $_POST variabele

    $result = saveBirthday($_POST);

    // Roep een functie uit de Model aan die de verjaardag toevoegt

    // Stuur het programma weer terug naar de index action
    header('Location: '.URL."calender");
}

function editSave(){
 update($_POST);



 header("Location: ".URL. "calender");
}


 