<?php namespace Hatchly\Core\Authentication;

use Illuminate\Support\Facades\View;
use Laracasts\Commander\CommanderTrait;

class Controller extends \BaseController {

    use CommanderTrait;

    public function login()
    {
        return View::make('');
    }

    public function doLogin()
    {
        $this->execute(AttemptUserLoginCommand::class);
    }

    public function doLogout()
    {

    }

}
