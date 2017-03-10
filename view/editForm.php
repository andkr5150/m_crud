<?php
require_once '../model/model.php';

$stmt = edit($_GET['id']);

foreach ($stmt as $row) {
    $id = $row['id'] ;
    $name = $row['name'] ;
    $discription = $row['discription'];
    $created_at = $row['created_at'];
}
?>

<form method="post" action="../controller/edit.php?id=<?php echo $id ?>">
    <div class="block">
        <input type="text" name="id_ed" placeholder="id" size="7px" value="<?php echo $id ?>">
        <label for="name_ed">name:</label>
        <input type="text" name="name_ed" placeholder="name"  value="<?php echo $name ?>">
        <label for="description_ed">description</label>
        <input type="text" name="description_ed" placeholder="description"  value="<?php echo $discription ?>">
        <label for="created_at_ed">created_at</label>
        <input type="text" name="created_at_ed" placeholder="created_at"  value="<?php echo $created_at ?>">
        <input type="submit" value="Редактировать" name="edit">
    </div>
</form>

