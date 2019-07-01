<?php

    class Mail {
        private $transport;
        private $message;

        public function __construct(string $username, string $password, string $smtp = "smtp-mail.outlook.com", int $port = 587) {
            $this->transport = (new Swift_SmtpTransport())
                ->setUsername($username)
                ->setPassword($password)
                ->setHost($smtp)
                ->setPort($port)->setEncryption('tls');
        }

        public function CreateMessage(string $exepeditor, string $message, array $from, array $to) : void {
            $this->message = (new Swift_Message($exepeditor))
            ->setSubject($exepeditor)
            ->setFrom($from)
            ->setTo($to)
            ->setBody($message);
        }

        public function SendMessage() : void {
            if (!isset($this->message)) {
                return;
            }
            
            try {
                $mailer = new Swift_Mailer($this->transport);
            }
            catch (Exception $e) {
            }
        }
    }