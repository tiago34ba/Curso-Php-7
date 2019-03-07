<?php

function soma(int...$valores){
    return array_sum($valores);
}
echo soma(2,5);
echo '<br>';
echo soma(25,5);
echo '<br>';
echo soma(5,40);
echo '<br>';
echo soma(12,8);
echo '<br>';