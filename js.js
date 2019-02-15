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



//Use this to change "I'm web dev"
let job = "Web Dev";
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
    }, 50);
}

function EraseJob (current) {
    aboutSentence.innerHTML = aboutSentence.innerHTML.substring(0, current);
    profileSentence.innerHTML = profileSentence.innerHTML.substring(0, current);

    if(current == 0)
    {
        job = job == "Web Dev" ? "Game Dev" : "Web Dev";

        setTimeout(()=>{
            DisplayJob(0);
        }, 2000);

        return;
    }
    current--;

    setTimeout(()=>{
        EraseJob(current);
    }, 50);
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

let Skills = document.querySelector("#Skills");
Skills.addEventListener("mouseenter", function(){
    for(index in skillProgressBar)
    {
        skillProgressBar[index].style.width = oldProgressions[index];
    }
});



// Show Services-Box hidden divs