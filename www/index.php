<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

App\Bootstrap::boot()
	->createContainer()
	->getByType(\Apitte\Core\Application\IApplication::class)
	->run();
