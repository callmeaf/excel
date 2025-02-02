<?php

return [
    'errors' => [
        'excel_exporter_not_exists' => 'Excel Exporter Not exists. ( :key )'
    ],
    'exports' => [
        'users' => [
            'id' => '#',
            'status' => 'Status',
            'type' => 'Type',
            'mobile' => 'Mobile',
            'email' => 'Email',
            'national_code' => 'National Code',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'created_at' => 'Created at',
            'deleted_at' => 'Deleted at'
        ],
        'roles' => [
            'id' => '#',
            'name' => 'English Name',
            'name_fa' => 'Persian Name',
            'created_at' => 'Created at',
        ],
        'product_categories' => [
            'id' => '#',
            'parent' => 'Parent',
            'status' => 'Status',
            'type' => 'Type',
            'title' => 'Title',
            'slug' => 'Slug',
            'summary' => 'Summary',
            'content' => 'Content',
            'created_at' => 'Created at',
            'deleted_at' => 'Deleted at'
        ],
    ],
];
