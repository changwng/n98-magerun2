<?php

namespace N98\Magento\Command;

use N98\Magento\Command\PHPUnit\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class ListCommandTest extends TestCase
{
    public function testExecute()
    {
        $command = $this->getApplication()->find('list');

        $commandTester = new CommandTester($command);
        $commandTester->execute(
            array(
                'command' => 'list',
            )
        );
    
        $this->assertContains(
            sprintf('n98-magerun2 version %s by netz98 new media GmbH', $this->getApplication()->getVersion()),
            $commandTester->getDisplay()
        );
    }
}
