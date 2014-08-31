<?php  namespace Hatchly\Core\Theme;

class Helper {

    protected $theme = null;
    protected $adminTheme = null;

    function __construct()
    {
        $this->theme = 'default';
        $this->adminTheme = 'default-admin';
    }

    /**
     * Get the URL to a specified asset
     *
     * @param null $file
     * @return string
     */
    public function asset($file = null)
    {
        return $this->_asset($file, $this->theme);
    }

    /**
     * Get the path to a view
     *
     * @param null $view
     * @return string
     */
    public function view($view = null)
    {
        return $this->_view($view, $this->theme);
    }

    /**
     * Get the URL to a specified admin asset
     *
     * @param null $file
     * @return string
     */
    public function adminAsset($file = null)
    {
        return $this->_asset($file, $this->adminTheme);
    }

    /**
     * Get the path to a admin view
     *
     * @param null $view
     * @return string
     */
    public function adminView($view = null)
    {
        return $this->_view($view, $this->adminTheme);
    }

    /**
     * Build the path to a view
     *
     * @param $view
     * @param $theme
     * @return string
     */
    protected function _view($view, $theme)
    {
        return "{$theme}/{$view}";
    }

    /**
     * Build the URL to a specified asset
     *
     * @param $view
     * @param $theme
     * @return string
     */
    protected function _asset($view, $theme)
    {
        return asset("/themes/{$theme}/{$view}");
    }
} 