<?php

namespace Callmeaf\Excel\Exports;

use Callmeaf\User\Services\V1\UserService;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Excel;

class RolesExport implements FromView,Responsable
{
    use Exportable;

    /**
     * It's required to define the fileName within
     * the export class when making use of Responsable.
     */
    private string $fileName = 'roles.xlsx';

    /**
     * Optional Writer Type
     */
    private string $writerType = Excel::XLSX;

    /**
     * Optional headers
     */
    private array $headers = [
        'Content-Type' => 'text/csv',
    ];

    public function view(): View
    {
        /**
         * @var UserService $roleService
         */
        $roleService = app(config('callmeaf-role.service'));
        return view('callmeaf-excel::exports.roles',[
            'roles' => $roleService->all(filters: request()->query())->getCollection()
        ]);
    }

}
