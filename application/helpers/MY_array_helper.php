<?php


	function calColspan($array, $key){
		$colspan = 1;
		
		if(count($array) > 1){
			$count_array = array_count_values($array);
			
			if($count_array[$array[$key]] > 1){
				if($key > 0){
					if($array[$key] == $array[$key - 1]){
						return 0;
					}
				}
				
				for($i=0; $i<count($array) - $key; $i++){
					if($array[$key] != $array[$key+$i]){
						break;
					}
				}
				$colspan = $i;
			}
			
		}
		
		return $colspan;
	}
