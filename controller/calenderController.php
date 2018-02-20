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
    render("calender/edit", ['birthday' => $birthdate]);
}


function save(){
    $result = saveBirthday($_POST);
    header('Location: '.URL."calender");
}

function editSave(){
 update($_POST);
 header("Location: ".URL. "calender");
}


 