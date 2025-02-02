<?php

return [
    'errors' => [
        'excel_exporter_not_exists' => 'استخراج کننده اکسل وجود ندارد. ( :key )'
    ],
    'exports' => [
        'users' => [
            'id' => '#',
            'status' => 'وضعیت',
            'type' => 'نوع',
            'mobile' => 'موبایل',
            'email' => 'ایمیل',
            'national_code' => 'کد ملی',
            'first_name' => 'نام',
            'last_name' => 'نام خانوادگی',
            'created_at' => 'تاریخ ایجاد',
            'deleted_at' => 'تاریخ حذف'
        ],
        'roles' => [
            'id' => '#',
            'name' => 'نام انگلیسی',
            'name_fa' => 'نام فارسی',
            'created_at' => 'تاریخ ایجاد',
        ],
        'product_categories' => [
            'id' => '#',
            'parent' => 'دسته بندی مادر',
            'status' => 'وضعیت',
            'type' => 'نوع',
            'title' => 'عنوان',
            'slug' => 'اسلاگ',
            'summary' => 'خلاصه محتوا',
            'content' => 'محتوا',
            'created_at' => 'تاریخ ایجاد',
            'deleted_at' => 'تاریخ حذف'
        ],
    ],
];
