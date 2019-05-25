<?php
    class User {
        function __construct($name, $lastname, $job, $birthday, $city, $study, $phone, $age, $interests, $degree, $mail, $adress) {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->job = $job;
            $this->birthday = $birthday;
            $this->city = $city;
            $this->study = $study;
            $this->phone = $phone;
            $this->age = $age;
            $this->interests = $interests;
            $this->degree = $degree;
            $this->mail = $mail;
            $this->adress = $adress;
        }
    }
    
    $user = new User("Thomas", "Giovannoni", "Web Dev", "23.11.1998", "Lyon", "Ynov", "06 04 48 77 32", "20", ["Drawing", "Reading", "Wacraft"], "Bachelor Info", "thomas.giovannoni@hotmail.fr", "14 rue de la république");
?>