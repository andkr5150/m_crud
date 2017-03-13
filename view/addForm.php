<form method="post" action="../controller/add.php">
    <div class="block">
        <input type="text" name="name" placeholder="name">
        <label for="description">description</label>
        <input type="text" name="description" placeholder="description">
        <label for="created_at">created_at</label>
        <input type="text" name="created_at" placeholder="created_at" value="<?php echo $created_at ?>">
        <input type="submit" value="Добавить" name="edit">
    </div>
</form>