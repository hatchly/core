<?php  namespace Hatchly\Core\Authentication;

use Laracasts\Commander\CommandHandler;

class UserLogoutCommandHandler implements CommandHandler {

    protected $auth;

    function __construct(AuthPackageInterface $authPackage)
    {
        $this->auth = $authPackage;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        return $this->auth->logout();
    }
}
