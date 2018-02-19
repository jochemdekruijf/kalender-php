<h1>verjaardagen</h1> 

<?php //verjaardagen
 
$month = "";
$day = "";

    foreach($verjaardagen as $bday){
        if ($bday["month"] != $month) {
            echo "<h1>" . date('F', mktime(0, 0, 0, $bday['month'], 10))  . "</h1>";
            $month = $bday["month"];
        }

        if($bday["day"] != $day){
            echo "<h2>" . $bday['day']  . "</h2>";
            $day = $bday["day"];
        }
            echo "<p><a href = '" . URL . "calender/edit/" . $bday["id"]. "'>" . $bday["name"] . "(" . $bday['year'] . ")" . "</a><a href = '" . URL . "calender/delete/" . $bday["id"]. "'>x</a></p>";

    }

?>
<p><a href = "<?=URL?>calender/add">Toevoegen</a></p>

