<?php

namespace Callmeaf\Excel\Exports;

use Callmeaf\User\Services\V1\UserService;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Excel;

class UsersExport implements FromView,Responsable
{
    use Exportable;

    /**
     * It's required to define the fileName within
     * the export class when making use of Responsable.
     */
    private string $fileName = 'users.xlsx';

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
         * @var UserService $userService
         */
        $userService = app(config('callmeaf-user.service'));
        return view('callmeaf-excel::exports.users',[
            'users' => $userService->all(filters: request()->query())->getCollection()
        ]);
    }

}
