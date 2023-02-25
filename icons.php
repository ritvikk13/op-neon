<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
          .internal {
    height: 100%;
  
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
  
    font-family: 'Audiowide', cursive;
  }
  
  .internal__link {
    color: #fff;
    font-size: 24px;
    text-decoration: none;
    text-transform: uppercase;
    padding: 10px 20px;
  }
  
  .internal__link:hover {
    text-shadow: 0 0 4px #fff, 0 0 6px #fff, 0 0 8px #4f9fea, 0 0 20px #4f9fea,
      0 0 30px #4f9fea, 0 0 15px #4f9fea, 0 0 60px #4f9fea;
  }
  
  .internal__link:hover span:nth-child(1) {
    animation: flicker 2s linear 2;
    animation: flicker 0.2s linear 10;
  }
  
  .internal__link:hover span:nth-child(2) {
    animation: flicker 2s linear 2;
  }
  
  .internal__link:hover span:nth-child(4) {
    animation: flicker 1s linear 3;
  }
  
  .internal__link:hover span:nth-child(7) {
    animation: flicker 1s linear 3;
  }
  
  .internal__link:hover span:nth-child(8) {
    animation: flicker 1s linear 3;
  }
  
  @keyframes flicker {
    0%,
    19.999%,
    22%,
    62.999%,
    64%,
    64.999%,
    70%,
    100% {
      opacity: 0.99;
    }
    20%,
    21.999%,
    63%,
    63.999%,
    65%,
    69.999% {
      opacity: 0.1;
    }
  }
  
  .internal__link:not(:last-child) {
    margin-bottom: 4px;
  }
  
  /* (　-_･) ︻デ═一  ▸ external links */
  .external {
    position: absolute;
    bottom: 30px;
    left: 50%;
    /* transform: translateX(-50%); */
    display: flex;
  }
  .button2:hover{
   
    box-shadow: 0 0 10px 0 #ff00ff inset, 0 0 20px 2px#ff00ff;
    /* border: 3px solid #00d7c3; */
  
}
  .button1:hover{
   
      box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
      /* border: 3px solid #00d7c3; */
    
 }
  .external__image {
   /*  display: block;
    width: 50px;
    height: 50px;
    padding: 10px; */
  }
  
  .external__link {
    text-decoration: none;
    background-color: #6611e4;
    border-radius: 5px;
  }
  
  .external__link:not(:last-child) {
    margin-right: 11px;
  }
  
  /* \_(♥‿♥)_/ BIG DISPLAY styles */
  @media (min-width: 576px) {
    body {
      background-size: cover;
      background-position-x: center;
      background-position-y: 60%;
    }
  
    .title {
      margin-top: 100px;
      margin-bottom: 0px;
    }
  
    .internal__link {
      font-size: 28px;
    }
  
    .internal__link:not(:last-child) {
      margin-bottom: 30px;
    }
  
    .external {
      bottom: unset;
      left: unset;
      top: 30px;
      right: 30px;
    }
  }
  .greenicon:hover{
  box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
      /* border: 3px solid #00d7c3; */

}
@media only screen and (max-width: 427px)  {


  
.external2 {
  display: none !important;
}



/* heigh 0vh */



}

.pink:hover{
  box-shadow: 0 0 10px 0 #ff00ff inset, 0 0 20px 2px#ff00ff;
}
    </style>
    
</head>
<body>
<footer class="external2">
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
    
</body>
</html>