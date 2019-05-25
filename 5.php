<?php

function ganti_kata($kata,$hrfLama,$hrfBaru)
{
	$kata;

	$ubah_kata = array($hrfLama => $hrfBaru);

	foreach($ubah_kata as $ganti=>$baru)
	{
		if(strpos($kata,$ganti))
		{
			$kata_baru = implode($baru,explode($ganti, $kata));
		}
		return $kata_baru;
	}
}

$kata = 'medan';
$hrfLama = 'e';
$hrfBaru = 'i';

$result = ganti_kata($kata,$hrfLama,$hrfBaru);
echo $result;
?>