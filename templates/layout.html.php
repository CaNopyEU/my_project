<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/jokes.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header>
            <h1>Internet Joke database</h1>
        </header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/joke/list">List of jokes</a></li>
                <li><a href="/joke/edit">Add a new Joke</a><li>

                <?php if ($loggedIn): ?>
                    <li><a href="/logout">Log out</a></li>
                <?php else: ?>
                    <li><a href="/login">Log in</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>
            &copy; IJDB 2019
        </footer>
    </body>
</html>
