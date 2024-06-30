<?php
namespace App\traits;

trait StringHelper
{
    function removeSpaces($str): string
    {
        return trim($str);
    }
}
