<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>List of jokes</title>
    </head>
    <body>
        <?php if (isset($error)): ?>
        <p>
            <?php echo $error; ?>
        </p>
        <?php else: ?>
            <?php foreach ($jokes as $joke): ?>
                <blockquote>
                <p>
                    <?=htmlspecialchars($joke['joketext'],
                        ENT_QUOTES, 'UTF-8')?>
                    <a href="deletejoke.php&amp;
                    id=<?=$joke['id']?>">Delete</a>
                </p>
                </blockquote>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>
