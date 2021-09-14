<?php

namespace Tests;

use LogParser\Exceptions\LogFileNotFoundException;
use LogParser\LogParser;
use PHPUnit\Framework\TestCase;

class FileLoadTest extends TestCase
{
    public function test_should_fail_on_init_when_log_file_not_found()
    {
        $this->expectException(LogFileNotFoundException::class);
        $this->expectExceptionMessage('No game log found! Please, check the "data" folder and try again.');

        LogParser::fromFile('foo.not.exists');
    }

    public function test_should_init_when_log_file_was_found()
    {
        $filePath = __DIR__.'/../data/test.log';
        file_put_contents($filePath, 'not_empty_content');

        $logParser = LogParser::fromFile($filePath);
        $this->assertInstanceOf(LogParser::class, $logParser);

        unlink($filePath);
    }
}
