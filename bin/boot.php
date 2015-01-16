<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Toolkit\Command;

$package = json_decode(file_get_contents(__DIR__ . '/../composer.json'), true);
$application = new Application($package['description'], $package['version']);

// bootstrap toolkit commands
// @todo add only on "superuser" context
$application->add(new Command\InstallCommand());
$application->add(new Command\UninstallCommand());
$application->add(new Command\SelfupdateCommand());

$application->run();
