<?php
function case_sort($x, $y)
{
    $cmp = strcasecmp($x, $y);
    return $cmp !== 0 ? $cmp : strcmp($x, $y);
}

function letter_occurence($string)
{
    $string = str_replace(' ', '', $string);
    $index = [];
    $split_string = str_split($string);
    usort($split_string, 'case_sort');

    foreach($split_string as $char)
    {
        $index[$char]++;
    }

    foreach($index as $char => $occurrence)
    {
        echo("$char: $occurrence"); echo("<br>");
    }
    return $index;
}

letter_occurence("Hello World");
letter_occurence("Bismillah");
letter_occurence("MasyaAllah");

?>