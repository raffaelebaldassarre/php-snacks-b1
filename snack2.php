<!-- PHP SNACK 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        E-mail: <input type="text" name="mail"><br>
        Age: <input type="text" name="age"><br>
        Name: <input type="text" name="name"><br>
        <input type="submit" value="Entra">
    </form>

    
    <?php 
    $mail = $_POST["mail"];
    $age = (int)$_POST["age"];
    $name = $_POST["name"];

    if(strpos($mail, '@') !== false && strpos($mail, ".") !== false && is_int($age)
    && strlen($name) > 3){

        echo '<h1>' . "Ciao" . " " . $_POST["name"] . " " . "Accesso Riuscito" . '</h1>';
        
    } else {
        echo '<h1>' . "Accesso Negato" . '</h1>';
    }

    ?>

</body>
</html>