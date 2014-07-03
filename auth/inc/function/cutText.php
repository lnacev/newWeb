<?php 
$end = "...";
function cutString($text, $end, $limit = 300)
{
    if (strlen($text) <= $limit) {
       echo $text;
    } else {
       $text = substr($text, 0, $limit+1);
       $pos = strrpos($text, " "); 
       echo substr($text, 0, ($pos ? $pos : -1)) . $end;
    }
}
?>