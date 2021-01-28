<?php

namespace JiraApi\Auth;

use JiraApi\JiraClient;

class AuthService extends JiraClient
{
    public function getSession()
    {
        return 'test';
    }
}