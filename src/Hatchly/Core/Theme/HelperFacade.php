<?php  namespace Hatchly\Core\Theme; 

use Illuminate\Support\Facades\Facade;

class HelperFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'themeHelper';
    }
} 