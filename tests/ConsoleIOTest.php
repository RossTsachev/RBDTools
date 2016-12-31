<?php

namespace RBDTools\Tests;

use PHPUnit\Framework\TestCase;
use RBDTools\ConsoleIO;
use Symfony\Component\Console\Tester\ApplicationTester;
use Symfony\Component\Console\Application;

class ConsoleIOTest extends TestCase
{
    public function testExecute()
    {
        // arrange
        $app = new Application();
        $app->setAutoExit(false);
        $app->add(new ConsoleIO());
        $appTester = new ApplicationTester($app);

        // act
        $appTester->run([
            'rosstsachev:backend',
        ]);
        $output = $appTester->getDisplay();

        // assert
        $this->assertContains('Numbers is 0', $output);
    }
}
