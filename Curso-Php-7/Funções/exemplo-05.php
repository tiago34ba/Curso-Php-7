<?php

function soma(int...$valores): string{
    return array_sum($valores);
}
echo var_dump(soma(2,5));
echo '<br>';
echo soma(25,5);
echo '<br>';
echo soma(5,40);
echo '<br>';
echo soma(12,8);
echo '<br>';