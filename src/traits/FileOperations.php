<?php
namespace App\traits;

trait FileOperations
{

    function getFileSize($fileName)
    {
        return filesize($fileName);
    }
}