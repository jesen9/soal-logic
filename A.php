<?php
$arr = array(12,9,30,"A","M",99,82,"J","N","B");
$num = [];
$chr = [];

foreach($arr as $item)
{
    if(is_int($item)) array_push($num, $item);
    else array_push($chr, $item);
}

sort($chr);
sort($num);
$sorted_arr = array_merge($chr, $num);

echo('<pre>');
// print_r($arr); echo('<br>');
// print_r($num); echo('<br>');
// print_r($chr); echo('<br>');
print_r($sorted_arr);
echo('</pre>');

?>