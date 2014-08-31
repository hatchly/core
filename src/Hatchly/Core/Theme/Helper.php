<?php  namespace Hatchly\Core\Theme;

class Helper {

    protected $theme = null;

    function __construct()
    {
        $this->theme = 'default';
    }

    /**
     * Get the URL to a specified asset
     *
     * @param null $file
     * @return string
     */
    public function asset($file = null)
    {
        return asset("/themes/{$this->theme}/{$file}");
    }

    /**
     * Get the path to a view
     *
     * @param null $view
     * @return string
     */
    public function view($view = null)
    {
        return "{$this->theme}/{$view}";
    }
} 