<?php

namespace Tests;

use LogParser\LogParser;
use PHPUnit\Framework\TestCase;

class LogParserTest extends TestCase
{
    public function test_should_read_first_line()
    {
        $this->writeInLog('not_empty_content');

        $logParser = LogParser::fromFile($this->filePath);
        $parsedData = $logParser->parseJson();

        $this->assertEquals('"not_empty_content"', $parsedData);
    }

    private function writeInLog($logContent) {
        file_put_contents($this->filePath, $logContent);
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->filePath = __DIR__.'/../data/test.log';
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        unlink($this->filePath);
    }
}
