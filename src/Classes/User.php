<?php
    class User {
        public $name;
        public $lastname;
        public $job;
        public $birthday;
        public $city;
        public $study;
        public $phone;
        public $age;
        public $interests;
        public $degree;
        public $mail;
        public $adress;
    }
    
    $request = $connection->prepare("SELECT name, lastname, job, birthday, city, study, phone, age, interests, degree, mail, adress FROM user");
    $request->execute();
    $user = $request->fetchAll(PDO::FETCH_CLASS, "User")[0];

    $interests = explode(",", $user->interests);
    $user->interests = $interests;
?>