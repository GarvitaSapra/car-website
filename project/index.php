<?php
// session_start();
//    include ("conection.php");
//    include ("function.php");

//    $user_data = check_login($con);

// 
?>
<html>

<head>

  <title>major project</title>
  
   <link rel="stylesheet" href="static/css/chatbot2.css">
  <link rel="stylesheet" href="static/css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/index.css">


</head>

<body>
  <!-- FIRST SECTION START -->
  <div class="container-fluid bg" style="background:url(images/bg.jpg);">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          &emsp;&emsp;<img src="https://static.thenounproject.com/png/217171-200.png" style="width:70px;height:65px">
          <br>SCRAP SCRAB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/etqbfrgp.json" trigger="loop" style="width:70px;height:67px">
              </lord-icon>
              <a class="nav-link active disabled" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/kjkiqtxg.json" trigger="loop" style="width:75px;height:68px">
              </lord-icon>
              <a class="nav-link " href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="scraping_procedure.php">
                <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                <lord-icon src="https://cdn.lordicon.com/ndydpcaq.json" trigger="loop" colors="primary:#c71f16" state="loop" style="width:60px;height:52px">
                </lord-icon>
              </a><a class="nav-link" href="notices.html">Notices</a>
            </li>
            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

            <li class="nav-item dropdown">
              <lord-icon src="https://cdn.lordicon.com/gzmgulpl.json" trigger="loop" style="width:70px;height:68px">
              </lord-icon>
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">&ensp;FAQ</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="car_scrap_price.php">Car Scrap Price</a></li>
                <li><a class="dropdown-item" href="RTO_rules.php"> RTO RULES FOR SELLING CARS AS SCRAP</a></li>
                <li><a class="dropdown-item" href="without_paper.php"> RISK OF SELLING A CAR WITHOUT PAPER WORK</a></li>
              </ul>
            </li>


            <li class="nav-item">
&ensp;
&ensp;

              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/nnbhwnej.json" trigger="loop" colors="primary:#e83a30" style="width:60px;height:67px">
              </lord-icon>
              <a class="nav-link" href="testing.html">Testing Center</a>
            </li>
&ensp;

            <li class="nav-item">
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/dxoycpzg.json" trigger="loop" colors="primary:#f24c00,secondary:#646e78,tertiary:#4bb3fd,quaternary:#ebe6ef,quinary:#f9c9c0" style="width:65px;height:67px">
              </lord-icon>
              <a class="nav-link " href="#">Renew </a>
            </li>
          
            <li class="nav-item">
            &ensp;
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/ggihhudh.json" trigger="loop" colors="primary:#121331,secondary:#646e78,tertiary:#ee6d66" style="width:65px;height:68px">
              </lord-icon>
              <a class="nav-link " href="variety.php">&ensp;Variety</a>
            </li>
            <li class="nav-item">
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/oaflahpk.json" trigger="loop" colors="primary:#4bb3fd" state="loop-spin" style="width:65px;height:68px">
              </lord-icon>
              <a class="nav-link " href="#">Location</a>
            </li>
            <li class="nav-item">
              &ensp;&ensp; <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/cnyeuzxc.json" trigger="loop" colors="primary:#c71f16" state="morph-phone-ring-signal-finish" style="width:60px;height:69px">
              </lord-icon>
              <a class="nav-link " href="#">&ensp;&ensp;Contact us</a>
            </li>
            &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;
            <li class="nav-item">
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/zthozvfn.json" trigger="loop" colors="primary:#b26836,secondary:#4bb3fd,tertiary:#f9c9c0,quaternary:#ebe6ef" style="width:70px;height:68px">
              </lord-icon>
              <a class="nav-link" href="login_page.php">Login</a>
            </li>
            <li>
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/hgbzryoa.json" trigger="loop" colors="primary:#911710,secondary:#4bb3fd,tertiary:#ebe6ef,quaternary:#ebe6ef" style="width:70px;height:70px">

              </lord-icon>
              <a class="nav-link" href="search.html">Search</a>

            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar end -->

    </script>
    <div class="row">
      <div class="col-lg-6 col-sm-12 tagline">
        <h1 class="bottom">sell your scrap car in delhi ncr</h1>
        <h4 class="bottom">for you it is a scrap but for us it is a hope <h4>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="call-box">
          <h3 class="box-head">Get instant callback</h3>
          <form action="callback.php" method="$_POST">
            <input type="text" placeholder="Name" name="name" required class="input-field">
            <input type="text" placeholder="Mobile Number" name="phone_no" required class="input-field">
            <input type="text" placeholder="Car Model" name="car_model" required class="input-field">
            <input type="text" placeholder="Location" name="location" required class="input-field">
            <button type="Submit" class="submit-btn">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- FIRST SECTION END -->
  <!-- SECOND SECTION START -->


  <!-- CHAT BAR BLOCK -->
  <div class="chat-bar-collapsible">
    <button id="chat-button" type="button" class="collapsible">Chat with us!
      <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
    </button>

    <div class="content">
      <div class="full-chat-block">
        <!-- Message Container -->
        <div class="outer-container">
          <div class="chat-container">
            <!-- Messages -->
            <div id="chatbox">
              <h5 id="chat-timestamp"></h5>
              <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
            </div>

            <!-- User input box -->
            <div class="chat-bar-input-block">
              <div id="userInput">
                <input id="textInput" class="input-box" type="text" name="msg" placeholder="Tap 'Enter' to send a message">
                <p></p>
              </div>

              <div class="chat-bar-icons">
                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart" onclick="heartButton()"></i>
                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
              </div>
            </div>

            <div id="chat-bar-bottom">
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>





<div class="container">
  <h3 class="heading">why should you choose us ?</h3>
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="box" style="text-align:center;">
        <img src="images/leagle.png" width="130px">
        <h5>Legal Paperwork</h5>
        <p>Paperwork to assure you that your scrap car will not be misused for any purpose.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="box" style="text-align:center;">
        <img src="images/best_price.png" width="120px" style="margin:14px auto;">
        <h5>Best Price </h5>
        <p>In the market of full competition we give the best price for your scrap car it's guaranted.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="box" style="text-align:center;">
        <img src="images/doorstep.png" width="120px" style="margin:6px auto;">
        <h5>Doorstep service</h5>
        <p>We will pickup or tow your scrap car form your location at free of cost.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="box">
        <img src="images/hassal_free.png" width="120px" style="margin:6px auto;">
        <h5>Hassle-free service</h5>
        <p>we give you on the spot chassis plate for you rc cancellation so that you will not get any hassle in future. </p>
      </div>
    </div>
  </div>
</div>
<!-- SECOND SECTION END -->
<!-- THIRD SECTION START -->
<div class="container-fluid bg ">
  <div class="container bg ">
    <h2 class="heading"> What else do we buy ? </h2>
    <div class="row">
      <div class="col-lg-3 col-md-4">
        <div class="car-box">
          <p><i class="fas fa-angle-double-right"></i> scrap car</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="car-box">
          <p><i class="fas fa-angle-double-right"></i> accidental cars</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="car-box">
          <p><i class="fas fa-angle-double-right"></i> Damaged cars</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="car-box">
          <p><i class="fas fa-angle-double-right"></i> Burnt cars</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="car-box">
          <p><i class="fas fa-angle-double-right"></i> Bad condition cars</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="car-box">
          <p><i class="fas fa-angle-double-right"></i> 15 Year Petrol Cars</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="car-box">
          <p><i class="fas fa-angle-double-right"></i> 10 Year Diesel Cars</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="car-box">
          <p><i class="fas fa-angle-double-right"></i> Any condition cars</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- THIRD SECTION END -->
<!-- FOURTH SECTION START -->
<div class="container" style=" margin-top:-20px;">
  <div class="row">
    <div class="col-lg-8 col-md-12">
      <h3 style="text-transform: uppercase; font-weight: bold; color:rgb(7, 7, 73); padding-top:20px;">rto rules for selling cars as scrap.</h3>
      <p class="rto">Old vehicles are one of the major contributors of increasing pollution in Delhi NCR. Recently post National Green Tribunal order regarding ban on 15 year old vehicles for plying in Delhi, the concerned RTOs have stopped re-registering and fitness of such old vehicles. The Government has till date not formulated any uniform policy for such vehicles which are now 15 years old. Suddenly the impact of same will fall on many vehicle owners, as they do not know how to deal with this aged vehicle, as it is illegal to run such vehicle on road without valid renewed Registration certificate (RC).</p>
      <p class="rto">It is important for the vehicle owner to approach the RTO and inform about scrap of the vehicle and opt for deregistration of the vehicle.</p>
      <h5 style="text-align:justify;"><b>Following rules of RTO need to be taken care of while opting for scrap & de-registration of the vehicle</b></h5>
      <ol class="rto">
        <li>The Vehicle owner need to write a letter to the concerned RTO about scrap of the vehicle.</li>
        <li>Vehicle owner shall have to surrender the original RC of the vehicle, along with cut out metal sheet portion of the scrapped vehicle chasis no. to the RTO for their record.</li>
        <li>An affidavit by the Vehicle owner is also required to be deposited with the application for scrap & de-registration. Affidavit shall mention that the vehicle is free from all sort of lien / mortgage / charge / theft case / insurance claims / third party claims or any pending case in any court.</li>
      </ol>
      <p class="rto">RTO shall verify the documents and process the same after getting due diligence reports for the concerned vehicle from NCRB (National Crime Records Bureau), Traffic police for any pending challans. RTO also verifying the same from the records maintained in RTO office regarding any sale / purchase updation of the said vehicle. In case the report is found satisfactory, the vehicle is de-registered from the record of the RTO. By this way the vehicle owner feels satisfied that the vehicle do no more exist in the record of the RTO and he gains a peace of mind.</p>
    </div>

    <div class="col-lg-4 col-md-12">
      <div class="side-bar">
        <h3 class="side-bar-head">other related topic.</h3>
        <ul style="list-style-type:none;">
          <li class="side-bar-list"><a style="color:white; text-decoration:none;" href="without_paper.php">risk of selling a car without paper work</a></li>
          <li class="side-bar-list"><a style="color:white; text-decoration:none;" href="scraping_procedure.php">scraping procedure</a></li>
          <li class="side-bar-list"><a style="color:white; text-decoration:none;" href="#">online car scrapping service</a></li>
          <li class="side-bar-list"><a style="color:white; text-decoration:none;" href="car_scrap_price.php">scrap car price</a></li>

        </ul>
      </div>
    </div>
  </div>
</div>
<!-- FOURTH SECTION END -->
<!-- FIFTH SECTION START -->
<div class="container-fluid bg-dark footer">
  <div class="container bg-dark">
    <div class="row">
      <div class="col-lg-4 col-md-12">
        <h1>SCRAP SCRAB</h1>
        <p>for any kind of car scrap reach at SCRAP CRAB we give you best scrap car deals and secure service</p>
      </div>
      <div class="col-lg-1"> </div>
      <div class="col-lg-3 col-md-12">
        <h2>SERVICE AREA</h2>
        <ul style="display:inline-block; ">
          <li>Delhi Ncr</li>
          <li>Noida</li>
          <li>Gurugram</li>
          <li>Ghaziabad</li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-12">
        <h2>CONTACT US</h2>
        <ul style="list-style-type:none;">
          <li><i class="fas fa-map-marker-alt"> </i> address : Plot No.8, Institutional Area Rohini sector 25, New Delhi 110085</li>
          <li><i class="fas fa-mobile-alt"> </i> 9667097947,9910526224 </li>
          <li><i class="fas fa-envelope"> </i> SpectreAtWork@gmail.com</li>
        </ul>
      </div>
      <hr>
      <p style="text-align:center;">Copyright <i class="far fa-copyright"></i> All rights Reserved- Scrap crab</p>
    </div>
  </div>
</div>
<!-- FIFTH SECTION END -->




<!-- java script cdn -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>

</html>