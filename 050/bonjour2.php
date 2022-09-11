<?php
$str = file_get_contents('./article.txt');
$nbrDeMots = str_word_count($str, 2, "éè'àùêçûô«");
print_r(array_count_values($nbrDeMots));
?>