<?php
function media($n1, $n2)
{
    $result = ($n1 + $n2) / 2;
    if ($result < 5) {
        echo "Suas notas $n1 e $n2, tem media $result, você está reprovado!";
    } else if ($result <= 6 || $result === 5) {
        echo "Suas notas $n1 e $n2, rtem media $result, você está de recuperação!";
    } else {
        echo "Suas notas $n1 e $n2 tem media $result, você está aprovado!";
    }
}

function soma()
{
    $p = func_get_args();
    $tot = func_num_args();

    $s = 0;

    for ($i = 0; $i < $tot; $i++) {
        $s += $p[$i];
    }
    return $s;
}