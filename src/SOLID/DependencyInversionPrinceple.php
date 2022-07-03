<?php

interface MailerInterface
{
    public function send();
}

class SmtpMailer implements MailerInterface
{
    public function send()
    {
    }
}

class ImapMailer implements MailerInterface
{
    public function send()
    {
    }
}

class Mailer // Low-level module
{
}

class SendWelcomeMessage // Hight-level Moudle
{
    private $mailer;

    function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
}




interface DBConntionInterface
{
    public function connect();
}

class MysqlConntion implements DBConntionInterface
{
    public function connect()
    {
        # code...
    }
}



class ForgotPassword
{
    public $conntions;

    public function __construct(DBConntionInterface $conntions)
    {
        $this->conntions = $conntions;
    }
}
