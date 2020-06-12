<?php //include 'header2.php';?>
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


  <!-- welcome screen -->
  <div class="row">

    <div class="welcome parallax col-xs-12" id="Home">
      <h1>Covid 19</h1>
    </div>
  </div>
  <!-- before about -->
  <div class="row" id="symp">


    <div class="before-about col-xs-12 ">
      <h1>Symptoms</h1>
      <br>
      <h1>&</h1>
      <br />
      <h1>Prevention</h1><br>
      <h1><a href="#symptoms"> <i class="fas fa-chevron-circle-down "></i></a></h1>



    </div>
  </div>
  <div id="symptoms" style="height:60px;"></div>


  <div class="row card-container card-deck">

    <div class="card cardd col-xs-12 col-md-4">
      <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      <div class="card-body">
        <h5 class="card-title">Most common symptoms</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item" onclick="display()">fever <i class="fas fa-chevron-circle-down menu-down"></i>
          <div class="sub-menu">
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
          </div>

        </li>

        <li class="list-group-item">dry cough <i class="fas fa-chevron-circle-down menu-down"></i>
          <div class="sub-menu">
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
          </div>
        </li>
        <li class="list-group-item">tiredness <i class="fas fa-chevron-circle-down menu-down"></i>
          <div class="sub-menu">
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
          </div>
        </li>
      </ul>
      <!-- <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
    </div>


    <div class="card cardd col-xs-12 col-md-4">
      <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      <div class="card-body">
        <h5 class="card-title">Less common symptoms</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">aches and pains <i class="fas fa-chevron-circle-down menu-down"></i>
          <div class="sub-menu">
          <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
    </div>
    </li>
    <li class="list-group-item">sore throat <i class="fas fa-chevron-circle-down menu-down"></i>
      <div class="sub-menu">
      <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
  </div>
  </li>
  <li class="list-group-item">diarrhoea <i class="fas fa-chevron-circle-down menu-down"></i>
    <div class="sub-menu">
    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
      irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
    </div>
  </li>
  <li class="list-group-item">conjunctivitis <i class="fas fa-chevron-circle-down menu-down"></i>
    <div class="sub-menu">
    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
      irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
    </div>
  </li>
  <li class="list-group-item">headache <i class="fas fa-chevron-circle-down menu-down"></i>
    <div class="sub-menu">
    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
      irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
    </div>
  </li>
  <li class="list-group-item">loss of taste or smell <i class="fas fa-chevron-circle-down menu-down"></i>
    <div class="sub-menu">
    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
      irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
    </div>
  </li>
  <li class="list-group-item">a rash on skin, or  discolouration <br> of fingers or toes<i class="fas fa-chevron-circle-down menu-down"></i>
    <div class="sub-menu">
    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
      irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
    </div>

  </li>
  </ul>
  <!-- <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
  </div>



  <div class="card cardd col-xs-12 col-md-4">
    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
    <div class="card-body">
      <h5 class="card-title">Serious symptoms</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">difficulty breathing or shortness of breath <i class="fas fa-chevron-circle-down menu-down"></i>
        <div class="sub-menu">
          <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
        </div>
      </li>
      <li class="list-group-item">chest pain or pressure <i class="fas fa-chevron-circle-down menu-down"></i>
        <div class="sub-menu">
          <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
        </div>
      </li>
      <li class="list-group-item">loss of speech or movement <i class="fas fa-chevron-circle-down menu-down"></i>
        <div class="sub-menu">
          <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
        </div>
      </li>
    </ul>
    <!-- <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
  </div>



  </div>
  <div class="row prevention" id="prevention">
    <div class="col-xs-12 col-md-3 door-left">

              <div class="overlay">
              <div class="text">
                <h1>prevention</h1>
              </div>
              </div>
    </div>
    <div class="col-xs-12 col-md-9 door-right">

    <p>To prevent the spread of COVID-19:</p>
    <li>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
    <li>Maintain a safe distance from anyone who is coughing or sneezing.</li>
    <li>Don’t touch your eyes, nose or mouth.</li>
    <li>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
    <li>Stay home if you feel unwell.</li>
    <li>If you have a fever, cough and difficulty breathing, seek medical attention. Call in advance.</li>
    <li>Follow the directions of your local health authority.</li>
  </div>
  </div>








  <!-- <div id='map'></div> -->
<!-- api info -->
<div class="row card-deck stats" id="stats">
  <div class="card total col-xs-12 col-md-4" id="total">
    <div class="card-body">
      <h3>Total Cases </h3>
      <h5 class="card-title num" id="total-cases">0</h5>
      <p class="card-text" >Last Updated<span class="update"></span> </p>
    </div>
  </div>
  <div class="card recovered col-xs-12 col-md-4" id="recovered">
    <div class="card-body">
      <h3>Recovered </h3>
      <h5 class="card-title num" id="recovered-cases">0</h5>
      <p class="card-text">Last Updated <span class="update"></span> </p>
    </div>
  </div>
  <div class="card death col-xs-12 col-md-4" id="death">
    <div class="card-body" >
      <h3>Deaths </h3>
      <h5 class="card-title num"id="death-cases" >0</h5>
      <p class="card-text" >Last Updated<span class="update"></span> </p>

    </div>
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
  <!-- <div class=" col-xs-12 footer-form">
    <form class="" action="index.html" method="post" class="">
      <input type="text" name="" value="" placeholder="Enter your email">
      <button type="submit" class="btn btn-dark" style="background-color:#ff1e56; margin-left:15px;">submit</button>
    </form>

  </div> -->

  <div class="col-xs-12 col-md-12 footer-bottom">
 <p>Made with ❤️   &#xa9;2020 Solace</p>
  </div>
</div>
<!-- <p>hey now</p> -->




  <!-- script tag -->
  <script type="text/javascript" src="scripts/script.js"></script>
  <script type="text/javascript">

  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
  </script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
