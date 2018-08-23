<?php
require("src/functions.php");
//====================
$arr=['Привет','всем','от меня!'];
task1($arr, false).'<br/>';
//=====================
task2("-", 8, 3, 2, 7);
//=====================
task3(9,16);
//=====================
echo date('d.m.Y H:1').'<br/>';
$date = '24.02.2016 00:00:00';
echo strtotime($date)."<br/>";
//======================
$line1="Карл у Клары украл Кораллы";
$line2="Две бутылки лимонада";
echo str_replace('К','',$line1)."<br/>";
echo str_replace('Две','Три',$line2)."<br/>";
//=======================
$test='Hello again!”';
file_put_contents('test.txt',$test);
