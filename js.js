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
            currentServiceBox.element = null;
        }
    })
});

var hide = document.querySelector(".Service-Hidden")