<!DOCTYPE html>
<html>
<title>Urop Project Interface 2.0</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" type = "text/css" href="http://psdb.aglt2.org/urop-new/urop/styles/w3.css/"> -->
<link rel="stylesheet" type = "text/css" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body onload="updateClock(); setInterval('updateClock()', 1000 );">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue-grey w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-32">
      <!-- The Urop Logo Image-->
      <a href="https://lsa.umich.edu/urop" target = "_blank" class="image-link">
        <img class="images" src="images/UROPlogo.jpg" alt="Urop logo" style="width:100px;height:100px" >
      </a>
    </h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#introduction" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Introduction</a> 
    <a href="#input" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Input Summary</a>
    <a href="#packetloss" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packet Loss Query</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Designers</a> 
    <!-- <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a> -->
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
  <div class="w3-container">
    <h3 class="w3-padding-32" >
      <!-- The perfSONAR image-->
      <a href="https://www.perfsonar.net" target = "_blank" class="image-link">
        <img class="images" src="images/pSLogo.png" alt="perfSONAR logo" style="width:209px;height:65px" >
      </a>
    </h3>
  </div>
  <div class="w3-container">
    <h3>
      <!-- A self-updating clock-->
      <p id="clock" class="w3-small"></p>
    </h3>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue-grey w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-blue-grey w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="introduction">
    <h1 class="w3-xxxlarge">
      <!-- <a href="https://www.perfsonar.net" target = "_blank" class="image-link">
        <img class="images" src="images/pSLogo.png" alt="perfSONAR logo" style="width:209px;height:65px" >
      </a> -->
      <b>Querying Results</b>
    </h1>
    <h1 class="w3-xxlarge w3-text-blue-grey"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
      <p>Currently, we are testing some most commonely needed queries. More details will be added in the future.</p>
    </p>
  </div>

  <div class="w3-container" id="input" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-blue-grey"><b>Your Input Summary:</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <p>Coming up soon!</p>
    
  </div>


  
  <!-- Photo grid (modal) -->
  <!--
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="/w3images/kitchenconcrete.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="/w3images/livingroom.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      <img src="/w3images/diningroom.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>

    <div class="w3-half">
      <img src="/w3images/atrium.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="/w3images/bedroom.jpg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      <img src="/w3images/livingroom2.jpg" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
    </div>
  </div>
  -->

  <!-- Modal for full size images on click-->
  <!--
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
  -->


  <!-- Packetloss -->
  <div class="w3-container" id="packetloss" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-blue-grey"><b>Packet loss Query.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <p>Coming up soon!</p>
    
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-blue-grey"><b>Designers.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
      <p>Our team consists of one professor and two undergraduate students at the University of Michigan.</p>
      <p>
      We started this project in winter, 2017.
      </p>
      <p><b>A brief introduction to the designers</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/w3images/team2.jpg" alt="Shawn" style="width:100%">
        <div class="w3-container">
          <h3>Shawn McKee</h3>
            <p class="w3-opacity">Project Mentor</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/w3images/team1.jpg" alt="Yunjia" style="width:100%">
        <div class="w3-container">
          <h3>Yunjia(Jason) Xu</h3>
            <p class="w3-opacity">Interface Designer</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/w3images/team3.jpg" alt="Zerses" style="width:100%">
        <div class="w3-container">
          <h3>Zerses Cooper</h3>
            <p class="w3-opacity">Database Architect</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
  </div>

  
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-blue-grey"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
      <p>Do you have any advice or questions? We always love to improve our product!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
// Script to update a clock
function updateClock() {
  document.getElementById("clock").innerHTML = Date();
}

</script>

</body>
</html>
