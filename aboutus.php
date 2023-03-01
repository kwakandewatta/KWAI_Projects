<!DOCTYPE html>
<html>
<head>
<style>
div.b {
  text-align: left;
}
</style>
</head>
<title>Aboutus</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">


<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Work</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
  
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="image.jpg" alt="agry" style="width:100%;min-height:250px;max-height:400px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <a href="homepagewithout.html" class="btn" >
<img src="Capture1.jpg" alt="HTML tutorial" style="width:250px;height:200px;">
</a>

  </div>
</div>


<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2><b>AgFriend<b></h2>
<p> Team Members</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="img/Randunu.Jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Randunu Bandara</h3>
  <p>Team Leader And Designer</p>
</div>

<div class="w3-quarter">
  <img src="img/Anurdha1.Jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Anuradha Indewaree</h3>
  <p>Report Writer</p>
</div>

<div class="w3-quarter">
  <img src="img/Thushan.Jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Thushan dewinda</h3>
  <p>Web Designer</p>
</div>

<div class="w3-quarter">
  <img src="img/bathiya.Jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Bathiya lakruwan</h3>
  <p>Chart Design And Planing</p>
</div>

</div>
</div>

<!-- Work Row -->
<div class="w3-theme-l1 w3-padding-64 w3-theme-l1" id="work">

<div class="b">
<h2> Our Works </h2>
<p class="form_text1">  <b>AgFriend</b> is most suitable application for nowadays agriculture. You can get all the Agri needs from one place within this application. Our project mainly targets the farmers. Also, we trying to make features for other participants of agriculture sector such as buyers, sellers, transport services etc. The main objective of making this application is decrease the farmers losses. Also, we going to give many more features such as agricultural consultations, e- banking service, helps from government departments. Not only farmers but also many other participants of agriculture can get benefits from this application. For now, we have created a feature to make profiles for the users.<br><br>  
In the future we will be able to add more features. We hope to develop this application with suitable features for less technology knowledge people .so, they will easily use the application. For now, we only able to give features for our country. But our final target is to give benefits for worldwide users.      
  </p>
</div>

</div>



<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>call or Message .</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Srilanka,western province,padukka,SlTC</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +94 716831398</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  Agfriend@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>


  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
