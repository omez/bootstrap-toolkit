<?php

namespace Toolkit\Command;

use Symfony\Component\Console\Command\Command;

/**
 * Abstract toolkit command
 *
 * @author Alexander Sergeychik
 */
abstract class AbstractCommand extends Command {

	/**
	 * Returns application name
	 * 
	 * @return mixed
	 */
	protected function getApplicationName() {
		$package = json_decode(file_get_contents(__DIR__ . '/../../../composer.json'), true);
		return end(explode('/', $package['name']));
	}
	
}
