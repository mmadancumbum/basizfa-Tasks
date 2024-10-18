<?php

$string = '<p align="justify" style="orphans: 0; widows: 0; margin-left: 0.39cm;
margin-bottom: 0cm; border: none; padding: 0cm"><b>PARTY</b>2NAME<i>, </i>a
company incorporated under the laws of ROC2LAW having its Registered Office at
P1OFFICEADD. which expression, shall unless it be repugnant to the context or
meaning thereof, mean and include its successors and assigns (hereinafter referred
to as ‘‘ Service Provider’) of the ONE PART</p>';

$text = str_replace('<b>', '', $string);
$text = str_replace('</b>', '', $text);
$text = str_replace("PARTY2NAME","Abc india pvt. Ltd",$text);
$text = str_replace("P1OFFICEADD","Mount Road,chennai-60014",$text);

echo htmlspecialchars($text, ENT_QUOTES);





?>