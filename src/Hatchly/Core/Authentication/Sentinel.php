<?php  namespace Hatchly\Core\Authentication;

use Cartalyst\Sentinel\Sentinel as SentinelAuth;
use Illuminate\Foundation\Application;

class Sentinel implements AuthPackageInterface {

    /**
     * @var SentinelAuth
     */
    private $sentinel;

    public function __construct(Application $app)
    {
        // php artisan migrate --path=workbench/hatchly/core/vendor/cartalyst/sentinel/src/migrations

        $app->register('Cartalyst\Sentinel\Laravel\SentinelServiceProvider');
        $this->sentinel = $app->make('sentinel');
    }

    public function login($email, $password, $remember = false)
    {
        return $this->sentinel->authenticate([
            'email'    => $email,
            'password' => $password,
        ], $remember);
    }

    public function logout()
    {
        // TODO: Implement logout() method.
    }

    public function check()
    {
        // TODO: Implement check() method.
    }

    public function currentUser()
    {
        // TODO: Implement currentUser() method.
    }

    public function getUserById($id)
    {
        // TODO: Implement getUserById() method.
    }

    public function getUserByEmail($email)
    {
        // TODO: Implement getUserByEmail() method.
    }
}
