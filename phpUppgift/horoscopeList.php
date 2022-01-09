<?php
 
 function get_Horoscop($month,$day){

$Date = date("m-d", strtotime($Date));
list($month,$day) = explode("-",$Date);
$horoscop = '';

 if(($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {

 $horoscop = "Aquarius";
 
 }else if(($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
 
 $horoscop = "Pisces";
 
 }else if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
 
 $horoscop = "Aries";
 
 }else if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
 
 $horoscop = "Taurus";
 
 }else if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 21)) {
 
 $horoscop = "Gemini";
 
 }else if (($month == 6 && $day >= 22) || ($month == 7 && $day <= 22)) {
 
 $horoscop = "Cancer";
 
 }else if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
 
 $horoscop = "Leo";
 
 }else if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
 
 $horoscop = "Virgo";
 
 }else if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 23)) {
 
 $horoscop = "Libra";
 
 }else if (($month == 10 && $day >= 24) || ($month == 11 && $day <= 22)) {
 
 $horoscop = "Scorpio";
 
 }else if (($month == 11 && $day >= 23) || ($month == 12 && $day <= 21)) {
 
 $horoscop = "Sagitarrius";
 
 }else if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
 
 $horoscop = "Capricorn";
 
 }
 
 return $horoscop;
 
 }

?> 