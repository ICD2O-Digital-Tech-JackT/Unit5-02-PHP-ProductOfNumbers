<?php
  $N1 = $_POST['1'];
  $N2 = $_POST['2'];
  $Result = 0;
  $Valid = true;
if ($N1&&$N2){
  //Checking if numbers are whole and positive
  if(floatval($N1)%1==0&&floatval($N2)%1==0&&floatval($N1)>0&&floatval($N2)>0){
    for ($i=0; $i<$N2; $i++){
        $Result+=floatval($N1);
    }
    $Result = $N1."x".$N2."=".$Result;
  } else{
    //warn user if they didnt enter 2 valid numbers
    $Valid = false;
  }
}?>
<?php
  if ($Valid == true){
    //Display result
   echo "Result: ".$Result;
  } else{
    //Display error
   echo "Please enter 2 valid numbers, and make sure that you have entered a min number that is less than your max number";
  }
?>