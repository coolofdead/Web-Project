<?php
    require_once("../src/user.php");
?>

<div id="About">
    <div class="Content-Container">
            <h2 class="Content-Title">About me <p>To know more about me</p></h2>
    
            <div class="Profile-Container">
                <img id="Profile-picture" src="Images\Dota.png">
                <div class="Personnal-Info">
                    <h2>I'm
                    <?php print $user->name . " " . $user->lastname; ?>
                     and <span class="js-overwrite"><?php print $user->job; ?></span>
                     </h2>
                    <p>Here is a little overview about me, my interests and what i'm doing.</p>
                    <ul class="Info">
                        <li id="Birthday"><strong>Birthday: </strong><?php print $user->birthday ?></li>
                        <li id="City"><strong>City: </strong><?php print $user->city ?></li>
                        <li id="Study"><strong>Study: </strong><?php print $user->study ?></li>
                        <li id="Phone"><strong>Phone: </strong><?php print $user->phone ?></li>
                        <li id="Age"><strong>Age: </strong><?php print $user->age ?></li>
                        <li id="Interests"><strong>Interests: </strong>
                        <?php
                            foreach($user->interests as $interest) 
                                print $interest . "\n"
                        ?>
                        </li>
                        <li id="Degree"><strong>Degree: </strong><?php print $user->degree ?></li>
                        <li id="Mail"><strong>Mail: </strong><?php print $user->mail ?></li>
                    </ul>
                    <div class="Profile-Buttons">
                        <div><a href="CV.pdf">Download CV</a></div>
                        <div><a href="#Contact">Send Message</a></div>
                    </div>
                </div>
            </div>
    </div>
</div>