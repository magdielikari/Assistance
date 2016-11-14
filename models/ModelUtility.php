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
		
		usort($summary,function ($a,$b){
			return strlen($a)-strlen($b);
		});
		
		return implode("<br>", $summary);
	}
}
?>
