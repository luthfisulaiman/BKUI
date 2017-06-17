<?php
$data = $_REQUEST['base64data'];
$image = explode('base64,', $data);
file_put_contents('test2.png', base64_decode($image[1]));

 ?>
