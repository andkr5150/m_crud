<?php
require_once '../model/model.php';

$stmt = view();

require_once '../view/viewForm.php';
?>

<form method="post" action="../view/addForm.php">
<br>
<hr>
    <div class="block">
        <input type="submit" value="Добавить" name="edit">
    </div>
</form>







