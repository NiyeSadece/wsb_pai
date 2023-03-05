<?php
$firstName = "Janusz";
$lastName = "Nowak";
echo "Imię i nazwisko: $firstName <br>";
echo 'Imię i nazwisko: $firstName $lastName<br>';

// heredoc
echo <<< DATA
Imię: $firstName<br>
Nazwisko: $lastName
<hr>
DATA;

$data = <<< DATA
Imię: $firstName<br>
Nazwisko: $lastName
<hr>
DATA;
echo $data;

//nowdoc
echo <<< 'DATA'
Imię: $firstName<br>
Nazwisko: $lastName
<hr>
DATA;

$bin = 0b1011;
echo $bin;
$oct = 012;
//$oct = 0o1012;
echo $oct;
$hex = 0x1A;
echo $hex;
?>