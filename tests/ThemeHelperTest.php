<?php

use Hatchly\Core\Theme\Helper;

class ThemeHelperTest extends \PHPUnit_Framework_TestCase {

    private $themeHelper;

    public function setUp()
    {
        $this->themeHelper = new Helper;
    }

    public function testCanGetThePathOfAnAsset()
    {
        // TODO: Write test logic here
    }

    public function testCanGetThePathOfAView()
    {
        $viewPath = $this->themeHelper->view('foo');

        return $this->assertEquals($viewPath, 'default/foo');
    }
}
 