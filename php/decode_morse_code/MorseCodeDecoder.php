<?php
/**
 * Write a program to decode Morse code inputted in string format and output it in English sentences.
 * Separate spaces between letters and letters with two spaces between words and words.
 */
require_once 'MorseCode.php';

$sentence = '.... .  ... .-.. . . .--. ...  . .- .-. .-.. -.--';
echo decode($sentence);

/**
 * Decode morse code into string.
 *
 * @param string $sentence
 * @return string
 */
function decode($sentence)
{
    $letters = [];
    $morseCodes = explode(' ', $sentence);
    $rules = (new MorseCode())->getRules();
    for($i = 0; $i < count($morseCodes); $i++){
        $letter = array_search($morseCodes[$i], $rules);
        if($letter !== false){
            $letters[] = $letter;
        } elseif (strlen($morseCodes[$i]) === 0) {
            $letters[] = ' ';
        } else {
            $letters[] = '?';
        }
    }

    return implode('', $letters);
}