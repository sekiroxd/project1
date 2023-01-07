<?php
include 'config.php';

$connection = mysqli_connect(PARAMS['HOST'],PARAMS['USER'], PARAMS['PASSWORD'], PARAMS['DATABASE']);

if(!$connection)
{
  echo 'Csatalkozási hiba : ' . mysqli_connect_error();
}
?>