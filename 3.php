<?php 
   foreach(range(1, 30) as $number) {
    if ($number % 3 != 0 && $number % 7 != 0) {
      echo $number . ',';
      continue;
    }
    if ($number % 3 == 0) echo 'Arka';
    if ($number % 7 == 0) echo 'Demy';
    if ($number % 3 && 7 == 0) echo 'Arkademy';
    echo ',';
  }
?>