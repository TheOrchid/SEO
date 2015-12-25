<?php namespace Orchid\SEO\Facades;

use Illuminate\Support\Facades\Facade;
use Orchid\SEO\Models\SEO;

class SettingsFacades extends Facade
{
    /**
     * Получить зарегистрированное имя компонента.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SEO::class;
    }
}
