<?php
/**
 * Created by PhpStorm.
 * User: ASDAFF
 * Date: 14.06.2019
 * Time: 23:28
 * -------------------------
 *      Обрезка текста
 * -------------------------
 */
$string = strip_tags($string); // уберём все html элементы
$string = substr($string, 0, 200); //обрежем его на определённое количество символов
$string = rtrim($string, "!,.-"); //убедимся, что текст не заканчивается восклицательным знаком, запятой, точкой или тире
$string = substr($string, 0, strrpos($string, ' '));//находим последний пробел, устраняем его
echo $string."… ";//ставим троеточие