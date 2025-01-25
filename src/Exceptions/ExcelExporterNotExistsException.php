<?php

namespace Callmeaf\Excel\Exceptions;

use Symfony\Component\HttpFoundation\Response;

class ExcelExporterNotExistsException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message ?: __('callmeaf-excel::v1.errors.excel_exporter_not_exists',['key' => '']), $code ?: Response::HTTP_FORBIDDEN, $previous);
    }
}

