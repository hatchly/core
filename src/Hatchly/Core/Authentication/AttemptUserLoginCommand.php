<?php  namespace Hatchly\Core\Authentication; 

class AttemptUserLoginCommand {

    public $email;
    public $password;
    public $remember;

    function __construct($email, $password, $remember = false)
    {
        $this->email = $email;
        $this->password = $password;
        $this->remember = $remember;
    }
}
