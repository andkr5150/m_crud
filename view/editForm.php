<form method="POST" action="../controller/edit.php?id=<?php echo $_GET['id'] ?>">
    <div class="block">
        <input type="text" name="id_ed" placeholder="id" size="7px" value="<?php echo $str['id'] ?>">
        <label for="name_ed">name:</label>
        <input type="text" name="name_ed" placeholder="name"  value="<?php echo $str['name'] ?>">
        <label for="description_ed">description</label>
        <input type="text" name="description_ed" placeholder="description"  value="<?php echo $str['discription'] ?>">
        <label for="created_at_ed">created_at</label>
        <input type="text" name="created_at_ed" placeholder="created_at"  value="<?php echo $str['created_at'] ?>">
        <input type="submit" value="Редактировать" name="edit">
    </div>
</form>

