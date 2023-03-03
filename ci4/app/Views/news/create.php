
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

    <h2><?= esc($title) ?></h2>

    <hr style="height:2px;border-width:0;color:gray;background-color:#0F0F0F;width:350px;paddingt-top:0px">

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input style="margin-bottom:10px" type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input style="margin-top:40px;margin-bottom:10px" type="submit" name="submit" value="Create news item">
</form>

<p style="font-color:#363636" ><a a class="ex2" href="http://apcwebprog.csf.ph/~dmolarte2/lab3/ci4/public/news" > View News Archive </a></p>

</body>
</html>



