<?php

namespace App\Http\Controllers;

abstract class Controller
{
    /*
     * Define http status codes on returned data
     */
    const HTTP_STATUS_CODES = [
        'success' => 200,
        'created' => 201,
        'bad_request' => 400,
        'unauthorized' => 401,
        'not_found' => 404,
        'server_error' => 500,
    ];
}
