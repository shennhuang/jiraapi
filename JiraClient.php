<?php

class JiraClient
{
    private $jiraHost = '';
    private $apiUrl = '/rest/api/2';

    public function __construct()
    {
        $this->jiraHost = getenv('JIRA_HOST');

    }
}