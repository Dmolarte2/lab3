<!DOCTYPE html>
<html>
<head>
<title>APC WEBPROG website (olarte)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href = "style/css.css">

</head>
<body style="background-color:#E2E8CE;cursor:progress">


<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">

  <img src="images/ako3.jpg" style="width:70%;border-radius: 50%;-webkit-filter: blur(3px);
  filter: blur(3px);padding-top:20%;padding-bottom:15%">
  <a href="#" class="w3-bar-item  w3-padding-large ">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item  w3-padding-large ">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item  w3-padding-large">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item  w3-padding-large">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>NEWS & CONTACT</p>
  </a>
  <a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/resource" class="w3-bar-item  w3-padding-large">
    <i class="fa fa-globe w3-xxlarge"></i>
    <p>RESOURCE</p>
  </a>

</nav>

<p id="demo"></p>

<script>
const PI = 3.141592653589793;
PI = 3.14;      // This will give an error
PI = PI + 10;   // This will also give an error
</script>

<!-- navbar -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">NEWS & CONTACT</a>
	<a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/resource" class="w3-bar-item w3-button" style="width:25% !important">RESOURCE</a>
  </div>
</div>

<div class="w3-padding-large" id="main">
  <!-- header -->
  <header class="w3-container w3-padding-32 w3-center " id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small" >I'm</span> Daniel Olarte</h1>
    <p>WEBPROG Programmer.</p>
    <img src="images/akopeace.jpg" style="width:50%;filter: drop-shadow(3px 3px 3px #808080)" alt="boy" class="w3-image" width="500" height="700" >
  </header>

  <!-- about myself -->
  <div class="w3-content w3-justify w3-padding-64" id="about">
    <h2 style="font-color:#0F0F0F;" >Daniel Olarte</h2>
    <hr style="height:2px;border-width:0;color:gray;background-color:#0F0F0F">
    <p style="font-color:#363636">Hi, My name is Daniel Olarte. I'm currently a student from Asia Pacific College from the class BSIT-MI212. I created this website for our subject WEBPROG. It will showcase some of my background and skills.
    </p>
    <h3 class="w3-padding-16 " style="font-color:#0F0F0F;">My Skills</h3>
    <p class="w3-wide">Gaming</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:75%"></div>
    </div>
    <p class="w3-wide">Sports</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:50%"></div>
    </div>
    <p class="w3-wide">Programming</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:10%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1+</span><br>
        Friends
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">55+</span><br>
        Crams 
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">10+</span><br>
        Socials
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">15+</span><br>
        Assignments
      </div>
    </div>

    
 
  <!-- photo sectiones -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 style="font-color:#0F0F0F;">My Photos and alaga</h2>
    <hr style="height:2px;border-width:0;width:200px;color:gray;background-color:#0F0F0F">

    <!-- photobungbong -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="images/me.jpg" style="width:100%;filter: drop-shadow(5px 5px 5px #808080)">
        <img src="images/alaga1.jpg" style="width:100%;filter: drop-shadow(5px 5px 5px #808080)">
		<img src="images/editalaga.jpg" style="width:100%;filter: drop-shadow(5px 5px 5px #808080)">
		<img src="images/alaga5.jpg" style="width:100%;filter: drop-shadow(5px 5px 5px #808080)">

      </div>

      <div class="w3-half">
		<img src="images/me1.jpg" style="width:100%;filter: drop-shadow(5px 5px 5px #808080)">
       
        
        <img src="images/alaga3.jpg" style="width:100%;filter: drop-shadow(5px 5px 5px #808080)">
        <img src="images/alaga4.jpg" style="width:100%;filter: drop-shadow(5px 5px 5px #808080)">
		
		<img src="images/alaga6.jpg" style="width:100%;filter: drop-shadow(5px 5px 5px #808080)">
		
      </div>
    </div>
  </div>

  <style>
    .error {color: #FF0000;}
    </style>
    </head>
    <body>  
    

    <div class=" w3-content" id="contact">
	
    <h2 style="font-color:#0F0F0F;">News Section</h2>
    <hr style="height:2px;border-width:0;width:200px;color:gray;background-color:#0F0F0F">

    <div>
		<p ><a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/news/create"><i class="fa fa-plus w3-hover-opacity w3-margin-right"></i> </a><a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/news/create" style="font-color:#363636" >Create News</a></p>
		<p><a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/news"><i class="fa fa-book w3-hover-opacity w3-margin-right"></i> </a> <a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/news">View News Archive</a></p>
    </div><br> 

  </div>

  <div class=" w3-content" id="contact" style= "margin-top:0px">
  
    <h2 style="font-color:#0F0F0F;">Feedback to the website</h2>
    <hr style="height:2px;border-width:0;width:200px;color:gray;background-color:#0F0F0F">

    <div>
		<p ><a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/guest/create"><i class="fa fa-pencil w3-hover-opacity w3-margin-right"></i> </a><a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/guest/create" style="font-color:#363636" >Write a Feedback</a></p>
		<p><a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/guest"><i class="fa fa-eye w3-hover-opacity w3-margin-right"></i> </a> <a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/guest">View List of Feedback</a></p>
    </div><br>
    
  </div>
  

    <div class=" w3-content" id="contact">
    <hr style="height:2px;border-width:0;width:100%;color:gray;background-color:#0F0F0F;margin-top:120px">
    <h2 style="font-color:#0F0F0F;">Contact Me</h2>
    <hr style="height:2px;border-width:0;width:100%;color:gray;background-color:#0F0F0F">

    <div>
	
		<p ><a href="https://www.facebook.com/daaaaaniellrt/"><i class="fa fa-facebook-official w3-hover-opacity w3-margin-right"></i> </a><a href="https://www.facebook.com/daaaaaniellrt/" style="font-color:#363636" >@daaaaaaniel.lrt</a></p>
		<p><a href="https://www.instagram.com/daniel.lrt/?hl=en"><i class="fa fa-instagram w3-hover-opacity w3-margin-right"></i> </a> <a href="https://www.instagram.com/daniel.lrt/?hl=en">@daniel.lrt</a></p>
		<p><a href="https://www.linkedin.com/in/daniel-olarte-a3290318b/"><i class="fa fa-linkedin w3-hover-opacity w3-margin-right"></i> </a> <a href="https://www.linkedin.com/in/daniel-olarte-a3290318b/"> Daniel Olarte</a></p>
    
    </div>
    

  </div>

  </div>

    <!-- baba -->
  <footer class="w3-content  w3-xlarge">
    <hr style="height:2px;border-width:0;color:gray;background-color:#0F0F0F">
    <p class="w3-medium">Powered by <a  target="_blank" >Yours trulyw3</a></p>
  </footer>

<!-- tapos na -->
</div>

</body>
</html>
