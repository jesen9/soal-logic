<?php
function pattern_count($string, $pattern)
{
    $str_len = strlen($string);
    $pat_len = strlen($pattern);
    if($pat_len === 0) return 0;
    $count = 0;

    for($i = 0; $i <= $str_len - $pat_len; $i++)
    {
        if(substr($string, $i, $pat_len) === $pattern) $count++;
    }
    return $count;
}

echo(pattern_count("palindrom", "ind")); echo('<br>');
echo(pattern_count("abakadabra", "ab")); echo('<br>');
echo(pattern_count("hello", "")); echo('<br>');
echo(pattern_count("ababab", "aba")); echo('<br>');
echo(pattern_count("aaaaaa", "aa")); echo('<br>');
echo(pattern_count("hell", "hello")); echo('<br>');

?>