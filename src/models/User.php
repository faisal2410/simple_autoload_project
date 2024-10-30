<?php

namespace Models;

class User
{
    public function __construct()
    {
        echo "User class instantiated.\n";
    }

    public function getInfo()
    {
        return "This is the User class.\n";
    }
}
