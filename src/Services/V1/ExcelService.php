<?php

namespace Callmeaf\Excel\Services\V1;


use Callmeaf\Excel\Exceptions\ExcelExporterNotExistsException;
use Callmeaf\Excel\Services\V1\Contracts\ExcelServiceInterface;
use Maatwebsite\Excel\Facades\Excel;

class ExcelService implements ExcelServiceInterface
{
   protected Excel $Excel;

   public function __construct()
   {
       $this->Excel = app(config('callmeaf-excel.facade'));
   }

    public function export(string $key,array $filters = [])
   {
       $exportClass = @config('callmeaf-excel.exports')[$key];
       if(!$exportClass) {
           throw new ExcelExporterNotExistsException(__('callmeaf-excel::v1.errors.excel_exporter_not_exists', ['key' => $key]));
       }

       return app($exportClass);
   }

   public function import(string $key,array $filters = [])
   {
       // TODO: Implement usersImport() method.
   }
}
