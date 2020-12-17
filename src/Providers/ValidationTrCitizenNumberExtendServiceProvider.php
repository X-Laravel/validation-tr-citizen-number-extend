<?php

namespace XLaravel\ValidationTrCitizenNumberExtend\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Validator;

class ValidationTrCitizenNumberExtendServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'X-Laravel');

        Validator::extend('tr_citizen_number', 'XLaravel\ValidationTrCitizenNumberExtend\Rules\TrCitizenNumberRule@passes');
    }
}
