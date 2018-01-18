<script>
function dealData(id,value){
  var place = document.getElementById(id);
  place.innerHTML = value;
}
window.setInterval(function(){ // 每秒从服务器取一次数据
  var ajax = new Ajax();
  ajax.get("remain_time.php?a="+Math.random(),function(data){
  eval("var dtime = "+data); 
  dealData('hour',dtime.hour);
  dealData('minute',dtime.minute);
  dealData('second',dtime.second);
 });
},1000);

</script>
<?php

$start_time = date('h:i:s',time());
$end_time = date('h:i:s',strtotime("1 hour"));
$start_famate_time = strtotime($start_time);//开始时间转化为时间戳
$end_famate_time = strtotime($end_time); //结束时间转化为时间戳

$remain_time = $end_famate_time-$start_famate_time; //剩余的秒数
$remain_hour = floor($remain_time/(60*60)); //剩余的小时
$remain_minute = floor(($remain_time - $remain_hour*60*60)/60); //剩余的分钟数
echo $remain_time."---".$remain_hour."---".$remain_minute;
?>
<span id="hour">00</span>小时<span id="minute">00</span>分<span id="second">00</span>秒


<?php  
$a = '6EK';
$count=strpos($a,"EK");
$str=substr_replace($a,"",$count,2); 
echo $str ;



$costofLocalMaterialOptArray = json_decode(stripslashes("[[{\"value\":0}]]"));
var_dump($costofLocalMaterialOptArray);



$costofLocalMaterialOptArray = json_decode(stripslashes("{\"31\":{\"value\":0},\"32\":{\"value\":0},\"52\":{\"value\":0}}"));
var_dump($costofLocalMaterialOptArray);

$specialElevatorModel = array('Double-Deck'=>'DOUBLE DECK','TE-Evolution'=>'TE-EVOLUTION','TE-Evolution 1'=>'TE-EVOLUTION 1','TE-Synergy'=>'TE-SYNERGY');

var_dump($specialElevatorModel);
if(array_key_exists('Double-Deck1',$specialElevatorModel)){
	echo $specialElevatorModel['Double-Deck'];
}else{
	echo '';
}

$old = '' ;

$new = '0' ;

if((double)$new>(double)$old){
	echo 'yang';
}else{
	echo 'ming';
}

$a = '0';
$b = null;
$c = 0 ;

if($a === $b){
	echo 1 ;
}else {
	echo 2;
}


?>