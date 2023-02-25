<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creator</title>
    <link rel="stylesheet" href="css/creator.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Iceland" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
      
<?php
  
  include "header.php";
  include "icons.php";
  ?> 


    <div class="container-fluid ">
        <div class="row" style="justify-content: space-evenly;
            align-items: center;">
            <div class="col-md-5  ">
                <img src="assets/creator2.png" class="img-fluid" alt="">

            </div>
            <div class="col-md-5 " style=" padding: 30px; z-index: 1 
                !important; color: white; background-color:#070b28;">
                <h2>OP-NEON</h2>
                <h2 style="color: #ff00fe;">Signup As Creator</h2>
                <form action="branddb.php" method="post">
                    <div class="">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="text" style="border-bottom: none !important; border-radius:-0.625rem !important;"
                            class="form-control" placeholder="  Name" name="Name" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="">

                        <input type="tel" style="border-bottom: none !important; border-radius: -0.625rem !important;"
                            class="form-control" placeholder=" Contact Number" pattern="[0-9]{10}" value="+91" maxlength="13" oninput="addCountryCode()" required name="Number"
                            id="exampleInputEmail1"id="phone" name="phone" aria-describedby="emailHelp">
                           

                    </div>
                    <div class="">

                        <input type="email" style="border-bottom: none !important;" class="form-control"
                            id="exampleInputEmail1" name="Email" required placeholder=" Official Email"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="">

                        <input type="text" style="border-bottom: none !important;" class="form-control"
                            placeholder="Intrested In"  id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="">

                        <input type="text"  class="form-control"
                            placeholder="Category"  id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mt-1">

                      <lable>Add one Social Link</lable>

                        <!-- <input type="text"  class="form-control"
                            placeholder="Category"  id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                            <div class="d-flex">
                            <h2 style="color:red;"class="me-2"><span onclick="toggleInput()"><i class="bi bi-youtube"></i></span>
                             <input type="text" class="form-control" placeholder="Youtube" id="myInput" style="display:none" />
                            </h2>
                            <h2 style="color:#ba3aa7;" class="me-2"><span onclick="toggleInput1()"><i class="bi bi-instagram"></i></span>
                             <input type="text" class="form-control" placeholder="Instagram" id="myInput1" style="display:none" />
                            </h2>
                            <h2 style="color:#1877f2;"><span onclick="toggleInput2()"><i class=" bi bi-facebook"></i></span>
                             <input type="text" class="form-control" placeholder="Facebook" id="myInput2" style="display:none" />
                            </h2>
                            </div>

                            
                             
                             

                    </div>
                    

                  
                    
                    

                    <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="text" class="form-control"placeholder="Budget" name="Budget" id="exampleInputEmail1" aria-describedby="emailHelp">
                                
                            </div> -->
                    
                    <div class="mt-3">

                        <button style="  color: black;
                            width: 185px;
                         height: 53px;
                            background-color:#ff00fe;
                            outline-offset: -7px;
                            
                            outline: 4px solid black;" type="submit" class="btn button2 btn-primary"
                            name="submit">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <!-- nding contact form -- -->

    <!-- wrap 1 starting -->

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <h2 style="color: #01ffff;">Clients we work with</h2>
            </div>
        </div>
        
    </div>
    <div class="container-fluid">
        
            <div class="row mt-3" style="justify-content: center;">
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="assets/logo-prime.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/logo-prime.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/logo-prime.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/logo-prime.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/logo-prime.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/logo-prime.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/logo-prime.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-2">
                    <img src="assets/logo-prime.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-2">
                    <img src="assets/logo-prime.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-2">
                    <img src="assets/logo-prime.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-2">
                    <img src="assets/logo-prime.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-2">
                    <img src="assets/logo-prime.png" class="img-fluid" alt="">
                </div> -->
            </div>
        
    </div>
    <!-- wrap1 ending -->


    <script>
    function toggleInput() {
  var input = document.getElementById("myInput");
  if (input.style.display === "none") {
    input.style.display = "block";
  } else {
    input.style.display = "none";
  }
    }
  /* inst */
  function toggleInput1() {
  var input = document.getElementById("myInput1");
  if (input.style.display === "none") {
    input.style.display = "block";
  } else {
    input.style.display = "none";
  }
}

/* fb */

function toggleInput2() {
  var input = document.getElementById("myInput2");
  if (input.style.display === "none") {
    input.style.display = "block";
  } else {
    input.style.display = "none";
  }
}





</script>
<!-- number validation -->
<script>
    function addCountryCode() {
  var phone = document.getElementById("phone");
  if (phone.value.length == 12 && !phone.value.startsWith("+91")) {
    phone.value = "+91" + phone.value;
  }
}
</script>



</body>

</html>