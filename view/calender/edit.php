
<form action="<?=URL?>calender/editSave" method="post">
    <input type="text" name="person" placeholder="name" value="<?= $birthday['name'] ?>">
    <input type="text" name="day" placeholder="day" value="<?= $birthday['day'] ?>">
    <input type="text" name="month" placeholder="month" value="<?= $birthday['month'] ?>">
    <input type="text" name="year" placeholder="year" value="<?= $birthday['year'] ?>">
    <input type="hidden" name="id" value="<?= $birthday['id'] ?>">
    <input type="submit" name="submit" value="update">
</form>