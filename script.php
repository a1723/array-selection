<?php

for ($i = 0; $i < 100; $i++)
{
    $products[] = rand(0,10);  // заполняем массив
}
echo "Ниже показан весь сгенерированный массив:" . "<br><br>";
var_dump($products);  // показываем массив                                                                               
echo "<br>";

reset($products); // выставляем указатель на первый элемент                                                                                   
$a = 0;   // счётчик                                                                                           
for ($i = 0; $i < count($products) - 1; ++$i){
    $current = current($products);
    $next = next($products);
        if ($current === $next) {
    $a++;
    }
}
echo "<br> Количество последовательных пар одинаковых элементов:" . ":" . "$a";   // выводим количество последовательностей                    
                                     
?>