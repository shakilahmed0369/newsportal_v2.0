<?php

//uniq id generator
function uId($min,$max){
  $numbers = range($min, $max);
  shuffle($numbers);
  return $final = array_slice($numbers, 0, 200);
}
  
//bangla number convener
function bnNum($number)
{
  $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", "ক"];
  $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "a"];
    return str_replace($en, $bn, $number);
}

// Slug generator
function makeSlug($string, $separator = '-') {
  $re = "/(\\s|\\".$separator.")+/mu";
  $str = @trim($string);
  $subst = $separator;
  $result = preg_replace($re, $subst, $str);
  return $result;
}

