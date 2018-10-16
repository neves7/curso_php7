<?php

//encode = tranforma array em json
//decode = tranforma json em array

$json = '[{"nome":"Jo\u00e3o","idade":25},{"nome":"Neves","idade":25}]';

//Se não colocar o true realiza o decode porém vira objeto

$data = json_decode($json, true);

var_dump($data);

?>