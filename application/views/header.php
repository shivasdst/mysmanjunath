<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php if($pageTitle) echo $pageTitle . ' | '; ?>Dr. Mysuru Manjunath</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Javascript calls
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">

     <script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script>


	<!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/custom.css?v=1.4">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/navbar.css?v=1.2">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/carousel.css">   
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/viewer.css">
    <script type="text/javascript">var data_url = "<?=DATA_URL?>";</script>
    
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/favicon.png">
</head>
<body>
    <nav id="mainNavBar" class="navbar navbar-light navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid clear-paddings">
          <p class="navbar-text" id="navbarText">
            <span><img src="<?=STOCK_IMAGE_URL?>violin.png" /></span>
            Dr. Mysuru Manjunath
          </p>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav ml-auto">
              <li><a href="<?=BASE_URL?>#home">Home</a></li>
              <li><a href="<?=BASE_URL?>#">About</a></li>
              <li><a href="<?=BASE_URL?>#">Reviews</a></li>
              <li><a href="<?=BASE_URL?>#">Schedule</a></li>
              <li><a href="<?=BASE_URL?>#">Gallery</a></li>
              <li><a href="<?=BASE_URL?>#">Downloads</a></li>
              <li><a href="<?=BASE_URL?>#">Contact</a></li>
          </ul>
      </div>
  </div>
</nav>