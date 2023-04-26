<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Google Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <!--Boostrab 5 CSS Files-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="./assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!--CSS Style Files-->
  <link rel="stylesheet" href="./assets/css/root.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/carStyle.css">

  <title>Location Cars</title>
</head>

<body>

  <nav class="navbar-page">
    <a href="" class="brand">Hibat Allah cars</a>
    <div class="menu-btn"></div>
    <div class="navigation">
      <div class="navigation-items">
        <a href="./index.php" class="link active">Home</a>
        <a href="./index.php#service" class="link">Service</a>
        <a href="./cars.php" class="link">Cars</a>
        <a href="" class="link">About</a>
        <a href="./index.php#reservation" class="link">Reservation</a>
        <a href="./index.php#contact" class="link">Contact</a>
      </div>
    </div>
  </nav>
  <section class="car-menu">
    <div class="search-car">
      <div class="title-search">
        <h1 class="display-4 text-uppercase text-center mb-5">Search your cars</h1>
      </div>
      <div class="search-input-section">
        <div class="input-search">
          <i class="bi bi-search"></i>
          <input type="search" name="search" id="search" class="input-style">
        </div>
        <button class="btn-style">Search</button>
      </div>
    </div>
    <section class="cars">
      <?php
      @include("./assets/php/connexionDataBase.php");
      $reqPre = $mydb->prepare("SELECT type_car,model_car,model_annee,config_cars,km_cars,price_car,img_car_src FROM cars_information");
      $reqPre->execute();
      $resultat = $reqPre->fetchAll();
      $resultat;
      $json_data = json_encode($resultat);
      ?>
      <div class="row cars-cards">

      </div>
      </div>
    </section>
  </section>
  <script>
    var data = <?php echo $json_data; ?>;
    console.log(data);
    var carscards = document.querySelector(".cars-cards");
    var dataLength = data.length;
    var createCards = (i) => {
      var card = `
        <div class="rent col-lg-4 col-md-6 mb-2">
        <div class="rent-item mb-4">
          <img class="img-fluid mb-4" src="${data[i].img_car_src}" alt="">
          <h4 class="text-uppercase mb-4">${data[i].type_car} ${data[i].model_car}</h4>
          <div class="rent-icon d-flex justify-content-center mb-4">
            <div class="px-2">
              <i class="  fa fa-car text-primary mr-1 "></i>
              <span>${data[i].model_annee}</span>
            </div>
            <div class="px-2 border-left border-right">
              <i class="fa fa-cogs text-primary mr-1"></i>
              <span>${data[i].config_cars}</span>
            </div>
            <div class="px-2">
              <i class="fa fa-road text-primary mr-1"></i>
              <span>${data[i].km_cars} KM</span>
            </div>
          </div>
          <a class="btn  px-3" href="">$${data[i].price_car}/Day</a>
        </div>
      </div>
        `
      return card
    }
    for(var i=0; i<dataLength; i++){
      car = createCards(i);
      carscards.innerHTML += car;
    }
  </script>
















  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/lib/easing/easing.min.js"></script>
  <script src="./assets/lib/waypoints/waypoints.min.js"></script>
  <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="./assets/lib/tempusdominus/js/moment.min.js"></script>
  <script src="./assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="./assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!--Boostrab 5 JavaScript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!--JavaScript Files-->
  <script src="./assets/js/script.js"></script>
</body>

</html>