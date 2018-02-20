 <?="Add personal details"?>
<fieldset>
<form action="<?=URL?>calender/save" method="post">
   <label for="Name">Name:</label> <input required type="text" name="person" placeholder="Name">
    <br>
    <label for="Date"> Date:</label>
    <input required type="number" name="day" min="1" max="31" placeholder="day"><?= "-" ?>
    <input required type="number" name="month" min="1" max="12" placeholder="month"><?= "-" ?>
    <input required type="number" name="year" min="1900" max="2018" placeholder="year">
    <br>
    <input type="submit" name="submit" value="Register">
</form>
</fieldset>