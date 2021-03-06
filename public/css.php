html, body {
    height: 100vh;
    width: 100%;

    margin: 0px;
    padding: 0px;

    display: flex;

    font-family: Arial, Helvetica, sans-serif;
}

h1, h2, h3 {
    margin: 0;
}

#Bottom_Bar {
    background: #1a283d;
    position: absolute;
    
    width: 100%;
    height: 5%;
    top: 95vh;
}

#Summary {
    display: flex;
    flex-direction: column;
    justify-content: space-around;

    background: #041230;
    position: absolute;
    
    width: 18%;
    height: 95%;
}

#Summary #Ynov {
    width: 80%;
    height: 16%;

    padding: 10% 10% 10% 10%;
    align-self: center;

    filter: invert(1);
}

#Summary #Links {
    flex: 6;

    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: flex-start;

    padding-left: 20%;
    padding-bottom: 10%;
    padding-top: 10%;
    border-top: 1.5px solid #2d3953;

    color: white;
    font-family: "Grill Sans", sans-serif;
    font-size: 18px;
    letter-spacing: 1px;
    line-height: 1px;
    font-weight: 500;

    transform: scaleY(0.93);
}

#Summary #Links > a {
    text-decoration: none;
    color: white;
}

#Summary #Links > a {
    display: flex;

    width: 90%;
    height: 1%;
}

#Summary #Links a > div {
    height: 80%;
    width: 0%; /* max width: 20% */

    background: rgb(226, 147, 0);

    margin-left: 5%;

    transition: all 0.4s;
}

#Summary #Links > a:active, #Summary #Links > a:visited {
    color: white;
}
 
#Summary #Links > a:hover {
    color: orange;
}

#Summary #Social_Media {
    height: 20%;
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}

#Summary #Social_Media a > img {
    height: 18px;
    width: 18px;

    filter: invert(1);

    transition: all ease-in 0.1s;
}

#Summary #Social_Media a:hover > img {
    transform: translateY(-6px);
}

#Content {
    position: absolute;
    width: 82%;
    height: 95%;

    left: 18%;

    flex-direction: column;

    overflow-y: scroll;

    scroll-behavior: smooth;
}

#Content > * {
    width: 100%;
    height: 100%;
}

ul {
    list-style: none;
    margin: 0%;
    padding: 0%;
}

.Content-Container {
    width: 90%;
    height: 90%;
}

#Content #About, #Content #Skills, #Content #Services, #Content #Experience, #Content #Projects, #Content #Contact {
    display: flex;
    justify-content: center;
    align-items: center;
}

.Content-Title {
    height: 12%;
    width: 100%;

    text-transform: uppercase;
    font-size: 50px;
    font-family: Arial, Helvetica, sans-serif;

    letter-spacing: 1px;

    border-left: 6px solid rgb(226, 147, 0);
    margin-bottom: 4%;
    
    padding-left: 2%;

    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.Content-Title p {
    text-transform: initial;
    font-size: 18px;
    color: rgba(51, 51, 51, 0.815);

    margin: 0%;

    font-weight: normal;
}

#Content > .Background_Image {
    position: absolute;
    z-index: -1;
}

#Content #Profile {
    background: linear-gradient(210deg, #f3b96d71, transparent);

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

#Profile img {
    width: 200px;
    height: 200px;
    border: 10px solid rgba(196, 196, 196, 0.363);
    border-radius: 50%;
    object-fit: cover;
}

#Profile p {
    text-transform: uppercase;
    font-size: 50px;
    font-family: Arial, Helvetica, sans-serif;
    letter-spacing: 1px;
    font-weight: 200;

    color: white;
}

#Profile p span {
    color: orange;
}

#Profile h2 {
    color: rgba(255, 255, 255, 0.89);
    
    font-family: fantasy;
    font-weight: 600;
    letter-spacing: 0.7px;

    line-height: 2px;
    font-size: 30px;

    transform: scaleY(1.05);
}

#Profile h2 strong {
    color: rgba(255, 255, 255, 0.815);
}

#Content #About, #Content #Services, #Content #Contact {
    background: rgba(110, 110, 110, 0.06);
}

#Content #About .Profile-Container {
    height: 90%;

    display: flex;
}

#About #Profile-picture {
    width: 400px;
    height: 275px;

    border: 4px solid rgba(160, 160, 0, 0.767);

    align-self: flex-start;
}

#About .Personnal-Info {
    padding: 0% 6% 0% 6%;
    height: 90%;
}

#About .Personnal-Info h2 {
    font-family: fantasy;
    font-weight: 600;

    font-size: 22px;
    letter-spacing: 1px;
}

#About .Personnal-Info h2 span {
    color: orange;
}

#About .Personnal-Info p {
    font-size: 16px;
    line-height: 30px;

    color: rgba(0, 0, 0, 0.7);
    margin-bottom: 5%;
}

#About .Personnal-Info .Info {
    display: flex;
    flex-wrap: wrap;
    
    letter-spacing: 1px;
    font-size: 14px;

    height: 34%;

    margin-bottom: 2%;
}

#About .Personnal-Info .Info strong {
    color: rgb(212, 138, 0);
}

#About .Personnal-Info .Info li {
    width: 50%;

    margin-bottom: 2%;
}

#About .Personnal-Info .Profile-Buttons div, .Profile-Buttons a {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;

    width: 180px;
    height: 50px;

    background: rgb(250, 157, 64);

    color: white;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 600;
    font-size: 14;

    letter-spacing: 1px;

    border-radius: 3%;
    text-decoration: none;

    transition: all 0.3s ease-out;
}

.Profile-Buttons a:hover {
    background: #283550;
}

#About .Personnal-Info .Profile-Buttons {
    height: 20%;

    display: flex;
    justify-content: space-between;
}

#Skills {
    height: 75%;
}

#Skills .Content-Container{
    display: flex;
    align-items: center;

    padding-top: 5%;
}

#Skills .Abilities-Title, #Skills .Skills-List {
    height: 100%;
    width: 100%;
}

#Skills .Abilities-Title h2 {
    font-family: fantasy;
    font-weight: normal;
    font-size: 24px;
    letter-spacing: 2px;
}

#Skills .Abilities-Title p {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 30px;

    color: rgba(0, 0, 0, 0.7);

    text-align: justify;
    width: 80%;
}

#Skills .Skills-List {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

#Skills .Skills-List-Element {
    height: 15%;
    width: 100%;

    display: flex;
    flex-direction: row;
}

#Skills .Skills-List-Element img {
    width: 20px;
    height: 20px;

    margin-right: 3%;
    align-self: flex-start;
}

#Skills .Skills-List-Element .List-Container {
    width: 100%;
    height: 50%;

    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

#Skills .Skills-List-Element .List-Elem-Text {
    display: flex;
    justify-content: space-between;
}

#Skills .Skills-List-Element .List-Elem-Text p {
    margin: 0%;
}

#Skills .Skills-List-Element .Skill-ProgressionBar {
    width: 100%;
    height: 20%;
    border-radius: 50px;
}

#Skills .Skills-List-Element .Skill-ProgressionCurrent {
    width: 70%;
    height: 100%;
    border-radius: 50px;

    transition: all 1.3s ease-in-out;
}

<?php
    $request = $connection->prepare("
    SELECT front_color, back_color FROM abilities;
    ");
    $request->execute();
    $styles = $request->fetchAll(PDO::FETCH_ASSOC);
    $index = 0;
    foreach($styles as $skill)
    {
        $index++;
        echo("
        #Skills .Skills-List-Element:nth-child(" . $index . ") .Skill-ProgressionBar {
            background: " . $skill['back_color'] . ";
        }
        
        #Skills .Skills-List-Element:nth-child(" . $index . ") .Skill-ProgressionBar .Skill-ProgressionCurrent {
            background: " . $skill['front_color'] . ";
        }
        ");
    }
?>

#Services .Service-Container {
    height: 80%;
    width: 100%;

    display: flex;
    flex-flow: wrap;

    position: relative;
}

#Services .Service-Container .Service-Box {
    height: 40%;
    width: 25%;
    margin: 1%;

    background: white;
    filter: drop-shadow(0 0 12px rgba(255, 195, 117, 0.164));

    padding: 2%;

    overflow: hidden;

    transition: all 0.15s ease-in-out;
    position: absolute;
}

#Services .Service-Container .Service-Box .Service-Hidden {
    display: none;

    width: 100%;
    height: 100%;
}

#Services .Service-Container .Service-Box.Actif {
    cursor: pointer;
}

#Services .Service-Container .Service-Box.Actif img {
    height: 80px;
    width: 80px;

    margin-bottom: 3%;
}

#Services .Service-Container .Service-Box.Current:hover{
    cursor: pointer;
    transform: scale(1.1)
}

#Services .Service-Container .Service-Box img {
    height: 40px;
    width: 40px;

    margin-bottom: 6%;
    transition: all 0.4s ease-out;
}

#Services .Service-Container .Service-Box h2 {
    font-weight: normal;
    font-size: 22px;
    font-weight: bold;

    font-family: Arial, Helvetica, sans-serif;
}

#Services .Service-Container .Service-Box p, #Services .Service-Doc-Text, #Services .Service-Git, #Services .Service-Web {
    letter-spacing: 2px;
    line-height: 20px;

    font-size: 13px;
    color: rgba(32, 32, 32, 0.877);
}

#Services .Service-Doc {
    display: flex;

    height: 80%;
    width: 100%;
}

#Services .Service-Doc img {
    height: 100% !important;
    width: 60% !important;

    margin: 0% !important;
}

#Services .Service-Doc .Service-Doc-Text img {
    height: 80% !important;
    width: 100% !important;

    padding-top: 2%;
}

#Services .Service-Photshop {
    display: flex;
    height: 70%;
    width: 100%;
}

#Services .Service-Photshop > * {
    display: flex;
    height: 100%;
    width: 50%;

    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#Services .Service-Photshop .Photoshop-Before {
    border-right: 2px solid rgba(64, 63, 122, 0.774);
}

#Services .Service-Photshop img {
    height: 90% !important;
    width: 90% !important;
}

#Services .Service-Game {
    height: 60%;
}

#Services .Service-Game > canvas {
    width: 100%;
    height: 100%;
}

#Services .Service-Dev {
    display: flex;

    height: 80%;
    width: 100%;

    justify-content: space-evenly;
}

#Services .Service-Dev > img {
    height: 80% !important;
    width: 48% !important;

    padding: 2%;
}

#Services .Service-Dev img:first-of-type {
    border-right: 2px solid rgba(64, 63, 122, 0.774);
}

#Services .Service-Git {
    height: 70%;
}

#Services .Service-Git ul {
    display: flex;
    flex-flow: wrap;

    height: 50%;

    padding-top: 2%;
}

#Services .Service-Git ul > li {
    width: 50%;
}

#Projects .Project-Container {
    width: 99%;
    height: 80%;

    display: flex;
    align-items: center;
}

#Projects .Project-Container img {
    object-fit: contain;

    padding: 5%;

    width: 80%;
    height: 100%;
}

#Projects .Project-Container .Change-Image {
    width: 40px;
    height: 40px;

    content: '\f104';

    border-radius: 5px;
    background: rgb(255, 162, 74);

    display: flex;
    justify-content: center;
    align-items: center;

    border: none;
    text-transform: none;

    outline: none;

    cursor: pointer;
}

#Projects .Project-Container .Change-Image a {
    text-decoration: none;
    font-size: 32px;

    color: rgba(255, 255, 255, 0.555);

    transition: all 0.4s ease;
}

#Projects .Project-Container .Change-Image:active, #Projects .Project-Container .Change-Image:visited {
    color: rgba(255, 255, 255, 0.555);
}
 
#Projects .Project-Container .Change-Image:hover > a {
    color: white;
}

#Contact .Contact-Container {
    width: 100%;
    height: 80%;

    display: flex;
}

#Contact .Contact-Container .Contact-Info {
    height: 100%;
    width: 40%;

    display: flex;
    flex-direction: column;
    justify-content: flex-start;

    margin-top: 5%;
}

#Contact .Contact-Container .Contact-Info h2 {
    margin-bottom: 5%;

    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 30px;
    letter-spacing: 1.3px;
    font-weight: normal;
}

#Contact .Contact-Container .Contact-Info ul {
    width: 100%;
    height: 30%;
    
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

#Contact .Contact-Container .Contact-Info ul li {
    letter-spacing: 1px;
    line-height: 10px;

    font-size: 14px;
    letter-spacing: 1.4px;

    font-family: Verdana, sans-serif;
}

#Contact .Contact-Container .Contact-Form {
    height: 100%;
    width: 60%;

    display: flex;
    flex-direction: column;
    justify-content: center;
}

#Contact .Contact-Container .Contact-Form input {
    margin-bottom: 2%;

    width: 100%;
    height: 5%;

    font-size: 15px;

    transform: scaleY(0.99);

    padding: 2% 0% 2% 0%;

    border: 0px;
    border-bottom: 1px solid #2d3953;

    background: transparent;

    color: #304269;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

#Contact .Contact-Container .Contact-Form textarea {
    margin-bottom: 4%;

    width: 100%;
    height: 40%;

    border: 0px;
    border-bottom: 1px solid #2d3953;

    background: transparent;

    padding-top: 2%;

    color: #2d3953d3;
    opacity: 1;

    font-size: 14px;

    letter-spacing: 1.1px;
}

#Contact .Contact-Container .Contact-Form .Button-Send-Message {
    width: 28%;
    height: 10%;

    border: none;

    border-radius: 3px;

    background: rgb(250, 157, 64);
    
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease-out;
}

#Contact .Contact-Container .Contact-Form .Button-Send-Message a {
    color: white;

    text-decoration: none;
    font-weight: 600;

    letter-spacing: 1.5px;
    font-size: 14px;
}

#Contact .Contact-Container .Contact-Form .Button-Send-Message:hover {
    background: #283550;
    cursor: pointer;
}

@media screen and (max-width: 900px) and (min-width: 600px) {
    #Summary {
        width: 100vw;
        height: 10vh;
        
        flex-direction: row;
        z-index: 1;
    }

    #Social_Media {
        display: none !important;
    }

    #Summary #Ynov {
        width: auto;
        height: 50%;

        margin-left: 1em;

        padding: 0%;
    }

    #Summary #Links {
        padding: 0%;

        flex-direction: row;

        align-items: center;
    }
    
    #Summary #Links > a {
        width: auto;
    }

    #Content {
        width: 100vw;
        left: 0%;
        height: 85vh;
        top: 10vh;
    }

    #About .Profile-Container {
        flex-direction: column;
    }

    #About .Personnal-Info {
        padding-top: 5%;
    }

    #About .Personnal-Info .Info {
        margin-bottom: 5%;
    }

    #About #Profile-picture {
        width: 200px;
    }

    #Services .Service-Container {
        top: 3em;
    }

    #Services .Service-Container .Service-Box {
        display: flex;
        flex-direction: column;

        height: 35%;
    }
    
    #Services .Service-Container .Service-Box p {
        overflow: hidden;
    }

    #Contact .Contact-Container .Contact-Info ul {
        height: 40%;
    }
    
    #Contact .Contact-Container .Contact-Info ul li p {
        width: 90%;
        line-height: normal;
        word-break: break-all;
    }

    #Contact .Contact-Container .Contact-Form .Button-Send-Message {
        width: 40%;
    }
}

@media screen and (min-width: 400px) and (max-width: 600px) {
    #About .Personnal-Info h2 {
        height: 5vh; /* À cause de l'animation js, ça crée un retour chariot dérengeant pour l'UX */
    }
}

@media screen and (max-width: 599px) {
    #Content {
        height: 100vh;
    }

    #Bottom_Bar {
        display: none;
    }

    #Summary {
        display: none;
    }

    #Content {
        width: 100%;
        left: 0%;
    }

    #Projects .Content-Title, #Contact .Content-Title {
        height: 15%;
    }

    #Content > * {
        height: 100vh;
    }

    #Profile p {
        text-align: center;
    }

    #About {
        height: 110vh;
    }

    #About .Profile-Container {
        flex-direction: column;
    }

    #About #Profile-picture {
        width: 50vw;
        height: auto;
        
        margin-bottom: 2vh;
        margin-top: 2vh;
    }

    #About .Personnal-Info .Profile-Buttons {
        justify-content: center;
        align-items: flex-end;

        height: 25%;
    }

    #About .Personnal-Info .Info li {
        word-break: break-all;
        line-height: 1.5em;
    }

    #About .Personnal-Info .Profile-Buttons div:nth-child(2) {
        display: none;
    }

    #Skills {
        height: 70vh;
    }

    #Skills .Content-Container {
        flex-direction: column;
    }

    #Skills .Content-Container .Abilities-Title {
        height: auto;
    }

    #Skills .Content-Container .Abilities-Title p {
        display: none;
    }
    
    #Services .Service-Container {
        flex-flow: row wrap;
        justify-content: center;

        overflow: scroll;
    }
    
    #Services .Service-Container .Service-Box {
        filter: none;
        height: 40%;
        width: 80%;

        margin-bottom: 5%;

        position: static;
    }

    #Projects .Project-Container {
        position: relative;
        margin-top: 1.5em;
    }

    #Projects .Project-Container img {
        width: 100%;
        height: 80%;
        padding: 0%;

        object-fit: cover;
    }

    #Projects .Project-Container .Change-Image {
        position: absolute;
        top: 70vh;
    }

    #Projects .Project-Container .Change-Image:nth-of-type(2) {
        left: 78vw;
    }

    #Contact .Contact-Container .Contact-Info {
        display: none;
    }

    #Contact .Contact-Container .Contact-Form {
        width: 100%;
    }

    #Contact .Contact-Container .Contact-Form .Button-Send-Message {
        width: 45%;
    }
}