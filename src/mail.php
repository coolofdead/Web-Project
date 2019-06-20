<?php
class Mail {
    private $transport;
    private $message;

    public function __construct(string $smtp, int $port, $username, $password) {
        $this->transport = (new Swift_SmtpTransport($smtp, $port))
        ->setUsername($username)
        ->setPassword($password)
        ;
    }

    public function CreateMessage(string $exepeditor, string $message, array $from, array $to) : void {
        $this->message = (new Swift_Message($exepeditor))
        ->setFrom($from)
        ->setTo($to)
        ->setBody($message);
    }

    public function SendMessage() : void {
        $mailer = new Swift_Mailer($this->transport);

        if (!isset($this->message)) {
            print("You should use CreateMessage first");
            return;
        }

        if ($mailer->send($this->message)) {
            print("mail sent!");
        }
        else {
            print("something went wrong..");
        }
    }
}