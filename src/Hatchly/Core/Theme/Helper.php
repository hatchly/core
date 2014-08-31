<?php  namespace Hatchly\Core\Theme; 

class Helper {

    public function asset($file = null)
    {
        return asset("/themes/default/{$file}");
    }

    public function view($view = null)
    {
        return "default/{$view}";
    }
} 