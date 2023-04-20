<?php
function truncateText($text, $maxLength)
{
    if (strlen($text) > $maxLength) {
        $text = substr($text, 0, $maxLength - 3) . '...';
    }
    return $text;
}
