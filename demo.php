<?php
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    
    <head>
      <meta charset="utf-8">
      <title>Drum Kit</title>
      <link rel="stylesheet" href="styles.css">
      <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    </head>
    
    <body>
    
      <h1 id="title">Drum 🥁 Kit</h1>
      <div class="set">
        <button class="w drum">w</button>
        <button class="a drum">a</button>
        <button class="s drum">s</button>
        <button class="d drum">d</button>
        <button class="j drum">j</button>
        <button class="k drum">k</button>
        <button class="l drum">l</button>
      </div>
      <script>

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
      
      
      </script>
    </body>
      <footer>
      
      
      </footer>
    
    
    </html>
    

?>
