<?php
if (isset($_POST['submit']))
{
	$input = $_POST['input'];
	echo " <b>", ($input), "</b><br>";
	if($input >= 80 and $input <= 100){
		echo "<b>Sangat Bagus</b>";
	}elseif ($input >= 68 and $input <= 79){
		echo "<b>Bagus</b>";
	}elseif ($input >= 55 and $input <= 67){
		echo "<b>Lumayan</b>";
	}elseif ($input >= 45 and $input <= 54){
		echo "<b>Jelek</b>";
	}elseif ($input >= 0 and $input <= 44){
		echo "<b>Sangat Jelek</b>";
	}else{
		echo "Silahkan Masukan Angka 1-100";
	}
}
?>
