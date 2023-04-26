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

  <title>Location Cars</title>
</head>

<body>

  <!--Header Section-->
  <header class="myHeader">
    <a href="#home" class="brand">Hibat Allah cars</a>
    <div class="menu-btn"></div>
    <div class="navigation">
      <div class="navigation-items">
        <a href="#home" class="link active">Home</a>
        <a href="#service" class="link">Service</a>
        <a href="./cars.php" class="link">Cars</a>
        <a href="#" class="link">About</a>
        <a href="#reservation" class="link">Reservation</a>
        <a href="#contact" class="link">Contact</a>
        <a href="./admin/Login.php" class="link">Login</a>
      </div>
    </div>
  </header>
  <section class="home" id="home">
    <video class="vedio-slide active" src="./assets/ved/videoplayback (1).mp4" autoplay muted loop></video>
    <video class="vedio-slide" src="./assets/ved/videoplayback.mp4" autoplay muted loop></video>
    <video class="vedio-slide" src="./assets/ved/videoplayback (1).mp4" autoplay muted loop></video>
    <video class="vedio-slide" src="./assets/ved/videoplayback.mp4" autoplay muted loop></video>
    <div class="content">
      <h1>Welcom to <br> <span>Hibat allah cars</span></h1>
      <p>Where we offer the most exclusive and luxurious rental cars for those who demand the best. Our fleet includes high-performance vehicles from top luxury brands, such as Rolls-Royce, Lamborghini, Bentley, and Ferrari. Follow us for the ultimate driving experience and to see the world's most exclusive vehicles in action.</p>
      <a href="./cars.php"><button class="btn-style">View more</button></a>
    </div>
    <div class="social-media-home-icons">
      <a href=""><i class="bi bi-whatsapp"></i></a>
      <a href=""><i class="bi bi-instagram"></i></a>
      <a href=""><i class="bi bi-facebook"></i></a>
      <a href=""><i class="bi bi-youtube"></i></a>
      <a href=""><i class="bi bi-twitter"></i></a>
    </div>
    <div class="navigation-button-section">
      <div class="navigation-btn active "></div>
      <div class="navigation-btn"></div>
      <div class="navigation-btn"></div>
      <div class="navigation-btn"></div>
    </div>
  </section>

  <!--Service Section-->
  <section class="service" id="service">
    <h1 class="display-4 text-uppercase text-center mb-5">Our Services</h1>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-2">
        <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
          <div class="service-contenu d-flex align-items-center justify-content-between mb-3">
            <div class=" bg-icon d-flex align-items-center justify-content-center ml-n4" style="width: 80px; height: 80px;">
              <i class=" service-icon fa fa-2x fa-taxi "></i>
            </div>
            <h1 class="display-2 mt-n2 m-0">01</h1>
          </div>
          <h4 class="text-uppercase mb-3">Car Rental</h4>
          <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-2">
        <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
          <div class="service-contenu d-flex align-items-center justify-content-between mb-3">
            <div class=" bg-icon d-flex align-items-center justify-content-center ml-n4" style="width: 80px; height: 80px;">
              <i class=" service-icon fa fa-2x fa-money-check-alt "></i>
            </div>
            <h1 class="display-2 mt-n2 m-0">02</h1>
          </div>
          <h4 class="text-uppercase mb-3">Car Financing</h4>
          <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-2">
        <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
          <div class="service-contenu d-flex align-items-center justify-content-between mb-3">
            <div class=" bg-icon d-flex align-items-center justify-content-center ml-n4" style="width: 80px; height: 80px;">
              <i class=" service-icon fa fa-2x fa-car "></i>
            </div>
            <h1 class="display-2 mt-n2 m-0">03</h1>
          </div>
          <h4 class="text-uppercase mb-3">CAR INSPECTION</h4>
          <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
        </div>
      </div>
  </section>

  <!--Cars Section-->
  <section class="cars" id="cars">
    <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>

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
  </section>

  <!--Reservation Section-->
  <section class="reservation" id="reservation">
    <h1 class="display-4 text-uppercase text-center mb-5">Reservation</h1>
    <form class="container-fluid pb-5" method="POST" action="./assets/php/reservation.php">
      <div class="container">
        <div class="row">
          <div class=" personal col-lg-8">
            <h2 class="mb-4">Personal Detail</h2>
            <div class="mb-5">
              <div class="row">
                <div class="col-6 form-group">
                  <input type="text" class="form-control p-4" placeholder="First Name" required="required" id="first-name" name="first-name">
                </div>
                <div class="col-6 form-group">
                  <input type="text" class="form-control p-4" placeholder="Last Name" required="required" id="last-name" name="last-name">
                </div>
              </div>
              <div class="row">
                <div class="col-6 form-group">
                  <input type="email" class="form-control p-4" placeholder="Your Email" required="required" id="client-email" name="client-email">
                </div>
                <div class="col-6 form-group">
                  <input type="text" class="form-control p-4" placeholder="Mobile Number" required="required" id="client-phone" name="client-phone">
                </div>
              </div>
            </div>
            <h2 class="mb-4">Booking Detail</h2>
            <div class="mb-5">
              <div class="row">
                <div class="col-6 form-group">
                  <select class="custom-select px-4" style="height: 50px;" id="pickup-local" name="pickup-local">
                    <option selected="">Pickup Location</option>
                    <option value="Marrakech">Marrakech</option>
                    <option value="Casblanca">Casablanca</option>
                    <option value="Agadir">Agadir</option>
                    <option value="Tanger">Tanger</option>
                    <option value="Rabat">Rabat</option>
                    <option value="Fes">Fes</option>
                  </select>
                </div>
                <div class="col-6 form-group">
                  <select class="custom-select px-4" style="height: 50px;" id="drop-local" name="drop-local">
                    <option selected="">Drop Location</option>
                    <option value="Marrakech">Marrakech</option>
                    <option value="Casblanca">Casablanca</option>
                    <option value="Agadir">Agadir</option>
                    <option value="Tanger">Tanger</option>
                    <option value="Rabat">Rabat</option>
                    <option value="Fes">Fes</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-6 form-group">
                  <div class="date" id="date2" data-target-input="nearest">
                    <input type="datetime-local" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date" data-target="#date2" data-toggle="datetimepicker" id="pickup-date" name="pickup-date">
                  </div>
                </div>
                <div class="col-6 form-group">
                  <div class="time" id="time2" data-target-input="nearest">
                    <input type="datetime-local" class="form-control p-4 datetimepicker-input" placeholder="Drop Date" data-target="#time2" data-toggle="datetimepicker" id="drop-date" name="drop-date">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6 form-group">
                  <?php
                  @include("./assets/php/connexionDataBase.php");
                  $req = $mydb->prepare("SELECT type_car FROM cars_information");
                  $req->execute();
                  $rslt = $req->fetchAll();
                  $rslt;
                  $json_type = json_encode($rslt);
                  ?>
                  <select class="custom-select px-4" style="height: 50px;" id="select-car" name="select-car">
                    <option selected="">Select Cars</option>
                  </select>
                </div>
                <div class="col-6 form-group">
                  <select class="custom-select px-4" style="height: 50px;" id="configuration" name="configuration">
                    <option selected="">Select Configuration</option>
                    <option value="AUTO">Automatic</option>
                    <option value="Manuelle">Manuelle</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control py-3 px-4" rows="3" placeholder="Special Request" required="required" id="text-reservation" name="text-reservation"></textarea>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bg-blue p-5 mb-5 payment">
              <h2 class=" mb-4">Payment</h2>
              <div class="form-group">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="payment" id="paypal">
                  <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                  <label class="custom-control-label" for="directcheck">Direct Check</label>
                </div>
              </div>
              <div class="form-group mb-4">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                  <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                </div>
              </div>
              <button class="btn text-center py-3" id="btn-reservation" name="btn-reservation">Reserve Now</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

  <!--Contact section-->
  <section class="contact" id="contact">
    <div class="container-fluid py-5 pt-0">
      <div class="container pt-5 pb-3 pt-0">
        <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
        <div class="row">
          <div class="col-lg-7 mb-2">
            <div class="contact-form  mb-4" style="padding: 30px;">
              <form action="./assets/php/contact.php" method="POST">
                <div class="row">
                  <div class="col-6 form-group">
                    <input type="text" class="form-control p-4" placeholder="Your Name" required="required" id="name_ct" name="name_ct">
                  </div>
                  <div class="col-6 form-group">
                    <input type="email" class="form-control p-4" placeholder="Your Email" required="required" id="email_ct" name="email_ct">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control p-4" placeholder="Subject" required="required" id="sbjc_ct" name="sbjc_ct">
                </div>
                <div class="form-group">
                  <textarea class="form-control py-3 px-4" rows="5" placeholder="Message" required="required" id="message_ct" name="message_ct"></textarea>
                </div>
                <div>
                  <button class="btn btn-primary py-3 px-5" type="submit" id="btn-contact" name="btn-contact" >Send Message</button>
                </div>
              </form>
            </div>
          </div>
          <div class=" contact-infos col-lg-5 mb-2">
            <div class="bg-blue d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
              <div class="d-flex mb-3">
                <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                <div class="mt-n1">
                  <h5 class="">Head Office</h5>
                  <p>Location, City, Country</p>
                </div>
              </div>
              <div class="d-flex mb-3">
                <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                <div class="mt-n1">
                  <h5 class="">Branch Office</h5>
                  <p>Location, City, Country</p>
                </div>
              </div>
              <div class="d-flex mb-3">
                <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                <div class="mt-n1">
                  <h5 class="">Customer Service</h5>
                  <p>customer@example.com</p>
                </div>
              </div>
              <div class="d-flex">
                <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                <div class="mt-n1">
                  <h5 class="">Return &amp; Refund</h5>
                  <p class="m-0">refund@example.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Footer Section-->
  <div class="container-fluid bg-blue py-5 px-sm-3 px-md-5">
    <div class="row pt-5 ">
      <div class="col-lg-3 col-md-6 mb-5 footer">
        <h4 class="text-uppercase  mb-4">Get In Touch</h4>
        <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>Location, City, Country</p>
        <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+012 345 67890</p>
        <p><i class="fa fa-envelope text-white mr-3"></i>info@example.com</p>
        <h6 class="text-uppercase text-white py-2">Follow Us</h6>
        <div class="d-flex justify-content-start social-media">
          <a class="btn btn-lg  btn-lg-square mr-2" href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-lg  btn-lg-square mr-2" href="https://facebook.com/freewebsitecode/"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-lg  btn-lg-square mr-2" href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-lg  btn-lg-square" href="https://youtube.com/freewebsitecode"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 footer">
        <h4 class="text-uppercase  mb-4">Usefull Links</h4>
        <div class="d-flex flex-column justify-content-start links">
          <a class=" mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Private Policy</a>
          <a class=" mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Term &amp; Conditions</a>
          <a class=" mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>New Member Registration</a>
          <a class=" mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Affiliate Programme</a>
          <a class=" mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Return &amp; Refund</a>
          <a class="" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Help &amp; FQAs</a>
        </div>
      </div>
    </div>
  </div>



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

    var c = createCards(0);
    console.log(c);
    var randomNumber = () => {
      var nbr = Math.floor(Math.random() * dataLength);
      return nbr;
    }
    var randomCards = () => {
      var a = randomNumber();
      var b = randomNumber();
      var c = randomNumber();


      card_0 = createCards(a);
      card_1 = createCards(b);
      card_2 = createCards(c);

      var cards = new Array();
      cards[0] = card_0;
      cards[1] = card_1;
      cards[2] = card_2;

      for (var i = 0; i < 3; i++) {
        carscards.innerHTML += cards[i];
      }
    }
    randomCards();


    var typeCar = <?php echo $json_type; ?>;
    var arrayType = [];
    for (var i = 0; i < dataLength; i++) {

      arrayType[i] = typeCar[i].type_car;
    }

    console.log(typeCar);
    console.log(arrayType);

    function removeDuplicates(arrayType) {
      return arrayType.filter((item,
        index) => arrayType.indexOf(item) === index);
    }
    console.log(removeDuplicates(arrayType));
    var remove_duplicates_array_type = removeDuplicates(arrayType);
    var arrayTypeLenght = remove_duplicates_array_type.length;
    var select_car = document.querySelector("#select-car");
    var carOption = (a) => {
      var option = `
      <option value="${remove_duplicates_array_type[a]}">${remove_duplicates_array_type[a]}</option>
      `
      return option;
    }
    for (var j = 0; j < arrayTypeLenght; j++) {
      var caroption = carOption(j);
      select_car.innerHTML += caroption;
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
  <script src="./assets/js/header.js"></script>
</body>

</html>