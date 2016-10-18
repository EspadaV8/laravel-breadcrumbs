<?php
declare(strict_types=1);

namespace EspadaV8\Breadcrumbs;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        // App::make('breadcrumbs')
        return 'breadcrumbs';
    }
}
