<?php

namespace Callmeaf\Excel\Utilities\V1\Api\Excel;


use Callmeaf\Base\Utilities\V1\FormRequestAuthorizer;

class ExcelFormRequestAuthorizer extends FormRequestAuthorizer
{
    public function export(): bool
    {
        return true;
    }

    public function import(): bool
    {
        return true;
    }
}
