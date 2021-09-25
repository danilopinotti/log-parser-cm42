<?php

use LogParser\LogParser;
use LogParser\Exceptions\LogFileNotFoundException;

require __DIR__.'/vendor/autoload.php';

$logName = $argv[1] ?? 'games.log';
$logPath = __DIR__.'/data/'.$logName;

try {
    echo LogParser::fromFile($logPath)
        ->parseJson();
} catch (LogFileNotFoundException $exception) {
    echo "Arquivo de log não encontrado '/data/$logName'";
}
