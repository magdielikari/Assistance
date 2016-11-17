<?php 

namespace app\models;

Class ModelUtility
{
	public static function handler($record, $relation, $attribute)
	{
		$summary = [];
		$valor=[];
		$absoluto=[];
		foreach($record[$relation] as $data){
			$summary[] = $data[$attribute];
		}
		
		return implode("<br>", $summary);
	}

		public static function handlerr($record, $relation, $attribute)
	{
		$summary = [];
		$valor=[];
		$absoluto=[];
		foreach($record[$relation] as $data){
			$summary[] = $data[$attribute];
		}
		
		return implode(" ", $summary);
	}

	public static function handlers($record, $relation, $attribute, $value1, $value2)
	{
		$summary = [];
		foreach($record[$relation] as $data){
			$summary[$data[$attribute]] =  [$data[$value1], $data[$value2]];
		}
		
		ksort($summary);
		$a = [];
		$b = False;
		foreach ($summary as $key => $value) {
			if (($summary[$key][1] == 'Entrada') && ($b == False)) {
				$b = True;
				$a[] = $summary[$key][0];
			}
		}

		krsort($summary);
		$b = False;
		foreach ($summary as $key => $value) {
			if (($summary[$key][1] == 'Salida') && ($b == False)) {
				$b = True;
				$a[] = $summary[$key][0];
			}
		}
			
		return implode("<br>", $a);
	}

	public static function handlerrs($record, $relation, $attribute, $value1, $value2)
	{
		$summary = [];
		foreach($record[$relation] as $data){
			$summary[$data[$attribute]] =  [$data[$value1], $data[$value2]];
		}
		
		ksort($summary);
		$a = [];
		$b = False;
		foreach ($summary as $key => $value) {
			if (($summary[$key][1] == 'Entrada') && ($b == False)) {
				$b = True;
				$a[] = $summary[$key][0];
			}
		}

		krsort($summary);
		$b = False;
		foreach ($summary as $key => $value) {
			if (($summary[$key][1] == 'Salida') && ($b == False)) {
				$b = True;
				$a[] = $summary[$key][0];
			}
		}
			
		return implode(" ", $a);
	}

	public static function handlerss($record, $relation, $attribute, $value1, $value2)
	{
		$summary = [];
		foreach($record[$relation] as $data){
			$summary[$data[$attribute]] =  [$data[$value1], $data[$value2]];
		}
		
		ksort($summary);
		$a = [];
		$b = False;
		foreach ($summary as $key => $value) {
			if (($summary[$key][1] == 'Entrada') && ($b == False)) {
				$b = True;
				$a[] = $summary[$key][1];
			}
		}

		krsort($summary);
		$b = False;
		foreach ($summary as $key => $value) {
			if (($summary[$key][1] == 'Salida') && ($b == False)) {
				$b = True;
				$a[] = $summary[$key][1];
			}
		}
			
		return implode("<br>", $a);
	}
	
	public static function handlerrss($record, $relation, $attribute, $value1, $value2)
	{
		$summary = [];
		foreach($record[$relation] as $data){
			$summary[$data[$attribute]] =  [$data[$value1], $data[$value2]];
		}
		
		ksort($summary);
		$a = [];
		$b = False;
		foreach ($summary as $key => $value) {
			if (($summary[$key][1] == 'Entrada') && ($b == False)) {
				$b = True;
				$a[] = $summary[$key][1];
			}
		}

		krsort($summary);
		$b = False;
		foreach ($summary as $key => $value) {
			if (($summary[$key][1] == 'Salida') && ($b == False)) {
				$b = True;
				$a[] = $summary[$key][1];
			}
		}
			
		return implode(" ", $a);
	}
}
?>
