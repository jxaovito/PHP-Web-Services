<?php

$data = json_decode('{"message":"hello you"}', true);

$data['newField'] = 'new value';

$json = json_encode($data);

echo $json;

?>