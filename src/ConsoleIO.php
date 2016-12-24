<?php

namespace RBDTools;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class ConsoleIO extends Command
{
    protected function configure()
    {
        $number = 0;
        $this->setName("rosstsachev:backend")
            ->setDescription("Description for back-end command")
            ->setDefinition([
                new InputOption(
                    'number',
                    'numb',
                    InputOption::VALUE_OPTIONAL,
                    'Just a number',
                    $number
                ),
            ])
            ->setHelp(<<<EOT
Description what the command does

Usage:

<info>php run rosstsachev:backend --number 1</info>

or

<info>php run rosstsachev:backend -numb 1</info>
EOT
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $header_style = new OutputFormatterStyle(
            'white',
            'green',
            ['bold']
        );
        $output->getFormatter()->setStyle('header', $header_style);

        $number = intval($input->getOption('number'));

        $output->writeln('<header>Numbers is ' . $number . '</header>');
    }
}
