<?php
    $skills = [
        ["name" => "HTML", "pourcentage" => 90, "year_experience" => 1, "icon" => "html.png"],
        ["name" => "CSS", "pourcentage" => 80, "year_experience" => 2, "icon" => "css.png"],
        ["name" => "JavaScript", "pourcentage" => 90, "year_experience" => 2, "icon" => "javascript.png"],
        ["name" => "C#", "pourcentage" => 90, "year_experience" => 2, "icon" => "Csharp.png"],        
        ["name" => "Php", "pourcentage" => 60, "year_experience" => 1, "icon" => "php.png"]       
    ];
?>

<div id="Skills">
    <div class="Content-Container">
        <div class="Abilities-Title">
            <h2>
                About my abilities
            </h2>
            <p>
                So here are my abilities, as a web dev, mostly front end, i'm learning a lot of programming languages. This slide show my top 4 or what i master the most currently. Obviously i'm always learning new things on every languages and love learning them. I have some skills in other things than programming but it's my main hobby and playground, i'm open to all new things that happen on this branch and up to learn them all.
            </p>
        </div>

        <div class="Skills-List">
            <?php
                foreach($skills as $skill)
                {
                    print('<div class="Skills-List-Element">
                        <img src="Images\\' . $skill["icon"] .'">
                        <div class="List-Container">
                            <div class="List-Elem-Text">
                                <p><strong>' . $skill["name"] . ' - </strong> ' . $skill["year_experience"] . ' year of experience</p>
                                <p><strong>' . $skill["pourcentage"] . '%</strong></p>
                            </div>

                            <div class="Skill-ProgressionBar">
                                <div class="Skill-ProgressionCurrent" style="width: ' . $skill["pourcentage"] . '%;"></div>
                            </div>
                        </div>
                    </div>');
                }
            ?>
        </div>
    </div>
</div>