<?php

class AuthService extends JiraClient
{
    private $jiraHost = '';
    
    public function __construct()
    {
        $this->jiraHost = getenv('JIRA_HOST');
    }

    
}