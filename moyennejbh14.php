<?php
            $students = array(
                "Emmanuel"  => 42,
                "Thierry"   => 51,
                "Pascal"    => 45,
                "Eric"      => 48,
                "Nicolas"   => 19
            );

foreach ($students as $prenoms=>$age) {
    echo $prenoms . " " . $age . " " . "ans" . '<br/>';

}
    $moyenne = array_sum($students)/count($students);
    echo "La moyenne est de ".$moyenne;


?>