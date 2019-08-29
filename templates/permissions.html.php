<h2>Edit <?=$author->name?>'s Permission</h2>

<form action="" method="post">

    <?php foreach ($permissions as $name => $value) { ?>
        <div>
            <input name="permissions[]" type="checkbox" value="<?=$value?>"
            <?php if ($author->hasPermission($value)):
                echo 'checked'; endif; ?> />
            <label><?=$name?>
        </div>
    <?php } ?>

<input type="submit" value="Submit" />
</form>
