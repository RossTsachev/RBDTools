<?php

namespace RBDTools\Tests;

use PHPUnit\Framework\TestCase;
use RBDTools\YamlHandler;

class YamlHandlerTest extends TestCase
{
    static $yamlData = [
        'foo' => 'bar',
        'bar' => [
            'foo' => 'bar',
            'bar' => 'baz',
        ],
    ];
    static $testFile = 'tests/yaml_files/test.yml';
    static $tempFile = 'tests/yaml_files/temp.yml';

    public function tearDown()
    {
        if (file_exists(self::$tempFile)) {
            unlink(self::$tempFile);
        }
    }

    public function testYamlExtendsInterface()
    {
        $yamlHandler = new YamlHandler();
        $this->assertInstanceOf(
            'RBDTools\YamlHandlerInterface',
            $yamlHandler
        );
    }

    public function testYamlHandlerReads()
    {
        $yamlHandler = new YamlHandler();

        $yamlData = $yamlHandler->read(self::$testFile);

        $this->assertEquals(self::$yamlData, $yamlData);
    }

    public function testYamlHanderWrites()
    {
        $yamlHandler = new YamlHandler();

        $yamlHandler->write(self::$yamlData, self::$tempFile);

        $this->assertFileExists(self::$tempFile);
    }
}
