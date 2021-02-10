<?php

declare(strict_types=1);

namespace App\Controllers;

use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Http\ApiRequest;
use Apitte\Core\Http\ApiResponse;
use Nette\Utils\Json;


/**
 * @Path("/users")
 */
final class UserController extends BaseController
{
    /**
     * @Path("/")
     * @Method("GET")
     */
    public function index(ApiRequest $request, ApiResponse $response): ApiResponse
    {
        $response = $response->writeBody(Json::encode([
            [
                'id' => 1,
                'firstName' => 'John',
                'lastName' => 'Doe',
                'emailAddress' => 'john@doe.com',
            ],
            [
                'id' => 2,
                'firstName' => 'Elon',
                'lastName' => 'Musk',
                'emailAddress' => 'elon.musk@spacex.com',
            ],
        ]));

        return $response;
    }
}
