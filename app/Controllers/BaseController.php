<?php

declare(strict_types=1);

namespace App\Controllers;

use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\UI\Controller\IController;
use Nette;


/**
 * @Path("/api/v1")
 */
abstract class BaseController implements IController
{
}
