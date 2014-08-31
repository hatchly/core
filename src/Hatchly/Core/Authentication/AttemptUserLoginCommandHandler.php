<?php  namespace Hatchly\Core\Authentication; 

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class AttemptUserLoginCommandHandler implements CommandHandler {

    use DispatchableTrait;

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
        return $this->auth->login($command->email, $command->password, $command->remember);
    }
}
