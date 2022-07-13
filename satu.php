<?php

$data=array(1, 2, 4, 3, 10, 11, 20, 5, 100, 200);
$jumlah=count($data);

for($i=0; $i<jumlah; $i++ ){

  if(data[i]==5){
    echo "Fizz";
    for($j=0; $j<jumlah; $j++){
      if((data[i]==5) && (data[j]==11)){
        echo "FizzBuzz";
      }
    }
  }

  elseif(data[i]==11){
    echo "Buzz";
    for($k=0; $k<jumlah; $k++){
      if((data[i]==11) && (data[j]==5)){
        echo "FizzBuzz";
      }
    }
  }

}

?>