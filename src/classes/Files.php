<?php
namespace App\classes;
/* 
1) Create a Files Class
2) Create Methods
	- displayContent with filename as input parameter
	- getContent with filename as input parameter
3) Pass the Test.txt and displayContent and getContent.

*/

class Files
{
    public function displayContent($file_name): string
    {
        if (!(file_exists($file_name))) {
            echo "{$file_name} does not exists \n";
            return "";
        }
        $content = file_get_contents($file_name) . "\n";
        return $content;
    }
}

