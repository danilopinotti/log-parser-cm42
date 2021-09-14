<?php

use LogParser\LogParser;

require __DIR__.'/vendor/autoload.php';

$logName = $argv[1] ?? 'games.log';
$logPath = __DIR__.'/data/'.$logName;

$logParser = LogParser::fromFile($logPath);

echo $logParser->parseJson();
