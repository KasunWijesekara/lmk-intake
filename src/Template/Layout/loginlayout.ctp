<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>

    <!-- Mobile Metas -->
    <!-- REMOVE THESE TAGS BEFORE HOSTING  -->
    <meta name="robots" content="noindex">
    <meta name="robots" content="nofollow">
    <meta name="robots" content="noindex,nofollow">
    <!-- REMOVE THESE TAGS BEFORE HOSTING  -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title><?=  h($title)?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>
<body id="loginpage">
    <?= $this->fetch('content') ?>
    <footer style="position: absolute;right: 0;bottom: 0;left: 0;padding: 1rem;color: #000000;text-align: center;">
        <div class="container">
            <p style="font-size: 95%;text-align: center;">
                &copy; <script>document.write(new Date().getFullYear())</script> LMK. All Rights Reserved. Designed and Developed by <a id="twc2" href="http://twcinnovations.com/" target="_blank"> TWC Innovations (PVT) LTD.</a>
            </p>
        </div>
    </footer> 

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>               
</body>
</html>