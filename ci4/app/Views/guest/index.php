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

<div>

<p style="float:right;font-size:18px;cursor:help;padding-right:30px"> 
	<a a class="ex3" href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/index">Go back to home</a></p>

<h1>Lists of Feedback</h1>

<hr style="height:2px;border-width:0;color:gray;background-color:#0F0F0F;width:800px;margin-bottom:50px">

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <div class="main" style= "padding-bottom:10px">
		<h3><b><?= esc($guest_item['name']) ?></b></h3>
        <hr style="height:2px;border-width:0;color:gray;background-color:#0F0F0F;width:100px">
        <table>
		<tr>
        <th>- </th>
        <th><p><?= esc($guest_item['comment']) ?></p></th>
        </tr>
		</table>
        <table>
		<tr>
        <th>Gender:   </th>
        <th><p><?= esc($guest_item['gender']) ?></p></th>
        </tr>
		</table>
        <table>
		<tr>
        <th>Email:   </th>
        <th><p><?= esc($guest_item['email']) ?></p></th>
        </tr>
		</table>
        <table>
		<tr>
        <th>Website:   </th>
        <th><p><?= esc($guest_item['website']) ?></p></th>
        </tr>
		</table>
        </div>
    <?php endforeach ?>

    <a a class="ex3" href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/guest/create" style="font-size:20px;padding-bottom:150px">~~~Add Another Feedback~~~</a></p>

<?php else: ?>
    <h3>No guest</h3>
    <p>Unable to find any guest for you.</p>

<?php endif ?>

</div>

</body>
</html>





