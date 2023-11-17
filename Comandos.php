<?php
   $respuestas = array(
       "Salio un 3 estrellas",
       "Salio un Bennet",
       "Salio una Barbara",
       "Salio un Xingchiu",
       "Salio una Xinyan",
       "Perdio el 50/50 con una Qiqi",
       "Perdio el 50/50 con un Diluc",
       "Gano el 50/50 pero yo llego a hard pity",
       "Gano el 50/50 en pity 20 y doble 5 estrellas"
       );
   $random = array_rand($respuestas);
   echo $respuestas[$random];
?>