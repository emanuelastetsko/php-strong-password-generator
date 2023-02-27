<?php 
require 'function.php';
$passwordLength = $_GET["length"];
$password = passwordGenerator($passwordLength);

?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong Password Generator</title>
    </head>
    <body>
        <main>
            <h1>PHP Strong Password Generator</h1>
            <div class="password-request">
                <form action="" method="GET">
                    <div>
                        <label for="password-length">Lunghezza password desiderata:</label>
                        <input id="password-length" type="number" name="length" placeholder="8+" min="8" max="32" width="50" required>
                    </div>
                    <button>Genera</button>
                </form>
            </div>
            </div class="password-generation">
                <?php if (isset($password)) : ?>
                    <span>La tua password generata è: <?php echo $password; ?></span>
                <?php endif; ?>
            <div>  
        </main>
    </body>
</html>