<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php if($pageTitle) echo $pageTitle . ' | '; ?>ವಿದ್ವಾನ್ ಡಾ ॥ ಕೆ. ಜಿ. ಸುಬ್ರಾಯಶರ್ಮಾ</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Javascript calls
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=PUBLIC_URL?>js/vanillaCalendar.js"></script>
    <script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script>
    <script type="text/javascript" src="<?=PUBLIC_URL?>js/bootstrap-datepicker.min.js"></script>

	<!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="html/css/vanillaCalendar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/custom.css?v=1.4">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/navbar.css?v=1.2">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/vanillaCalendar.css">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/viewer.css">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/bootstrap-datepicker3.min.css">
    <script type="text/javascript">var data_url = "<?=DATA_URL?>";</script>
    
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/favicon.png">
</head>
<body>
    <nav id="mainNavBar" class="navbar navbar-light navbar-expand-lg fixed-top">
        <div class="container-fluid clear-paddings">
          <p class="navbar-text" id="navbarText"><small>ವೇದಾಂತಚಕ್ರವರ್ತಿ, ಮಹಾಮಹೋಪಾಧ್ಯಾಯ</small><br>ವಿದ್ವಾನ್ ಡಾ || ಕೆ. ಜಿ. ಸುಬ್ರಾಯಶರ್ಮಾ</p>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav ml-auto">
              <li><a href="<?=BASE_URL?>#home">ಮುಖಪುಟ</a></li>
              <li><a href="<?=BASE_URL?>#samvastra">ಸಂವತ್ಸರ ಮಾಲೆ</a></li>
              <li><a href="<?=BASE_URL?>Books">ಆನಂದಗ್ರಂಥಮಾಲಾ</a></li>
              <li><a href="<?=BASE_URL?>Pravachana">ಪ್ರವಚನಗಳು</a></li>
              <li><a href="<?=BASE_URL?>Gallery">ಗ್ಯಾಲರಿ</a></li>
              <li><a href="<?=BASE_URL?>#contact">ಸಂಪರ್ಕಿಸಿ</a></li>
          </ul>
      </div>
  </div>
</nav>