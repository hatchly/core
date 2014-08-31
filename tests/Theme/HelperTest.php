<?php

use Hatchly\Core\Theme\Helper;

class ThemeHelperTest extends Orchestra\Testbench\TestCase {

    private $themeHelper;

    public function setUp()
    {
        parent::setUp();
        $this->themeHelper = new Helper;
    }

    public function testCanGetThePathOfAnAsset()
    {
        $assetPath = $this->themeHelper->asset('foo.jpg');

        $this->assertEquals('http://localhost/themes/default/foo.jpg', $assetPath);
    }

    public function testCanGetThePathOfAView()
    {
        $viewPath = $this->themeHelper->view('foo');

        return $this->assertEquals($viewPath, 'default/foo');
    }
}
 