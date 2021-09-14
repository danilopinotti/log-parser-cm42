<?php

namespace LogParser;

use LogParser\Exceptions\LogFileNotFoundException;

class LogParser
{
    private $logPath;

    private function __construct(string $logPath)
    {
        $this->logPath = $logPath;
    }

    static function fromFile(string $filePath)
    {
        if (!file_exists($filePath)) {
            throw new LogFileNotFoundException('No game log found! Please, check the "data" folder and try again.');
        }

        return new self($filePath);
    }

    public function parse()
    {
        $handle = fopen($this->logPath, 'r');

        $firstLine = fgets($handle);

        fclose($handle);
        return $firstLine;
    }

    public function parseJson(): string
    {
        return json_encode($this->parse());
    }
}
