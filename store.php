<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/e034c117a5.js" crossorigin="anonymous"></script>
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:900&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa8HeLH2lQMbPeOiMlM9D1VxZ7pbGQq8o&callback=initMap" async defer></script>

  <link rel="stylesheet" href="css/styles.css">
</head>

<body >
  <!-- navbar -->
  <nav id="navbar-example2" class="navbar fixed-top navbar-expand-lg nav navbar-dark bg-dark rel" style="background-color: #01091c !important">
    <a class="navbar-brand" href="#">
      <img src="img/srm.png" alt="" id="logo">

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#symptoms">symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#prevention">Prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#stats" >Stats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="form.php">Form</a>
        </li>
        <li class="nav-item">
           <div id="google_translate_element" ></div>
        </li>
      </ul>
    </div>
  </nav>

 <div class="row">
    <div class="col-xs-12 col-sm-4">
<iframe style="width:120px;height:240px; margin-top: 10px; margin-left: 30px" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=amarghosh07-21&language=en_IN&marketplace=amazon&region=IN&placement=B089DCXZFF&asins=B089DCXZFF&linkId=f7ba6b0ec60cff56cfb4fa3a19443c1d&show_border=false&link_opens_in_new_window=true"></iframe>

    </div>
    <div class="col-xs-12 col-sm-4">
<iframe style="width:120px;height:240px; margin-top: 10px; margin-left: 30px" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=amarghosh07-21&language=en_IN&marketplace=amazon&region=IN&placement=B0885QBSVD&asins=B0885QBSVD&linkId=590f2d65ef4abfc91c7df7a72a06c292&show_border=false&link_opens_in_new_window=true"></iframe>

    </div>
    <div class="col-xs-12 col-sm-4">
    <iframe style="width:120px;height:240px; margin-top: 10px; margin-left: 30px" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=amarghosh07-21&language=en_IN&marketplace=amazon&region=IN&placement=B088PJDSZH&asins=B088PJDSZH&linkId=ba50d3ce9bd485233a24d1c827530beb&show_border=false&link_opens_in_new_window=true"></iframe>

    </div>
    <div class="col-xs-12 col-sm-4">
<iframe style="width:120px;height:240px; margin-top: 10px; margin-left: 30px" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=amarghosh07-21&language=en_IN&marketplace=amazon&region=IN&placement=B0879JZSQ5&asins=B0879JZSQ5&linkId=ad8fba8b630419f08b1033067480173c&show_border=false&link_opens_in_new_window=true"></iframe>

    </div>
    <div class="col-xs-12 col-sm-4">
<iframe style="width:120px;height:240px; margin-top: 10px; margin-left: 30px" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=amarghosh07-21&language=en_IN&marketplace=amazon&region=IN&placement=B089DKPZCK&asins=B089DKPZCK&linkId=feed0dd3debcede3ed52c8ff3f310f5a&show_border=false&link_opens_in_new_window=true"></iframe>

    </div>
    <div class="col-xs-12 col-sm-4">
<iframe style="width:120px;height:240px; margin-top: 10px; margin-left: 30px" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=amarghosh07-21&language=en_IN&marketplace=amazon&region=IN&placement=B089DMG5L8&asins=B089DMG5L8&linkId=585ce66794ee20b4cc40fcb2f159f4a3&show_border=false&link_opens_in_new_window=true"></iframe>

    </div>

 </div>


<div class="row footer" id="contact">
  <div class=" col-xs-12 col-md-12 footer-top">
    <ul>
    <li> <a href="#"> <i class="fas fa-envelope"></i></li></a>
    <li>  <a href="#"><i class="fab fa-twitter"></i></li></a>
      <li> <a href="#"><i class="fab fa-facebook"></i></li></a>
      <li> <a href="#"><i class="fab fa-instagram"></i></li></a>

    </ul>


  </div>
  

  <div class="col-xs-12 col-md-12 footer-bottom">
 <p>Made with ❤️   &#xa9;2020 Solace</p>
  </div>
</div>
 <script type="text/javascript">

  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
  </script>
  </body>
  </html>