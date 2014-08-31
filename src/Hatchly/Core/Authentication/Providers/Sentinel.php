<?php  namespace Hatchly\Core\Authentication\Providers;

use Cartalyst\Sentinel\Sentinel as SentinelAuth;
use Hatchly\Core\Authentication\AuthPackageInterface;
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
        return $this->sentinel->logout();
    }

    public function check()
    {
        return $this->sentinel->check();
    }

    public function currentUser()
    {
        return $this->sentinel->getUser();
    }

    public function getUserById($id)
    {
        return $this->sentinel->findUserById($id);
    }

    public function getUserByEmail($email)
    {
        return $this->sentinel->findUserByEmail($email);
    }
}
