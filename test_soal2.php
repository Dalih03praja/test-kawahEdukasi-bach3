<?php

$data=array(1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1);
$jumlah=count($data);

for($i=0; $i<$jumlah; $i++ ){
  if(is_int($data[$i])){
    echo 'index ke '.$i.' adalah integer dengan data '.$data[$i];
  }
  elseif(is_string($data[$i])){
    echo 'index ke '.$i.' adalah string dengan data '.$data[$i];
  }
}

?>