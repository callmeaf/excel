<?php

namespace Callmeaf\Excel\Utilities\V1\Api\Excel;

use Callmeaf\Base\Utilities\V1\ControllerMiddleware;
use Illuminate\Routing\Controllers\Middleware;


class ExcelControllerMiddleware extends ControllerMiddleware
{
    public function __invoke(): array
    {
        return [
            new Middleware(middleware: 'auth:sanctum'),
        ];
    }
}
