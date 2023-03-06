
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
<body style="background-color:#E2E8CE;cursor:progress;padding-left:50px;padding-top:20px">

<p style="float:right;font-size:18px;cursor:help;padding-right:30px"> 
	<a a class="ex3" href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/index">Go back to home</a></p>

<h2><?= esc($news['title']) ?></h2>
<p><?= esc($news['body']) ?></p>

<hr style="height:2px;border-width:0;color:gray;background-color:#0F0F0F;width:400px;margin-top:15px">


<p ><a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/news/create"><i class="fa fa-plus w3-hover-opacity w3-margin-right"></i> </a><a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/news/create" style="font-color:#363636" >Create Another News</a></p>
		<p><a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/news"><i class="fa fa-book w3-hover-opacity w3-margin-right"></i> </a> <a href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/news">View News Archive</a></p>
 

</body>
</html>


