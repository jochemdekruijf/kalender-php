 <?= "verander hier de gegevens" ?>
<fieldset>
<form action="<?=URL?>calender/editSave" method="post">
    <input required type="text" name="person" placeholder="name"  value="<?= $birthday['name'] ?>">
     <br>
    <input required type="number" name="day" placeholder="day" min="1" max="31" value="<?= $birthday['day'] ?>">
    <input required type="number" name="month" placeholder="month" min="1" max="12" value="<?= $birthday['month'] ?>">
    <input required type="number" name="year" placeholder="year" min="1900" max="2018" value="<?= $birthday['year'] ?>">
    <input type="hidden" name="id" value="<?= $birthday['id'] ?>">
    <br>
    <input type="submit" name="submit" value="update">
</form>
</fieldset>