<?php
    $students = array (
        "Emmanuel" => 42,
        "Thierry" => 51,
        "Pascal" => 45,
        "Eric" => 48,
        "Nicolas" => 19);



foreach($students as $key => $value) {
    echo '['.$key.'] à '.$value.'<br />';
}

// calcul de la moyenne d'âge
$moyenne = array_sum ($students)/count($students);
echo 'la moyenne de ces âges est de '.$moyenne;

?>




