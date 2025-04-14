<?php
function insertionSort($arr) {
    $n = count($arr);

    for ($i = 1; $i < $n; $i++) {
        $chave = $arr[$i];
        $j = $i - 1;

        // Move os elementos do array que são maiores que a chave uma posição para frente
        while ($j >= 0 && $arr[$j] > $chave) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        
        // Insere a chave na posição correta
        $arr[$j + 1] = $chave;
    }

    return $arr;
}

// Exemplo de uso
$arr = [5, 3, 8, 6, 2];
$ordenado = insertionSort($arr);
print_r($ordenado);
?>
