<?php

namespace Matthias\SymfonyConsoleForm\Tests;

use Matthias\SymfonyConsoleForm\Console\Command\InteractiveFormContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends InteractiveFormContainerAwareCommand
{
    public function formType()
    {
        return new TestType();
    }

    protected function configureInteractiveFormCommand()
    {
        $this->setName('test');
    }

    protected function executeInteractiveFormCommand(InputInterface $input, OutputInterface $output, $formData)
    {
        var_dump($formData); exit;
    }
}
