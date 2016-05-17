<?php

// Correct my french
// https://github.com/CamilleBouliere/Correct-my-french
function correct_my_french($text) {

    $bad_french = array(' ?', ' !', ' :');
    $good_french = array('&nbsp;?', '&nbsp;!', '&nbsp;:');

    $text = str_replace($bad_french, $good_french, $text);

    return $text;

}
