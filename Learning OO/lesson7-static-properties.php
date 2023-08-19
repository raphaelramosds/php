<?php

// Static properties neglects an existence of an instance to work

class Login
{
    public static bool $logged;

    public static function logOut()
    {
        self::$logged = false;
        print "Log out \n";
    }

    public static function logIn()
    {
        self::$logged = true;
        print "Log in \n";
    }

    public function getLogged()
    {
        return self::$logged;
    }
}

Login::$logged = true;

Login::logIn();

Login::logOut();

echo "User is currently " . (Login::$logged ? "online" : "offline");

// Error! getLogged() will only work if you intantiate an object of Login
Login::getLogged();
