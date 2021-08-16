<?php

namespace WeAreFar\LanguageComponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WeAreFar\LanguageComponents\LanguageComponents
 */
class LanguageComponentsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-language-components';
    }
}
