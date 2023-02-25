<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Neon-Opicle</title>
  <link rel="icon" href="./assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Iceland" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .disabled {
      pointer-events: none;
      cursor: default;
      text-decoration: none;
      color: grey;
    }

    .myDIV {
      cursor: pointer;
      margin-top: 14px;

      writing-mode: vertical-rl;
    }

    .musicbtn{
      background-color: #4caf5000;
    border: 4px solid;
    border-radius: 29%;
    
    color: #01ffff;
    padding: 5px 14px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 19px;
    margin: 4px 2px;
    cursor: pointer;
    }
  </style>
</head>

<body>
  
  <?php
  
  include "header.php"
  ?> 



      
   
    <div class="col-md-12">
      <div class="main">
        <header>
          <h1 class="title" style="margin-top: 40px;">
            <a class="title__link" href="">OP-NEON</a>
          </h1>

          <H5 style="color: white;
                          text-align: center;
                          font-size: 30px;">Every #op Matters at OP-NEON</H5>
          <a class="" href=""></a>

        </header>

        <main>

          <div class="internal">
            <div class="container-fluid mt-5">
              <div class="row" style="justify-content:space-evenly;">
                
                  <div class="col-md-6 col-6">
                    <a  href="newbrand.php">
                      <button style="    color: black;
                                    width: 185px ;
                                 height: 53px;
                                    background-color:#01ffff;
                                    outline-offset: -7px;
                                    
                                    outline: 4px solid black;" type="button" class=" button1 btn btn- 
                                                       primary">I am a
                                 Brand</button>
                    </a>
                  
                    
                
                
                  
                  </div>
                  <!-- <a href="brand.php"><img src="assets/brand.png" style="width: 315px;" class="img-fluid" alt=""></a> -->

                
                
                <div class="col-md-6 col-6">
                  
                   <a href="newcreator.php"><button style="    color: black;
                    width: 185px;
               height: 53px;
                    background-color:#ff00ff;
                    outline-offset: -7px;
                    padding: 0px;
                    outline: 4px solid black;" type="button" class=" button2 btn btn- 
                                        primary">I am a
    Creator</button></a> 
                    
                  
                  


                </div>
              </div>
            </div>





            <!-- <a
                          class="internal__link"
                          href="https://sewer.neon.game/"
                          target="_blank"
                        >
                        <span>S</span><span>E</span><span>W</span><span>E</span><span>R</span>
                        </a>
                        <a
                          class="internal__link"
                          href="https://skymarket.neon.game/"
                          target="_blank"
                        >
                        <span>S</span><span>K</span><span>Y</span><span> </span><span>M</span><span>A</span><span>R</span
                          ><span>K</span><span>E</span><span>T</span></a
                        >
                        <a
                          class="internal__link"
                          href="https://lootfi.io/"
                          target="_blank"
                          ><span>L</span><span>O</span><span>O</span><span>T</span
                          ><span>F</span><span>I</span>
                        </a>
              
                        <a
                          class="internal__link disabled"
                          href="https://legacy.neon.game/"
                          target="_blank"
                          ><span>W</span><span>H</span><span>I</span><span>T</span
                          ><span>E</span><span></span><span>L</span><span>A</span><span>B</span><span>E</span><span>L</span></a
                        >
              
                        <a
                          class="internal__link disabled"
                          href="https://legacy.neon.game/"
                          target="_blank"
                          ><span>f</span><span>a</span><span>q</span></a
                        > -->
          </div>
        </main>
      </div>

      <footer>
        <div class="external mb-2">
          <a href="https://discord.gg/dvYfNRfxET" class="external__link" target="_blank">
            <img class="external__image greenicon" src="assets/youtube (2).png" />
          </a>
          <a class="external__link" href="https://twitter.com/neondotgame" target="_blank">
            <img src="assets/instagram (2).png" class="external__image pink" />
          </a>

          <a href="https://magiceden.io/marketplace/neon_game" class="external__link" target="_blank">
            <img src="assets/facebook (1).png " class="external__image greenicon" />
          </a>
          <a href="https://magiceden.io/marketplace/neon_game" class="external__link" target="_blank">
            <img src="assets/linkedin (2).png" class="external__image pink" />
          </a>
        </div>
      </footer>

    </div>
  </div>

  </div>


  </div>
  <div class="container-fluid ms-4 " style="position: absolute;
  bottom: 10px;">
    <div class="row">
      <div class="col-md-3">
        <audio id="myAudio" src="music/song.wav"></audio>
        <button class="musicbtn" onclick="toggleAudio()"><i class="fas fa-play"></i><i class="fas fa-pause" style="display:none"></i> 
         </button>


        <!-- <button onclick="pauseAudio()" type="button">Pause Audio</button>  -->
      </div>
    </div>
  </div>
  <!-- Footer start -->
  <!-- <div class="container-fluid  pb-2 pt-2 footer" style=" background-color: #fffb00 !important; ">
      <div class="row" style="justify-content: space-between;">
          <div class="col-md-3 col-6">
              <h5> Copyright	&#169; 2023</h5>
          </div>
          <div class="col-md-3 col-6" style="text-align: end;">
              <h5> Privacy Policy | Terms & Conditions </h5>
          </div>
      </div>
    </div> -->


  <!-- Footer ending -->
  <script>
    var audio = document.getElementById("myAudio");
    audio.autoplay = true;
    var audio = document.getElementById("myAudio");
   var playIcon = document.querySelector(".fa-play");
    var pauseIcon = document.querySelector(".fa-pause");

    function toggleAudio() {
    if (audio.paused) {
    audio.play();
    playIcon.style.display = "none";
    pauseIcon.style.display = "inline-block";
   } else {
    audio.pause();
    playIcon.style.display = "inline-block";
    pauseIcon.style.display = "none";
   }
  }



  </script>
  

  <script src="laser.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384- 
     w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>