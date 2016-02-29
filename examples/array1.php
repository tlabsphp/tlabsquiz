<?php
  $players=array("johan","barbra","bill","nancy");
  reset($players);
  while(list($key,$val)=each($players)){
    print  "#$key=$val\n";
    
  }
  echo "List function <br>";
  
  $color=array("red","blue","green");
  
  while(list($key,$val)=each($color)){
    print $val . "<br>";
  }
   
?>