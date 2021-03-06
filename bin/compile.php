<?php
/**
 * Compiles local sources to PHAR 
 * 
 * @author Alexander Sergeychik
 */
require_once __DIR__ . '/../vendor/autoload.php';

$package = json_decode(file_get_contents(__DIR__ . '/../composer.json'), true);

$name = end(explode('/',$package['name']));
$pharPath = sprintf('%s.phar', $name);


$phar = new \Phar($pharPath, 0);
$phar->setSignatureAlgorithm(\Phar::SHA1);

$phar->startBuffering();
$phar->buildFromDirectory(__DIR__ . '/..');
$phar->delete('bin/compile.php');

$phar->stopBuffering();


// Generate stub author names
$stubNames = array();
foreach (isset($package['authors']) ? $package['authors'] : array() as $author) {
	if (isset($author['name'])) $name = $author['name'];
	elseif (isset($author['email'])) $name = $author['email'];
	else continue;
	$stubNames[] = sprintf(' * @author %s', $name);
}
$stubNames = implode("\n", $stubNames);

$stub=<<<EOF
#!/usr/bin/env php
<?php
/**
 * {$package['description']}
 * 
{$stubNames}
 */
Phar::mapPhar('toolkit');
include 'phar://toolkit/bin/boot.php';
__HALT_COMPILER();	
EOF;
	
$phar->setStub($stub);

// fix phar executable permissions
chmod($pharPath, 0755);