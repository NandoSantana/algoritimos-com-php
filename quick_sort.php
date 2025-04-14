<?php
function quickSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    // Escolhe o pivô (último elemento)
    $pivo = $arr[count($arr) - 1];
    $esquerda = $direita = [];

    // Particionamento: separa menores e maiores que o pivô
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] < $pivo) {
            $esquerda[] = $arr[$i];
        } else {
            $direita[] = $arr[$i];
        }
    }

    // Recursivamente ordena os subarrays e junta o resultado
    return array_merge(quickSort($esquerda), [$pivo], quickSort($direita));
}

// Exemplo de uso
$arr = [10, 80, 30, 90, 40, 50, 70];
$ordenado = quickSort($arr);
print_r($ordenado);
?>
