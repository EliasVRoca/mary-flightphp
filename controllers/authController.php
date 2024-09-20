<?php
class authController
{
    function __construct()
    {
    }
    public function login()
    {
        $blade = blade();
        echo $blade->run('src/login/login.blade.php');
    }
}
