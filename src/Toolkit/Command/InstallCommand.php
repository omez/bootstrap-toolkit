<?php

namespace Toolkit\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Toolkit installation command
 * 
 * @author Alexander Sergeychik
 */
class InstallCommand extends AbstractCommand {
	
	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\Console\Command\Command::configure()
	 */
	protected function configure() {
		$this->setName('install');
		$this->setDescription(sprintf('Installs %s in system', $this->getApplicationName()));
		$this->addArgument('name', InputArgument::OPTIONAL, 'Installation name', '/usr/local/bin/toolkit');
	}
	
	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\Console\Command\Command::execute()
	 */
	protected function execute(InputInterface $input, OutputInterface $output) {
				
	}
	
}
