<?php
namespace App\static;

class StringHelper
{
    public static function countVowel($content)
    {
        $content = strtolower($content);
        $content = str_split($content);
        $vowels = ["a", 'e', 'i', 'o', 'u'];
        $vowelCount = 0;

        foreach ($content as $character) {
            if (in_array($character, $vowels)) {
                $vowelCount++;
            }
        }
        return $vowelCount;
    }
}