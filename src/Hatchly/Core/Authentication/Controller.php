<?php namespace Hatchly\Core\Authentication;

use Hatchly\Core\BaseController;
use View, Theme;

class Controller extends BaseController {

    public function login()
    {
        return View::make(Theme::view('authentication/login'));
    }

    public function doLogin()
    {
        dd($this->execute(AttemptUserLoginCommand::class));
    }

    public function doLogout()
    {
        dd($this->execute(UserLogoutCommand::class));
    }

}
