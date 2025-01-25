<?php

namespace Callmeaf\Excel;

use Illuminate\Support\ServiceProvider;

class CallmeafExcelServiceProvider extends ServiceProvider
{
    private const CONFIGS_DIR = __DIR__ . '/../config';
    private const CONFIGS_KEY = 'callmeaf-excel';
    private const CONFIG_GROUP = 'callmeaf-excel-config';
    private const ROUTES_DIR = __DIR__ . '/../routes';
    private const RESOURCES_DIR = __DIR__ . '/../resources';
    private const VIEWS_NAMESPACE = 'callmeaf-excel';
    private const VIEWS_GROUP = 'callmeaf-excel-views';
    private const LANG_DIR = __DIR__ . '/../lang';
    private const LANG_NAMESPACE = 'callmeaf-excel';
    private const LANG_GROUP = 'callmeaf-excel-lang';
    public function boot(): void
    {
        $this->registerConfig();
        $this->registerRoute();
//        $this->registerEvents();
        $this->registerViews();
        $this->registerLang();
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(self::CONFIGS_DIR . '/callmeaf-excel.php',self::CONFIGS_KEY);
        $this->publishes([
            self::CONFIGS_DIR . '/callmeaf-excel.php' => config_path('callmeaf-excel.php'),
        ],self::CONFIG_GROUP);
    }

    private function registerRoute(): void
    {
        $this->loadRoutesFrom(self::ROUTES_DIR . '/v1/api.php');
    }

    private function registerViews(): void
    {
        $this->loadViewsFrom(self::RESOURCES_DIR . '/views',self::VIEWS_NAMESPACE);
        $this->publishes([
            self::RESOURCES_DIR . '/views' => resource_path('views/vendor/callmeaf-excel'),
        ],self::VIEWS_GROUP);

    }

    private function registerLang(): void
    {
        $langPathFromVendor = lang_path('vendor/callmeaf/excel');
        if(is_dir($langPathFromVendor)) {
            $this->loadTranslationsFrom($langPathFromVendor,self::LANG_NAMESPACE);
        } else {
            $this->loadTranslationsFrom(self::LANG_DIR,self::LANG_NAMESPACE);
        }
        $this->publishes([
            self::LANG_DIR => $langPathFromVendor,
        ],self::LANG_GROUP);
    }
}
