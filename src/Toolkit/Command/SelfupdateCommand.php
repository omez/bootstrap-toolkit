<?php

namespace Toolkit\Command;

use Symfony\Component\Console\Command\Command;

class SelfupdateCommand extends Command {
	
	protected function configure() {
		$this->setName('self-update');
		$this->setAliases(array('selfupdate'));
	}
	
}
