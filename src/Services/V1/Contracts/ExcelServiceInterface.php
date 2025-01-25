<?php

namespace Callmeaf\Excel\Services\V1\Contracts;


interface ExcelServiceInterface
{
    public function export(string $key,array $filters = []);
    public function import(string $key,array $filters = []);
}
