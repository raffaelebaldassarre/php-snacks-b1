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
            83,
            77,
            88,
            89,
            107,
            82

        ],
        'puntiOspiti' => [
            74,
            82,
            84,
            90,
            83,
            103
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
        span.red{
            color : red;
        }
    </style>
</head>
<body>
    
    <div>
        <h2>Risultati Lega Basket Serie A</h2>
        <?php 
            for ($i=0; $i <count($matches['casa']) ; $i++) { 
                if($matches['puntiCasa'][$i] > $matches['puntiOspiti'][$i]){
                    echo 
                    "<p class='match'>" . $matches['casa'][$i] . ' - ' . $matches['ospiti'][$i] . "</p>" . ' ' .
                    "<p class='risultato'>" . '| ' . "<span class='red'>" . $matches['puntiCasa'][$i].  "</span>" . "</p>" . ' - ' .
                    "<p class='risultato'>" . $matches['puntiOspiti'][$i] . "</p>" . "<br />";
                }elseif($matches['puntiCasa'][$i] < $matches['puntiOspiti'][$i]){
                    echo 
                    "<p class='match'>" . $matches['casa'][$i] . ' - ' . $matches['ospiti'][$i] . "</p>" . ' ' .
                    "<p class='risultato'>" . '| ' . $matches['puntiCasa'][$i].  "</p>" . ' - ' .
                    "<p class='risultato'>" . "<span class='red'>" . $matches['puntiOspiti'][$i] . "</span>" . "</p>" . "<br />";
                }else{
                    echo 
                    "<p class='match'>" . $matches['casa'][$i] . ' - ' . $matches['ospiti'][$i] . "</p>" . ' ' .
                    "<p class='risultato'>" . '| ' . $matches['puntiCasa'][$i].  "</p>" . ' - ' .
                    "<p class='risultato'>" . $matches['puntiOspiti'][$i] . "</p>" . "<br />";
                }
            };
        ?>
    </div>
</body>
</html>