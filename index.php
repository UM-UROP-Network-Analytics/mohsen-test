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
<body onload="updateClock(); setInterval('updateClock()', 1000 ); populateZone();">

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
    <a href="#traceroute" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Traceroute Query</a> 
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
      <b>perfSONAR Analytics Summarization Tool</b>
    </h1>
    <h1 class="w3-xxlarge w3-text-blue-grey"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
      <p>This tool gives an easier visualization of the data you are interested in.</p>
      <p>To use this toolkit, please select your source site, destination site. The time range will be automatically filled for you, fetching the earlest and latest timestamp availabe for your query. You can also customize the timestamp box on your own.
    </p>
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

  <!-- Traceroute -->
  <div class="w3-container" id="traceroute" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-blue-grey"><b>Traceroute Query.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <form action=result.php method="post">
      <table class="w3-table w3-centered">
        <tr>
          <th>Source</th>
          <th>Destination</th>
          <th>Start Time</th>
          <th>End Time</th>
        </tr>
        <tr>
          <td>
            <input list="srcList" name="src" id ="browser1" onchange="limitDes(this.value)">
            <datalist id="srcList">
            </datalist>
          </td>
          <td>
            <input list="desList" name="src" id ="browser2" onchange="limitSrc(this.value)">
            <datalist id="desList">
            </datalist>
          </td>
          <td>
            <input id="startTime" name="startTime" type="datetime-local" min="2017-12-01T01:00">
          </td>
          <td>
            <input id="endTime" name="endTime" type="datetime-local" min="2017-12-01T01:00">
            <datalist id="srcList">
            </datalist>
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" value="Query" class="w3-button w3-black">
          </td>
    </form>      
          <td>
            <button type="reset" onclick="reset()" id = "button2" class="w3-button w3-black">Reset</button>
          </td>
        </tr>
      </table>

  </div>

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

  <!-- Packages / Pricing Tables -->
  <!--
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Packages.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Some text our prices. Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16">Floorplanning</li>
        <li class="w3-padding-16">10 hours support</li>
        <li class="w3-padding-16">Photography</li>
        <li class="w3-padding-16">20% furniture discount</li>
        <li class="w3-padding-16">Good deals</li>
        <li class="w3-padding-16">
          <h2>$ 199</h2>
          <span class="w3-opacity">per room</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16">Floorplanning</li>
        <li class="w3-padding-16">50 hours support</li>
        <li class="w3-padding-16">Photography</li>
        <li class="w3-padding-16">50% furniture discount</li>
        <li class="w3-padding-16">GREAT deals</li>
        <li class="w3-padding-16">
          <h2>$ 249</h2>
          <span class="w3-opacity">per room</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
  -->
  
  
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
// Function to populate src zones and des zones when the webpage loads
function populateZone() {
  var zones ='';
    <?php
      $host        = "psdb.aglt2.org";
      #$host        = "localhost";
      $port        = "5432";
      $dbname      = "psdb_urop";
      $user = "postgres";
      $password = "xzk3136";
      $dbh1 = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
      $sql_query_one="select domain||'(ipv4)' as domain, ipv4 as ipv4 from serverlookup where ipv4 is not null and bandwidth is true;";
      $sql_query_two="select domain||'(ipv6)' as domain, ipv6 as ipv6 from serverlookup where ipv6 is not null and bandwidth is true;";
      $list = $dbh1->query($sql_query_one) or die('error');
      $list_two = $dbh1->query($sql_query_two) or die('error');
      while($row_list = $list->fetch(PDO::FETCH_ASSOC)):
    ?>
        
      zones += "<option value=\"";
      zones += "<?php echo $row_list["ipv4"]; ?>";
      zones += "\">"
      zones += "<?php echo $row_list["domain"]; ?>";
      zones += "</option>";

    <?php
      endwhile;
    ?>
    
    <?php
      while($row_list_two = $list_two->fetch(PDO::FETCH_ASSOC)):
    ?>
      zones += "<option value=\"";
      zones += "<?php echo $row_list_two["ipv6"]; ?>";
      zones += "\">"
      zones += "<?php echo $row_list_two["domain"]; ?>";
      zones += "</option>";

    <?php
      endwhile;
      pg_close($dbh1);
    ?>
    
    document.getElementById("srcList").innerHTML = zones;
    document.getElementById("desList").innerHTML = zones;

}

function limitDes(str) {
    
        var xhttp;
        var parameter = "src=" + str;
        //alert(parameter); //To delete

        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.open("POST", "http://psdb.aglt2.org/web-interface/limDest.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange=function()
        {
            if (xhttp.readyState==4 && xhttp.status==200)
            {
                document.getElementById("desList").innerHTML= xhttp.responseText;
            }
        }
        
        xhttp.send(parameter);
        
        // var other_box = document.getElementById("box2").value;
    
    // if(other_box) {
    //     default_time();
    // }
    
}

function limitSrc(str) {
    
        var xhttp;
        var parameter = "des=" + str;
        //alert(parameter); //To delete

        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.open("POST", "http://psdb.aglt2.org/web-interface/limSrc.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange=function()
        {
            if (xhttp.readyState==4 && xhttp.status==200)
            {
                document.getElementById("srcList").innerHTML= xhttp.responseText;
            }
        }
        
        xhttp.send(parameter);
        
        // var other_box = document.getElementById("box2").value;
    
    // if(other_box) {
    //     default_time();
    // }
    
}

function reset() {
    document.getElementById("browser1").value = "";
    document.getElementById("browser2").value = "";
    var zones ='';
    document.getElementById("desList").innerHTML = zones;
    document.getElementById("srcList").innerHTML = zones;
    document.getElementById("startTime").defaultValue = "0000-00-00T00:00";
    document.getElementById("endTime").defaultValue = "0000-00-00T00:00";
    populateZone();
}
</script>

</body>
</html>
