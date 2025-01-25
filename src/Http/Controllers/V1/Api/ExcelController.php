<?php

namespace Callmeaf\Excel\Http\Controllers\V1\Api;

use Callmeaf\Base\Http\Controllers\V1\Api\ApiController;
use Callmeaf\Excel\Http\Requests\V1\Api\ExcelExportRequest;
use Callmeaf\Excel\Http\Requests\V1\Api\ExcelImportRequest;
use Callmeaf\Excel\Services\V1\ExcelService;

class ExcelController extends ApiController
{
    protected ExcelService $excelService;
    public function __construct()
    {
        $this->excelService = app(config('callmeaf-excel.service'));
    }

    public static function middleware(): array
    {
        return app(config('callmeaf-excel.middlewares.excel'))();
    }

    public function export(ExcelExportRequest $request,string $key)
    {
        try {
             return $this->excelService->export(key: $key);
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }

    public function import(ExcelImportRequest $request,string $key)
    {
        try {
            //
             return apiResponse([],__('base::v1.successful_loaded'));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }
}
