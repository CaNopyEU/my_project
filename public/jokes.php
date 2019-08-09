<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP testing</title>
    </head> -->
<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=ijdb;
charset=utf8', 'ijdbuser', 'mypassword');
$pdo->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT `joketext`, `id` FROM joke';

$jokes = $pdo->query($sql);

$title = 'Joke list';

ob_start();

include  __DIR__ . '/../templates/jokes.html.php';

$output = ob_get_clean();
}
catch (PDOException $e) {
$title = 'An error has occurred';

$output = 'Database error: ' . $e->getMessage() . ' in '
. $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';
/*

    if (!isset($_POST['firstname'])) {
        include  __DIR__ . '/../templates/form.html.php';
    } else {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];

        if ($firstName == 'Kevin' && $lastName == 'Yank') {
            $output = 'Welcome, oh glorious leader!';
        } else {
            $output = 'Welcome to our website, ' .
            htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
            htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
        }

        include  __DIR__ . '/../templates/welcome.html.php';
    }
        $roll = rand(1, 6);
        $english = [
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            5 => 'five',
            6 => 'six'
        ];

    ?>
    <body>
        <h1> Roll dice game </h1>
        <?php echo '<p>You rolled a ' . $english[$roll] . '</p>';

        if ($roll == 6) {
            echo 'You Win!';
        }
        else {
            echo '<p>Sorry, you didn\'t win, better luck next time!</p>';
        }

        echo '<p>Thanks for playing</p>'?>
        <br>
        <h1> Arrays</h1>
        <?php
        $myArray = array('one', 2, 3);
        echo $myArray[0];
        echo $myArray[1];
        echo $myArray[2];
        ?>
    </body>
</html>
*/
