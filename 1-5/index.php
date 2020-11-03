<?php

$taulukko = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K',];
  for($i = 0; $i < count($taulukko); $i = $i + 1) {
       printf("%s ", $taulukko[$i]);
   }
echo "<br>";
for($i = count($taulukko)- 1; $i >= 0; $i = $i - 1) {
printf("%s ", $taulukko[$i]);
}



