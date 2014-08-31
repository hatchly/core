<?php  namespace Hatchly\Core\Authentication; 

interface AuthPackageInterface {

    public function login($email, $password, $remember = false);

    public function logout();

    public function check();

    public function currentUser();

    public function getUserById($id);

    public function getUserByEmail($email);

} 
