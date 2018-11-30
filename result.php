<!DOCTYPE html>
<html>
<title>Urop Project Interface 2.0</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" type = "text/css" href="http://psdb.aglt2.org/urop-new/urop/styles/w3.css/"> -->
<link rel="stylesheet" type = "text/css" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Arial", sans-serif}
body {font-size:17px;}
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
    <a href="#tracerouteSum" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Traceroute Summary</a> 
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

	<!-- php module to get input from previous page -->
<?php
    $src = $_POST["src"];
    $des = $_POST["des"];
    $start_time = $_POST["startTime"];
    $end_time = $_POST["endTime"];
    $epoch_start = strtotime($start_time);
    $epoch_end = strtotime($end_time);
    include 'dtb.php';
   	$sql_query_name = "select distinct sitename as sitename from serverlookup where ipv4 = '" . $src . "' or ipv6 = '" . $src . "';";
    $srcname = $dbh->query($sql_query_name);
    $row_list_name = $srcname->fetch(PDO::FETCH_ASSOC);
    $Srcname = $row_list_name["sitename"];
    if(strlen($Srcname) == 0 ) {
    	$Srcname = 'Sitename mising';
    }

    $sql_query_name = "select distinct sitename as sitename from serverlookup where ipv4 = '" . $des . "' or ipv6 = '" . $des . "';";
    $desname = $dbh->query($sql_query_name);
    $row_list_name = $desname->fetch(PDO::FETCH_ASSOC);
    $Desname = $row_list_name["sitename"];
    if(strlen($Srcname) == 0 ) {
    	$Desname = 'Sitename mising';
    }
    ?>


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
      <p>Currently, we are testing some most commonly needed queries. More details will be added in the future.</p>
    </p>
  </div>

  <!-- Input Summary -->
  <div class="w3-container" id="input" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-blue-grey"><b>Your Input Summary:</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <p> 
    	Source: <?php echo $src; ?><br>
    	Destination: <?php echo $des; ?><br><br>
    	Source site name: <?php echo $Srcname; ?><br>
    	Destination site name: <?php echo $Desname; ?><br><br>
    	Start time: <?php echo $_POST["startTime"]; ?><br>
    	(epoch:<?php echo strtotime($_POST["startTime"]); ?>)<br>
    	End time: <?php echo $_POST["endTime"]; ?><br>
    	(epoch:<?php echo strtotime($_POST["endTime"]); ?>)<br>
    </p>
    
  </div>

  <!-- tracerouteSummary -->
  <div class="w3-container" id="tracerouteSum" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-blue-grey"><b>Traceroute Summary.</b></h1>

      <?php 
        $sql_query_stmt = "select src,dest,rtnum, cnt, hops from traceroute where src='" . $src . "' and dest='" . $des . "' order by rtnum;";
        $stmt = $dbh->query($sql_query_stmt);
      ?>
      <?php $counter = 0?>
      <?php $total_count = 0?>
      <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
          <?php ++$counter; ?>
        <?php $total_count += htmlspecialchars($row['cnt']);?>
        <?php endwhile; ?>


    <p> From source <b> <?php echo $src; ?> </b> to destination <b><?php echo $des; ?></b>, there were <?php echo $counter ;?> routes, with a total of <?php echo $total_count ?> possible connections<br>  </p>

    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <input class="w3-input w3-border"  type="text" id="myInput" onkeyup="myFunction()" placeholder="Type to limit..." title="Type in a data">
    <div class="w3-responsive">
    <table id="myTable" class="w3-table-all w3-hoverable w3-small ">
    <thead>
      <tr class="w3-light-grey">
        <th>Source</th>
		<th>Destination</th>
		<th>Route Number</th>
		<th>Count</th>
		<th>Hops</th>
      </tr>
     </thead>
     	<?php 
     		$sql_query_stmt = "select src,dest,rtnum, cnt, hops from traceroute where src='" . $src . "' and dest='" . $des . "' order by rtnum;";
    		$stmt = $dbh->query($sql_query_stmt);
    	?>
      <?php $counter = 0?>
      <?php $total_count = 0?>
    	<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
		<tr>
			<td><?php echo htmlspecialchars($row['src']); ?></td>
			<td><?php echo htmlspecialchars($row['dest']); ?></td>
			<td><?php echo htmlspecialchars($row['rtnum']); ?></td>
			<td><?php echo htmlspecialchars($row['cnt']); ?></td>
			<td><?php echo htmlspecialchars($row['hops']); ?></td>
		</tr>
		<?php endwhile; ?>
  	</table>
    <br>
      <div>
    <button style= "margin-left: 25px;" "margin-right: 25px;" text-align: center;" type="Start Over" onclick="location.href='http://psdb.aglt2.org/mohsen-test/#traceroute';" id = "button3" class="w3-button w3-black">Start Over</button>
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
      <p>Do you have any comments or questions? We would love to hear from you!</p>
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

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
