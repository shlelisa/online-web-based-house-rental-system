<?php
//require_once "vendor/autoload.php";
 
use Google\Cloud\Translate\V2\TranslateClient;
 
try {
    $translate = new TranslateClient([
        'keyFilePath' => getcwd().'/kebele-last-a9866ca08af8.json'
    ]);
	 $result = $translate->translate('Hello world!', [
        'target' => 'am' // 'fr' is a ISO-639-1 code
    ]);
 
    echo $result['text'];
} catch(Exception $e) {
    echo $e->getMessage();
}