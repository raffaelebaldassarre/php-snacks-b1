<!-- PHP SNACK 1 -->
<?php 
    $matches = [
        'casa' => [
            'Reggiana', 
            'Universo Treviso',
            'Venezia',
            'Virtus Bologna',
            'VL Pesaro',
            'Trieste'
        ],
        'ospiti' => [
            'Trento',
            'Olimpia Milano',
            'Cremona',
            'Brescia',
            'Cantù',
            'Dinamo Sassari'
        ],
        'puntiCasa' => [
            '83',
            '77',
            '88',
            '89',
            '107',
            '82'

        ],
        'puntiOspiti' => [
            '74',
            '82',
            '84',
            '90',
            '83',
            '103'
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style media screen>
        p{
            display:inline-block;
        }
    </style>
</head>
<body>
    
    <div>
        <h2>Risultati Lega Basket Serie A</h2>
        <?php 
            for ($i=0; $i <count($matches['casa']) ; $i++) { 
                echo "<p class='match'>" . $matches['casa'][$i] . ' - ' .
                $matches['ospiti'][$i] . "</p>" . ' ' .
                "<p class='risultato'>" . '| ' . $matches['puntiCasa'][$i] . ' - ' .
                $matches['puntiOspiti'][$i] . "</p>" . "<br />";
            };
        ?>
    </div>

</body>
</html>


<!-- PHP SNACK 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $mail = $_GET["mail"];
    $age = (int)$_GET["age"];
    $name = $_GET["name"];

    if(strpos($mail, '@') !== false && strpos($mail, ".") !== false && is_int($age)
    && strlen($name) > 3){
        echo "Accesso Riuscito";

    } else {
        echo "Accesso Negato";
    }

    ?>

</body>
</html>