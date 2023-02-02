<?php
	function swapPositions(array $words, int $positionA, int $positionB) {
		$aux = $words[$positionA];
		$words[$positionA] = $words[$positionB];
		$words[$positionB] = $aux;
		return $words;
	}
 	function sortWords(array $words): array 
 	{
 		$ordered_words_count = 0;
 		while($ordered_words_count < sizeof($words)-1) {
 			$smaller_index = 0 + $ordered_words_count;
 			$remaining_words_index = $ordered_words_count+1;
 			while ($remaining_words_index < sizeof($words)) {
 				if(strlen($words[$remaining_words_index]) < strlen($words[$smaller_index])) {
 					$smaller_index = $remaining_words_index;
				}
				++$remaining_words_index;
 			}
 			$words = swapPositions($words,$ordered_words_count,$smaller_index);
 			++$ordered_words_count;
 		}
 		return $words; 
 	}
 	$wordslist1 = ['hola','as','PHP','estudiar'];
 	$wordslist2 = ['chachi','supercaligfragilistipuesquialidoso','esternoclidomastoideo'];
 	$wordslist3 = ['h','',' ','sopa','res'];

 	var_dump(sortWords($wordslist1));
 	var_dump(sortWords($wordslist2));
 	var_dump(sortWords($wordslist3));

?>