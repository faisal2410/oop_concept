<?php
namespace App\static;

class FilesHelper
{
    static public function hasData($filename): bool
    {
        if (!(file_exists($filename))) {
            echo "{$filename} does not exists \n";
            return false;
        }

        $content = file_get_contents($filename);
        if (empty($content)) {
            return false;
        } else {
            return true;
        }
    }
}
