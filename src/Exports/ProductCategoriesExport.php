<?php

namespace Callmeaf\Excel\Exports;

use Callmeaf\Product\Services\V1\ProductCategoryService;
use Callmeaf\User\Models\User;
use Callmeaf\User\Services\V1\UserService;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Excel;

class ProductCategoriesExport implements FromView,Responsable
{
    use Exportable;

    /**
     * It's required to define the fileName within
     * the export class when making use of Responsable.
     */
    private string $fileName = 'product_categories.xlsx';

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
         * @var ProductCategoryService $productCategoryService
         */
        $productCategoryService = app(config('callmeaf-product-category.service'));
        return view('callmeaf-excel::exports.product_categories',[
            'productCategories' => $productCategoryService->all(filters: request()->query())->getCollection()
        ]);
    }

}
