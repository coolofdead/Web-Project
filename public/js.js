window.addEventListener("load", function(){
    setTimeout(function(){
        if(document.body.childNodes[7] != undefined && document.body.childNodes[8] != undefined)
        {
            document.body.childNodes[7].remove();
            document.body.childNodes[8].remove();
        }
    }, 1000);
})


// Buttons event on the portfolio slide
const leftArrow = document.querySelector(".js-left-arrow");
const rightArrow = document.querySelector(".js-right-arrow");

const projectImage = document.querySelector("#Projects img");

let projectUrl = ["Images/flyday.jpg", "Images/Maze.png", "Images/Pathfinder.png", "Images/flower.jpg"];
let urlIndex = 0;

for(arrow of [leftArrow, rightArrow])
{
    arrow.addEventListener("click", function(){
        ChangePortfolioImage(this);
    });
}

function ChangePortfolioImage(arrow) {
    if(arrow === rightArrow)
    {
        urlIndex = urlIndex < projectUrl.length -1 ? ++urlIndex : 0;
    }
    if(arrow === leftArrow)
    {
        urlIndex = urlIndex > 0 ? --urlIndex : projectUrl.length-1;
    }

    projectImage.src = projectUrl[urlIndex];
}



//Use this to change "I'm web dev"
let job = "a Web Dev";
const profileSentence = document.querySelectorAll(".js-overwrite")[0];
const aboutSentence = document.querySelectorAll(".js-overwrite")[1];
aboutSentence.innerText = "";
profileSentence.innerHTML = "";

function DisplayJob (current) {
    aboutSentence.innerHTML += job[current];
    profileSentence.innerHTML += job[current];

    if(current >= job.length - 1)
    {
        setTimeout(()=>{
            EraseJob(current);
        }, 2000)

        return;
    }

    current++;

    setTimeout(()=>{
        DisplayJob(current);
    }, 40);
}

function EraseJob (current) {
    aboutSentence.innerHTML = aboutSentence.innerHTML.substring(0, current);
    profileSentence.innerHTML = profileSentence.innerHTML.substring(0, current);

    if(current == 0)
    {
        job = job == "a Web Dev" ? "a Game Dev" : "a Web Dev";

        setTimeout(()=>{
            DisplayJob(0);
        }, 2000);

        return;
    }
    current--;

    setTimeout(()=>{
        EraseJob(current);
    }, 40);
}

DisplayJob(0)



// Summary Buttons orange bar effect
const summaryLinks = document.querySelectorAll("#Links a");
for(link of summaryLinks)
{
    link.addEventListener("mouseenter", function() {
        this.childNodes[1].style.width = "20%";
    });

    link.addEventListener("mouseleave", function() {
        this.childNodes[1].style.width = "0%";
    });
}



// Skills progress bar effect
const skillProgressBar = document.querySelectorAll(".Skill-ProgressionCurrent");
let oldProgressions = [];

for(progression of skillProgressBar)
{
    oldProgressions.push(progression.style.width);
    progression.style.width = "0%";
}
console.log(skillProgressBar)
let Skills = document.querySelector("#Skills");
Skills.addEventListener("mouseenter", function(){
    for(index in oldProgressions)
    {
        skillProgressBar[index].style.width = oldProgressions[index];
    }
});




// Control Services-Box & add effect when "open"
var servicesBoxes = document.querySelectorAll(".Service-Box");
let currentServiceBox = {width: 0, height: 0, top: 0, left: 0, element: null};

servicesBoxes.forEach(function(box){
    box.addEventListener("click", function() {
        if(currentServiceBox.element == null)
        {
            currentServiceBox.top = this.style.top;
            currentServiceBox.left = this.style.left;
            currentServiceBox.height = this.style.height;
            currentServiceBox.width = this.style.width;

            currentServiceBox.element = this;
    
            this.style.height = "100%";
            this.style.width = "95%";
    
            this.style.zIndex = "1";
    
            this.style.top = "-5%";
            this.style.left = "0%";

            this.classList.remove("Current")
            this.classList.add("Actif")

            this.childNodes[7].classList.remove("Service-Hidden")

            if(this.classList.contains("Game"))
            {
                __InitGame__(this);
            }
        }
        else
        {
            if(this != currentServiceBox.element)
            {
                return;
            }

            this.style.height = currentServiceBox.height;
            this.style.width = currentServiceBox.width;
    
            this.style.zIndex = "0";
    
            this.style.top = currentServiceBox.top;
            this.style.left = currentServiceBox.left;

            this.classList.add("Current")
            this.classList.remove("Actif")

            this.childNodes[7].classList.add("Service-Hidden")
            currentServiceBox.element = null;
        }
    })
});



var canvas = document.querySelector("#Game");

var gameWidth = canvas.parentElement.parentElement.parentElement.offsetWidth;
var gameHeight = canvas.parentElement.parentElement.parentElement.offsetHeight * 0.8;

var lineBlocks = 8;
var colonneBlocks = 4;

var rightScreenOffset; //Egale a 80% de la largeur l'ecran (divisier par deux pour avoir le right screen offset)
var topScreenOffset;

var blockSpacingWidth; //Pourcentage d'offset entre les blocks en pixel
var blockSpacingHeight;

var BlockData = {
    blockColors : ["yellow", "yellow", "orange", "red"],
    blockLifes : [1, 1, 2, 3]
}

var blocks = [];

var SpaceBar = {
    xPos : 1, 
    yPos : 1,
    speed : 40,

    width : gameWidth * 12 / 100,
    height : gameHeight * 10 / 100,

    Move : function (key)
    {
        console.log(key);
        if(key.key == "d" && (this.xPos + this.speed) + this.width < canvas.width)
        {
            this.xPos += this.speed;
        }

        if(key.key == "q" && this.xPos - this.speed > 0)
        {
            this.xPos -= this.speed;
        }
    },

    SetPos : function ()
    {
        this.xPos = gameWidth / 2 - this.width / 2;
        this.yPos = gameHeight - (gameHeight * 5 /100);
    }
};

var Ball = {
    xPos : 1,
    yPos : 1,

    speed : 4,

    radius : gameWidth * 1.5 / 100,
    color : "grey",

    velocity : {"x" : 0, "y" : 0},

    SetPos : function ()
    {
        this.xPos = SpaceBar.xPos + SpaceBar.width / 2;
        this.yPos = SpaceBar.yPos - this.radius * 1.1; // fois 1.1 pour avoir un petit offset
        this.velocity.x = 0;
        this.velocity.y = this.speed * -1;
    },

    Move : function ()
    {
        Ball.xPos += Ball.velocity.x;
        Ball.yPos += Ball.velocity.y;
    }
};

class BlockConstructor
{
    constructor (life, color, rowPos, columnPos, blockWidth, blockHeight)
    {   
        this.life = life;
        this.color = color;

        this.rowPos = rowPos;
        this.columnPos = columnPos;
        this.blockWidth = blockWidth;
        this.blockHeight = blockHeight;
    }
}

let moveInterval = null;
let collisionCheckInterval = null;
let drawBallInterval = null;
let setup = false;
var __InitGame__ = function (w)
{
    clearInterval(moveInterval);
    clearInterval(collisionCheckInterval);
    clearInterval(drawBallInterval);

    ResizeGameScreen(w);
    CreateBlocks();

    SpaceBar.SetPos();
    Ball.SetPos();

    if(!setup)
    {
        window.addEventListener("keydown", function(event){
            SpaceBar.Move(event);
        });
    }

    moveInterval = setInterval(Ball.Move, 15);
    collisionCheckInterval = setInterval(CollisionCheck, 15);
    drawBallInterval = setInterval(DrawBall, 15);

    setup = true;
}

var CoutingBlocks = function ()
{
    if(blocks.length <= 0)
    {
        alert("you win sorry");
    }
}

var CreateBlocks = function ()
{
    let blockWidth = (gameWidth - rightScreenOffset - (blockSpacingWidth * (lineBlocks - 1))) / lineBlocks;
    let blockHeight = ((gameHeight / 2) - topScreenOffset - (blockSpacingHeight * colonneBlocks)) / colonneBlocks;

    for(var column = 1; column <= colonneBlocks; column++)
    {
        for(var row = 1; row <= lineBlocks; row++)
        {
            var x = (rightScreenOffset / 2) + (blockSpacingWidth * (row - 1)) + (blockWidth * (row - 1)); 
            var y = (blockSpacingWidth * column) + (blockHeight * (column - 1));

            var newBlock = new BlockConstructor(BlockData.blockLifes[colonneBlocks - column], BlockData.blockColors[colonneBlocks - column], x, y, blockWidth, blockHeight);
            blocks.push(newBlock);
        }
    }
}

var ResizeGameScreen = function (window)
{
    canvas.width = window.parentElement.offsetWidth;
    canvas.height = window.parentElement.offsetHeight * 0.8;

    rightScreenOffset = window.parentElement.offsetWidth * 5 / 100; //Egale a 80% de la largeur l'ecran (divisier par deux pour avoir le right screen offset)
    topScreenOffset = window.parentElement.offsetHeight * 5 / 100;

    blockSpacingWidth = (0.01 * (window.parentElement.offsetWidth - rightScreenOffset)); //Pourcentage d'offset entre les blocks en pixel
    blockSpacingHeight = (0.06 * window.parentElement.offsetHeight / 2 );

    gameWidth = window.parentElement.offsetWidth;
    gameHeight = window.parentElement.offsetHeight * 0.8;
}

var DrawBall = function ()
{
    var context = canvas.getContext("2d");

    context.clearRect(0, 0, canvas.width, canvas.height);
    DrawBlocks();
    DrawSpaceBar();

    context.strokeStyle = Ball.color;
    context.fillStyle = Ball.color;

    context.beginPath();
    context.arc(Ball.xPos, Ball.yPos, Ball.radius, 0, 360);
    context.fill();
    context.stroke();
}

var DrawSpaceBar = function ()
{
    var context = canvas.getContext("2d");

    context.fillStyle = "black";
    context.fillRect(SpaceBar.xPos, SpaceBar.yPos, SpaceBar.width, SpaceBar.height);
}

var DrawBlocks = function ()
{
    var context = canvas.getContext("2d");
    //Clear canvas
    context.clearRect(0, 0, canvas.width, canvas.height);
    
    //Draw Blocks
    blocks.forEach(function (block) {
        context.fillStyle = block.color;
        context.fillRect(block.rowPos, block.columnPos, block.blockWidth, block.blockHeight);
    });
}

var CollisionCheck = function ()
{
    class nBlock {
        constructor (dist, block) {
            this.dist = dist;
            this.block = block;
        }
    }
    class Vector2 {
        constructor (x, y) {
            this.x = x;
            this.y = y;
        }

        Normalised () {
            if(this.x > 1){
                this.x = 1;
            } else if (this.x < -1){
                this.x = -1;
            }

            if(this.y > 1){
                this.y = 1;
            } else if (this.y < -1){
                this.y = -1;
            }
        }
    }
    var nearestBlocks = [new nBlock(-1, null), new nBlock(-1, null), new nBlock(-1, null)];

    blocks.forEach(function (block){
        var dir = [(block.rowPos + block.blockWidth / 2) - Ball.xPos, (block.columnPos + block.blockHeight) - Ball.yPos];
        dir[0] = Math.pow(dir[0], 2);
        dir[1] = Math.pow(dir[1], 2);

        var dist = dir[0] + dir[1];

        var isNearest = false;
        nearestBlocks.sort();
        nearestBlocks.forEach(function (b, index) {
            if (!isNearest && dist < b.dist || b.dist == -1)
            {
                nearestBlocks[index].dist = dist;
                nearestBlocks[index].block = block;
                isNearest = true;
            }
        });
    });
    nearestBlocks.forEach(function (nBlock) {

        if(nBlock.block != null)
        {
            var points = [
                new Vector2(nBlock.block.rowPos, nBlock.block.columnPos), 
                new Vector2(nBlock.block.rowPos + nBlock.block.blockWidth, nBlock.block.columnPos),
                new Vector2(nBlock.block.rowPos, nBlock.block.columnPos + nBlock.block.blockHeight),
                new Vector2(nBlock.block.rowPos + nBlock.block.blockWidth, nBlock.block.columnPos + nBlock.block.blockHeight),
                new Vector2(nBlock.block.rowPos + nBlock.block.blockWidth / 2, nBlock.block.columnPos + nBlock.block.blockHeight / 2)
            ];    
        }

        var collided = false;
        points.forEach(point => {
            var dir = new Vector2(point.x - Ball.xPos, point.y - Ball.yPos);
            dir.Normalised();

            var collPos = new Vector2(Ball.xPos + dir.x * Ball.radius * 0.9, Ball.yPos + dir.y * Ball.radius * 0.9);
            if(collPos.x >= nBlock.block.rowPos && collPos.x <= nBlock.block.rowPos + nBlock.block.blockWidth
                && collPos.y >= nBlock.block.columnPos && collPos.y <= nBlock.block.columnPos + nBlock.block.blockHeight)
                {
                    //Collision avec ce block
                    if(!collided)
                    {
                        nBlock.block.life--;
                        if(nBlock.block.life <= 0)
                        {
                            var index = blocks.findIndex(b => b.rowPos == nBlock.block.rowPos && b.columnPos == nBlock.block.columnPos);
                            blocks.splice(index, 1);
                        }
                        collided = true;

                        //Change Ball velocity
                        dir.x *= -1;
                        dir.y *= -1;

                        Ball.velocity.x = dir.x * Ball.speed;
                        Ball.velocity.y = dir.y * Ball.speed;
                    }
                }
            });
        });

    // Ball and walls (top left bottom)
    if(Ball.xPos + Ball.radius  >= canvas.width || Ball.xPos - Ball.radius <= 0)
    {
        Ball.velocity.x *= -1;
    }
    if(Ball.yPos - Ball.radius <= 0)
    {
        Ball.velocity.y *= -1;
    }
    if(Ball.yPos - Ball.radius * 2 > SpaceBar.yPos)
    {
        // alert("Close and open to restart");
    }
    
    // Check colision boule - blocks
    var dir = [
        new Vector2(SpaceBar.xPos - Ball.xPos, SpaceBar.yPos - Ball.yPos),
        new Vector2(SpaceBar.xPos + SpaceBar.width - Ball.xPos, SpaceBar.yPos - Ball.yPos),
        new Vector2(SpaceBar.xPos - Ball.xPos, SpaceBar.yPos + SpaceBar.height - Ball.yPos),
        new Vector2(SpaceBar.xPos + SpaceBar.width - Ball.xPos, SpaceBar.yPos + SpaceBar.height - Ball.yPos),
        new Vector2(SpaceBar.xPos + SpaceBar.width / 2 - Ball.xPos, SpaceBar.yPos + SpaceBar.height / 2 - Ball.yPos)
    ];

    var collided = false;
    dir.forEach(function (e) {
        e.Normalised();

        var pos = new Vector2(Ball.xPos + e.x * Ball.radius * 0.9, Ball.yPos + e.y * Ball.radius * 0.9);
        if(!collided)
        {
            if(pos.x >= SpaceBar.xPos && pos.x <= SpaceBar.xPos + SpaceBar.width
                && pos.y >= SpaceBar.yPos && pos.y <= SpaceBar.yPos + SpaceBar.height)
                {
                    collided = true;

                    Ball.velocity.y *= -1;

                    // Modify dir
                    var newDir = (SpaceBar.xPos - pos.x);
                    if(newDir < -130 || newDir > -40)
                    {
                        // Ball.velocity.x *= -1;
                    }
                }
        }
    });
}