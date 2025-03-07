<?php


// Divide and Conquer
// dividindo recursivamente e depois ordenando crescentemente.
// de acordo com a divisão por 2

// Complexidade 
// O(n log n) -> tempo de execução

// util para listas grandes e arquivos externos por causa da recursão
// 
// 
//  PARA PEQUENOS ARRAYS o mais rapido pode ser o Insertion Sort.

function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    // Divide o array ao meio
    $meio = floor(count($arr) / 2);
    $esquerda = array_slice($arr, 0, $meio);
    $direita = array_slice($arr, $meio);

    // Chama a função recursivamente para ordenar as duas metades
    $esquerda = mergeSort($esquerda);
    $direita = mergeSort($direita);

    // Intercala as metades ordenadas
    return merge($esquerda, $direita);
}

function merge($esquerda, $direita) {
    $resultado = [];
    $i = $j = 0;

    // Compara os elementos de cada metade e adiciona o menor ao resultado
    while ($i < count($esquerda) && $j < count($direita)) {
        if ($esquerda[$i] < $direita[$j]) {
            $resultado[] = $esquerda[$i];
            $i++;
        } else {
            $resultado[] = $direita[$j];
            $j++;
        }
    }

    // Adiciona os elementos restantes
    while ($i < count($esquerda)) {
        $resultado[] = $esquerda[$i];
        $i++;
    }

    while ($j < count($direita)) {
        $resultado[] = $direita[$j];
        $j++;
    }

    return $resultado;
}

// Exemplo de uso
$arr = [38, 27, 43, 3, 9, 82, 10];
$ordenado = mergeSort($arr);
print_r($ordenado);
?>
