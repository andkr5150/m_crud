<form method="POST" action="../controller/edit.php?id=<?php echo $_GET['id'] ?>">
    <div class="block">
        <input type="text" name="id" placeholder="id" size="7px" value="<?php echo $str['id'] ?>">
        <label for="name">name:</label>
        <input type="text" name="name" placeholder="name"  value="<?php echo $str['name'] ?>">
        <label for="description">description</label>
        <input type="text" name="description" placeholder="description"  value="<?php echo $str['discription'] ?>">
        <label for="created_at">created_at</label>
        <input type="text" name="created_at" placeholder="created_at"  value="<?php echo $str['created_at'] ?>">
        <input type="submit" value="Редактировать" name="edit">
    </div>
</form>

