<?php

use Hatchly\Core\Theme\Helper;

class ThemeHelperTest extends Orchestra\Testbench\TestCase {

    private $themeHelper;

    public function setUp()
    {
        parent::setUp();
        $this->themeHelper = new Helper;
    }

    public function testCanGetThePathOfAPublicAsset()
    {
        $assetPath = $this->themeHelper->asset('foo.jpg');

        $this->assertEquals('http://localhost/themes/default/foo.jpg', $assetPath);
    }

    public function testCanGetThePathOfAAdminAsset()
    {
        $assetPath = $this->themeHelper->adminAsset('bar.jpg');

        $this->assertEquals('http://localhost/themes/default-admin/bar.jpg', $assetPath);
    }

    public function testCanGetThePathOfAPublicView()
    {
        $viewPath = $this->themeHelper->view('foo');

        return $this->assertEquals($viewPath, 'default/foo');
    }

    public function testCanGetThePathOfAAdminView()
    {
        $viewPath = $this->themeHelper->adminView('bar');

        return $this->assertEquals($viewPath, 'default-admin/bar');
    }
}
 