<?php

$str = " @Name@ ipsum dolor sit amet, consectetur adipiscing elit.
Praesent in mollis magna. Donec eu elit pellentesque, maximus nisl vitae, cursus
velit. Sed Loremnibh sed elit auctor tincidunt. Donec tempor est id nunc
ullamcorper rhoncus. Phasellus nec arcu et dui varius ullamcorper commodo quis
ligula. Etiam ultrices nisi @email@, ut euismod elit tempor sed. Vestibulum ante
ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Lorem
ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor turpis vel
nisi fermentum, a sodales magna egestas. Vestibulum lobortis elit sed neque
rhoncus, sit amet @mobile@ magna blandit. @designation@ nec leo ac diam
euismod fringilla.";


$txt = str_replace("@Name@","RRRR",$str);
$txt = str_replace("@email@","RRR@RRR.com",$txt);
$txt = str_replace("@mobile@","9988775566",$txt);
$txt = str_replace("@designation@","Software Developer",$txt);


echo $txt;

?>
