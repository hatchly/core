<?php  namespace Hatchly\Core\Theme;

use Illuminate\Support\Facades\Facade;

class HelperFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'themeHelper';
    }
}