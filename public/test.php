<?php

$words = explode (' ', "One Two" );
$initials = '';
foreach($words as $word) {
    $initials = $initials.$word[0];
}
var_dump($initials.'_'.time());