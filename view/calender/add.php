 <?="Vul hier je gegevens in"?>
<fieldset>
<form action="<?=URL?>calender/save" method="post">
    <input required type="text" name="person" placeholder="Name">
    <br>
    <input required type="number" name="day" min="1" max="31" placeholder="day">
    <input required type="number" name="month" min="1" max="12" placeholder="month">
    <input required type="number" name="year" min="1900" max="2018" placeholder="year">
    <br>
    <input type="submit" name="submit" value="Register">
</form>
</fieldset>