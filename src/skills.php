<?php
    $request = $connection->prepare("
    SELECT * FROM abilities;
    ");
    $request->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    
    $skills = [];
    foreach($result as $skill)
    {
        $newSkill = [];
        foreach($skill as $key => $value)
        {
            $newSkill[$key] = $value;
        }

        array_push($skills, $newSkill);
    }
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
                                <p><strong>' . $skill["name"] . ' - </strong> ' . $skill["experience"] . ' year of experience</p>
                                <p><strong>' . $skill["percentage"] . '%</strong></p>
                            </div>

                            <div class="Skill-ProgressionBar">
                                <div class="Skill-ProgressionCurrent" style="width: ' . $skill["percentage"] . '%;"></div>
                            </div>
                        </div>
                    </div>');
                }
            ?>
        </div>
    </div>
</div>