<?php
require_once '../mail/autoload.php';
require_once '../src/mail.ignore';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp-relay.sendinblue.com', 587))
  ->setUsername($username)
  ->setPassword($password)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Test anonyme'))
  ->setFrom(['portfolio@contact.com' => 'A contact'])
  ->setTo(['thomas.giovannoni@hotmail.fr' => 'Thomas'])
  ->setBody('Coucou ça marche')
  ;

// Send the message
$result = $mailer->send($message);
?>



<?php
    require_once("../src/user.php");

    if (count($_POST))
    {
        $statement = $connection->prepare("
        INSERT INTO contact (id, name, mail, message)
        VALUES
                (:id, :name, :mail, :message);
        ");
        $statement->bindValue(':id', NULL);
        $statement->bindValue(':name', $_POST["name"]);
        $statement->bindValue(':mail', $_POST["mail"]);
        $statement->bindValue(':message', $_POST["message"]);
        $statement->execute();
    }
?>

<div id="Contact">
    <div class="Content-Container">
        <h2 class="Content-Title">Contact me <p>Info and form</p></h2>

        <div class="Contact-Container">
            <div class="Contact-Info">
                <h2>Get in Touch</h2>
                <ul>
                    <li><strong>Address: </strong><p><?= $user->adress ?></p></li>
                    <li><strong>Email: </strong><p><?= $user->mail ?></p></li>
                    <li><strong>Phone: </strong><p><?= $user->phone ?></p></li>
                </ul>
            </div>

            <form class="Contact-Form" action="index.php" method="POST">
                <input type="text" value="" name="name" placeholder="Enter your name here" class="Form-Name">
                <input type="text" value="" name="mail" placeholder="Enter your e-mail here" class="Form-Mail">
                <textarea type="text" value="" name="message" placeholder="Enter your message here" class="Form-Message"></textarea>

                <button class="Button-Send-Message">
                    <a type="submit" href="">Send Message</a>
                </button>
            </form>
        </div>
    </div>
</div>