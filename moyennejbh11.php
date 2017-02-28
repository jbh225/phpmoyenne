<?php
            $students = array(
                "Emmanuel"  => 42,
                "Thierry"   => 51,
                "Pascal"    => 45,
                "Eric"      => 48,
                "Nicolas"   => 19
            );

print_r($students);

echo $result = array_sum($students) / count($students).' ';

?>