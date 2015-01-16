<?php

namespace Toolkit\Command;

/**
 * Toolkit uninstall command
 * 
 * @author Alexander Sergeychik
 */
class UninstallCommand extends AbstractCommand {

	public function configure() {
		$this->setName('uninstall');
		$this->setDescription(sprintf('Uninstalls %s from system', $this->getApplicationName()));
	}

}
