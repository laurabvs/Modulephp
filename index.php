<html>
    <head>
        
    </head>
       
<body>

<h1>Exercices PHP</h1>

<h2>Exercice 1</h2>

<p> consigne</p>

<code>
// booleens

$pomme = true; 
echo $pomme;
</code>

<?php
// booleens

    $pomme = true; 
    echo $pomme;
?>


<?php
// entiers

    $a = 10;
    $b = 28;
    $c = $a + $b;
    echo $c;
?>

<?php
// Chaine de caractere

    $machaine = "\nGoodMorning";
    echo gettype($machaine);

?>

<br>

<h2>Exercice 2</h2>

<?php
// Ajout de la date 

    echo "Aujourd'hui nous somme le " .date ("29/11/2021");

?>

<br>

<h2>Exercice 3</h2>


<?php
// creation d'un tableau vide
    $vide = array();
    $vide[] = "toto";
    print_r($vide);

?>

<h2>Exercice 4</h2>

<?php
// creation du tableau avec les dates de l'annee

    $dates = array("Noel ","Jour de l'an ","Vacances au ski ","Mon anniversaire ","Vacance d'ete ", "Paques");
    echo "<br>" . "Les dates de l'annee sont: <br> " . $dates[0] . "<br>" . $dates[1] . "<br>" . $dates[2] . "<br>" . $dates[3] . "<br>" . $dates[4];

?>



<h2>Exercice 5</h2>

<?php
// Utiliser la boucle for pour repeter un ensemble d'instructions plusieurs fois + lecture à l'endroit du tableau

    for ($i = 0; $i < count($dates); $i++) 
    {
    echo "<br> ------------ <br>";
    echo $dates[$i];
    echo "<br> ------------";
    }
?>

<h2>Exercice 6</h2>

<?php

// On affiche le dernier element du tableau

    for ($i = count($dates) - 1; $i >= 0; $i--) 
    {
    echo "<br> ------------ <br>";
    echo $dates[$i];
    echo "<br> ------------";
    }
?>

<br><br>

<h2>Exercice 7</h2>


<?php
// Compter le nombre d'elements dans mon tableau dates

    echo count($dates);

?>
</body>
</html>