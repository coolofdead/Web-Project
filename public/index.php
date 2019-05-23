<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Web Project</title>
        <link rel="stylesheet" type="text/css" media="screen" href="css.css">
        <script src="js.js" type="text/javascript" defer></script>
    </head>

    <body>
        <?php
            require_once("../src/summary.php");
        ?>
        <!-- <div id="Summary">
            <img id="Ynov" src="Images\ynov.png" width="140px", height="100px">

            <div id="Links">
                <a id="Sum_Home" href="#Profile">HOME<div class="Summary-FillBar"></div></a>
                <a id="Sum_About" href="#About">ABOUT<div class="Summary-FillBar"></div></a>
                <a id="Sum_Services" href="#Services">SERVICES<div class="Summary-FillBar"></div></a>
                <a id="Sum_Portfoliio" href="#Projects">PORTFOLIO<div class="Summary-FillBar"></div></a>
                <a id="Sum_Contact" href="#Contact">CONTACT<div class="Summary-FillBar"></div></a>
            </div>

            <div id="Social_Media">
                <a href="https://www.facebook.com/thomas.aeria"><img src="Images\facebook.png"></a>
                <a href="https://www.linkedin.com/feed/?trk=onboarding-landing"><img src="Images\linkedin.png"></a>
                <a href="https://twitter.com/?lang=fr"><img src="Images\twitter.png"></a>
                <a href="https://github.com/coolofdead"><img src="Images\git.png"></a>
            </div>
        </div>
        <div id="Bottom_Bar"></div> -->
        
        <div id="Content">
            <img src="Images\work.jpg" class="Background_Image">

            <!-- <div id="Profile">
                <img src="Images\ironman.jpg">  
                <p>Thomas <span>GIOVANNONI</span></p>
                <h2>I'm <strong class="js-overwrite">Web dev</strong></h2>
            </div>
            <div id="About">
                <div class="Content-Container">
                        <h2 class="Content-Title">About me <p>To know more about me</p></h2>
                
                        <div class="Profile-Container">
                            <img id="Profile-picture" src="Images\Dota.png">
                            <div class="Personnal-Info">
                                <h2>I'm Thomas Giovannoni and <span class="js-overwrite">Web Dev</span></h2>
                                <p>Here is a little overview about me, my interests and what i'm doing.</p>
                                <ul class="Info">
                                    <li id="Birthday"><strong>Birthday: </strong>23.11.1998</li>
                                    <li id="City"><strong>City: </strong>Lyon</li>
                                    <li id="Study"><strong>Study: </strong>Ynov</li>
                                    <li id="Phone"><strong>Phone: </strong>06 04 48 77 32</li>
                                    <li id="Age"><strong>Age: </strong>20</li>
                                    <li id="Interests"><strong>Interests: </strong>Drawing, Reading, Warcraft and card games, definitely</li>
                                    <li id="Degree"><strong>Degree: </strong>Bachelor Info</li>
                                    <li id="Mail"><strong>Mail: </strong>thomas.giovannoni@hotmail.fr</li>
                                </ul>
                                <div class="Profile-Buttons">
                                    <div><a href="CV.pdf">Download CV</a></div>
                                    <div><a href="#Contact">Send Message</a></div>
                                </div>
                            </div>
                        </div>
                </div>
            </div> -->

            <!-- <div id="Skills">
                <div class="Content-Container">
                    <div class="Abilities-Title">
                        <h2>
                            Some about my abilities
                        </h2>
                        <p>
                            So here ares my abilities, as a web dev, mostly front end, i'm learning a lot of programming languages. This slide show like my top 4 or what i master the most currently. Obviously i'm always learning new things on every languages and loving learn them. I have some skils in other things than programming but it's mainly my main hobby and playground, i'm open to all new things that happen on this branch and up to learn them all.
                        </p>
                    </div>
                    <div class="Skills-List">
                        <div class="Skills-List-Element">
                            <img src="Images\html.png">
                            <div class="List-Container">
                                <div class="List-Elem-Text">
                                    <p><strong>HTML - </strong> 1 year of experience</p>
                                    <p><strong>90%</strong></p>
                                </div>
        
                                <div class="Skill-ProgressionBar one">
                                    <div class="Skill-ProgressionCurrent" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="Skills-List-Element">
                            <img src="Images\css.png">
                            <div class="List-Container">
                                <div class="List-Elem-Text">
                                    <p><strong>CSS - </strong> 2 year of experience</p>
                                    <p><strong>60%</strong></p>
                                </div>
        
                                <div class="Skill-ProgressionBar two">
                                    <div class="Skill-ProgressionCurrent" style="width: 60%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="Skills-List-Element">
                            <img src="Images\javascript.png">
                            <div class="List-Container">
                                <div class="List-Elem-Text">
                                    <p><strong>JavaScript - </strong> 1 year of experience</p>
                                    <p><strong>70%</strong></p>
                                </div>
        
                                <div class="Skill-ProgressionBar three">
                                    <div class="Skill-ProgressionCurrent" style="width: 70%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="Skills-List-Element">
                            <img src="Images\Csharp.png">
                            <div class="List-Container">
                                <div class="List-Elem-Text">
                                    <p><strong>C# - </strong> 2 year of experience</p>
                                    <p><strong>80%</strong></p>
                                </div>
        
                                <div class="Skill-ProgressionBar four">
                                    <div class="Skill-ProgressionCurrent" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div id="Services">
                <div class="Content-Container">
                    <h2 class="Content-Title">Services <p>See what i can do</p></h2>

                    <div class="Service-Container">
                        <div class="Service-Box Current" style="top:-5%; left:0%">
                            <img src="Images\document.png">
                            <h2 class="Service-Title">Documents</h2>
                            <p>I'm mostly doing some techniqual design document but i can make other types of docs. With one year of experiences at Bellecour Ecole and as a free time game designer, this is my hobby.</p>
                            <div class="Service-Hidden Service-Doc">
                                <img src="Images/Doc.png">
                                <div class="Service-Doc-Text">
                                    <span>Everything you need to know about my docs are shown on these pictures. </span>
                                    <img src="Images/Bubble.png" style="object-fit: contain">
                                </div> 
                            </div>
                        </div>    

                        <div class="Service-Box Current Game" style="top:-5%; left:33%">
                            <img src="Images\game.png">
                            <h2 class="Service-Title">Video games</h2>
                            <p>Use : <strong>"q"</strong> to move left and <strong>"d"</strong> to move right</p>
                            <div class="Service-Hidden Service-Game">
                                <canvas id="Game"></canvas>
                            </div>
                        </div>

                        <div class="Service-Box Current" style="top:-5%; left:66%">
                            <img src="Images\git.png">
                            <h2 class="Service-Title">Git</h2>
                            <p>Some tips and about git, git bash and repo that i learned and used in my projects</p>
                            <div class="Service-Hidden Service-Git">
                                Because of my Game Design year and my Dev year, I had to use a lot git on many projects. I used to use it on my web projects and only with a bash console to learn more about this tool.
                                <p>Commands that i master</p>
                                <ul>
                                    <li>- ls, cd</li>
                                    <li>- git status</li>
                                    <li>- git add</li>
                                    <li>- git commit</li>
                                    <li>- git push</li>
                                    <li>- git pull</li>
                                </ul>
                            </div>
                        </div>  
                    
                        <div class="Service-Box Current" style="top:50%; left:0%">
                            <img src="Images\photoshop.png">
                            <h2 class="Service-Title">Photoshop</h2>
                            <p>During my high school i used to draw a lot, i also made a page on facebook to share my them. This before after show my current skill with photoshop, hope you will like it.</p>
                            <div class="Service-Hidden Service-Photshop">
                                <div class="Photoshop-Before">
                                    <p>Before</p>
                                    <img src="Images/temple.jpg">
                                </div>
                                <div class="Photoshop-After">
                                    <p>After</p>
                                    <img src="Images/temple.png">
                                </div>
                            </div>
                        </div>

                        <div class="Service-Box Current" style="top:50%; left:33%">
                            <img src="Images\smartphone.png">
                            <h2 class="Service-Title">Environement Designer</h2>
                            <p>As a full time developer, I like to make creative stuff. I'm using Starcraft 2 or Unity to let it out and having fun with making map or design.</p>
                            <div class="Service-Hidden Service-Dev">
                                <img src="Images/LD_Forest.jpg">
                                <img src="Images/LD_Winter.jpg">
                            </div>
                        </div>

                        <div class="Service-Box Current" style="top:50%; left:66%">
                            <img src="Images\worldwide.png">
                            <h2 class="Service-Title">Web page</h2>
                            <p>With my classes about web dev at Ynov, I got a chance to train my abilities to make modern and design web page.</p>
                            <div class="Service-Hidden Service-Web">
                                You're navigating on a web page made by myself.
                            </div>
                        </div> 
                    </div>
                </div>
            </div> -->

            <!-- <div id="Projects">
                <div class="Content-Container">
                    <h2 class="Content-Title">Handmade Works <p>Handmade and creative stuff</p></h2>

                    <div class="Project-Container">
                        <button class="Change-Image js-left-arrow"><a>◄</a></button>
                        <img src="Images/flyday.jpg">
                        <button class="Change-Image js-right-arrow"><a>►</a></button>
                    </div>
                </div>
            </div> -->

            <!-- <div id="Contact">
                <div class="Content-Container">
                    <h2 class="Content-Title">Contact me <p>Info and form</p></h2>

                    <div class="Contact-Container">
                        <div class="Contact-Info">
                            <h2>Get in Touch</h2>
                            <ul>
                                <li><strong>Address: </strong><p>14 rue de la république</p></li>
                                <li><strong>Email: </strong><p>thomas.giovannoni@hotmail.fr</p></li>
                                <li><strong>Phone: </strong><p>06 04 48 77 32</p></li>
                            </ul>
                        </div>

                        <div class="Contact-Form">
                            <input type="text" name="name" placeholder="Enter your name here" class="Form-Name"></input>
                            <input type="text" name="mail" placeholder="Enter your e-mail here" class="Form-Mail"></input>
                            <textarea type="text" name="message" placeholder="Enter your message here" class="Form-Message"></textarea>

                            <div class="Button-Send-Message">
                                <a href="">Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </body>
</html>