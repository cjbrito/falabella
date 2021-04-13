function numberReplace($max_array){
   $output=[];
   for($i=1; $i<=$max_array; $i++){
      $output[$i]=$i;
   }

   for($i=3; $i<=$max_array; $i+=3){
      $output[$i]="Falabella";
   }

   for($i=5; $i<=$max_array; $i+=5){
      $output[$i]="It";
      if($i%5==0 && $i%3==0){
         $output[$i]="INTEGRACIONES";
      }
   }
   
   return implode($output,",");
}
