<?PHP
$time='05:39:00';
$time1='03:39:00';

/*$time2=$time-1;
$LocalTime = strtotime('3 hours');
$ctime= date('h:i a', $LocalTime);
echo $ctime;
echo $time2;
  if($ctime>$time){
	  echo "the current time is $time ";
  }
  else{
	  
	  echo "the current dhdhdfgf time is beyond $time ";
  }*/
  $hourago = strtotime($time . " - 2 hour");
  $h = strtotime($time1);
    echo $hourago;
	
if($hourago==$h)
{
echo "work";
}
else
echo "try";	
  ?>