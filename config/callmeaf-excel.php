<?php

return [
    'facade' => \Maatwebsite\Excel\Facades\Excel::class,
    'service' => \Callmeaf\Excel\Services\V1\ExcelService::class,
    'exports' => [
        'users' => \Callmeaf\Excel\Exports\UsersExport::class,
    ],
    'events' => [
        \Callmeaf\Excel\Events\ExcelExported::class => [
            // listeners
        ],
        \Callmeaf\Excel\Events\ExcelImported::class => [
            // listeners
        ],
    ],
    'validations' => [
        'excel' => \Callmeaf\Excel\Utilities\V1\Api\Excel\ExcelFormRequestValidator::class,
    ],
//    'resources' => [
//        'excel' => \Callmeaf\Excel\Utilities\V1\Api\Excel\ExcelResources::class,
//    ],
    'controllers' => [
        'excels' => \Callmeaf\Excel\Http\Controllers\V1\Api\ExcelController::class,
    ],
    'form_request_authorizers' => [
        'excel' => \Callmeaf\Excel\Utilities\V1\Api\Excel\ExcelFormRequestAuthorizer::class,
    ],
    'middlewares' => [
        'excel' => \Callmeaf\Excel\Utilities\V1\Api\Excel\ExcelControllerMiddleware::class,
    ],
];
