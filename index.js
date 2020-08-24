var numberofDrumButtons = document.querySelectorAll(".drum").length;


/* This is for detecting which drum is clicked */

for(var i=0;i<numberofDrumButtons ;i++)
{
    document.querySelectorAll(".drum")[i].addEventListener("click",function()
    {
        var button = this.innerHTML ;
        makesound(button);
        buttonAnimation(button);
    } );
    
}
/* This is for detecting which key of keyboard is pressed */
    document.addEventListener("keypress",function(event){
        makesound(event.key) ;
        buttonAnimation(event.key);
    });

/* Function to play a sound use of-- var audio = new Audio(url); audio object to play music */


function makesound(key){
    switch (key) {
        case 'w':
            var audio = new Audio('sounds/crash.mp3');
            audio.play();
        break;
        case 'a':
            var audio = new Audio('sounds/kick-bass.mp3');
            audio.play();
        break;
        case 's':
            var audio = new Audio('sounds/snare.mp3');
            audio.play();
        break;
        case 'd':
            var audio = new Audio('sounds/tom-4.mp3');
            audio.play();
        break;
        case 'j':
            var audio = new Audio('sounds/tom-3.mp3');
            audio.play();
        break;
        case 'k':
            var audio = new Audio('sounds/tom-2.mp3');
            audio.play();
        break;
        case 'l':
            var audio = new Audio('sounds/tom-1.mp3');
            audio.play();
        break;
    
        default:
            console.log(innerHTML);
        break;
    }

}


/* For button animation when clicked  use of ---classLIst ,setTimeout function(functn,milliseconds) */
function buttonAnimation(currentKey){
    var activeButton = document.querySelector("."+currentKey);
    activeButton.classList.add("pressed");
    setTimeout(function(){
        activeButton.classList.remove("pressed");
    },100);

}