<?php

namespace Toolkit\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Self update toolkit from server
 * 
 * @author Alexander Sergeychik
 */
class SelfupdateCommand extends AbstractCommand {

	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\Console\Command\Command::configure()
	 */
	protected function configure() {
		$this->setName('self-update');
		$this->setAliases(array('selfupdate'));
		$this->setDescription(sprintf('Updates %s to the latest version', $this->getApplicationName()));
	}
	
	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\Console\Command\Command::execute()
	 */
	protected function execute(InputInterface $input, OutputInterface $output) {
		
		// download latest version
		
		// uninstall toolkit from system
		
		// install new toolkit
		
	}
	
}
