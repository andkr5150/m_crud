<form method="post" action="../controller/edit.php?id=<?php echo $st_id ?>">
    <div class="block">
        <input type="text" name="id_ed" placeholder="id" size="7px" value="<?php echo $st_id ?>">
        <label for="name_ed">name:</label>
        <input type="text" name="name_ed" placeholder="name"  value="<?php echo $st_name ?>">
        <label for="description_ed">description</label>
        <input type="text" name="description_ed" placeholder="description"  value="<?php echo $st_discription ?>">
        <label for="created_at_ed">created_at</label>
        <input type="text" name="created_at_ed" placeholder="created_at"  value="<?php echo $st_created_at ?>">
        <input type="submit" value="Редактировать" name="edit">
    </div>
</form>

