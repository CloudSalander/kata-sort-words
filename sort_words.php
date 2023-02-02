<?php
	function swapPositions(array $words, int $positionA, int $positionB) {
		$aux = $words[$positionA];
		$words[$positionA] = $words[$positionB];
		$words[$positionB] = $aux;
		return $words;
	}
	function getSmallerWordIndex($words,$ordered_words_count) {
		$smaller_index = 0 + $ordered_words_count;
 		$remaining_words_index = $ordered_words_count+1;
 		while ($remaining_words_index < sizeof($words)) {
 			if(strlen($words[$remaining_words_index]) < strlen($words[$smaller_index])) {
 				$smaller_index = $remaining_words_index;
			}
			++$remaining_words_index;
 		}
 		return $smaller_index;
	}
 	function sortWords(array $words): array 
 	{
 		$ordered_words_count = 0;
 		while($ordered_words_count < sizeof($words)-1) {
 			$smaller_index = getSmallerWordIndex($words,$ordered_words_count);
 			if($smaller_index > $ordered_words_count) {
 				$words = swapPositions($words,$ordered_words_count,$smaller_index);
 			}
 			++$ordered_words_count;
 		}
 		return $words; 
 	}
 	$wordslist1 = ['hola','as','PHP','estudiar'];
 	$wordslist2 = ['chachi','supercaligfragilistipuesquialidoso','esternoclidomastoideo'];
 	$wordslist3 = ['h','',' ','sopa','res'];
 	$wordslist4 = array("manzana", "plátano", "pera", "naranja");
 	$wordslist5 = array("rojo", "azul", "verde", "amarillo");
 	$wordslist6 = array("gato", "perro", "ratón", "conejo");
 	$wordslist7 = array("México", "Colombia", "Argentina", "Perú");

 	$wordsLists = array($wordslist1,$wordslist2,$wordslist3,$wordslist4,$wordslist5,
 		$wordslist6,$wordslist7);

 	foreach($wordsLists as $wordslist) {
 		var_dump(sortWords($wordslist));
 	}

?>