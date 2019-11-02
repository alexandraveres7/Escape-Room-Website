<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Escape room</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3"> <?php echo $lang[$language]['title'] ?> </span>
    <span class="site-heading-lower"> <?php echo $lang[$language]['name'] ?> </span>
  </h1>

  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">escape land</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="index.php">  <?php echo $lang[$language]['button_no1'] ?> 
					<span class="sr-only">(current)</span>
					</a>
                </li>
                <li class="nav-item px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="about.php"> <?php echo $lang[$language]['button_no2'] ?> </a>
                </li>
                <li class="nav-item active px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="products.php"> <?php echo $lang[$language]['button_no3'] ?> </a>
                </li>
                <li class="nav-item px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="login.php"> <?php echo $lang[$language]['button_no4'] ?> </a>
                </li>
                <li class="nav-item px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="3b-reserve-slot.php"> <?php echo $lang[$language]['button_no5'] ?> </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper"> <?php echo $lang[$language]['room_no1_name'] ?> </span>
              <span class="section-heading-lower"> <?php echo $lang[$language]['room_no1_title'] ?> </span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/room-no1.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0"> <?php echo $lang[$language]['room_no1_desc'] ?> </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper"> <?php echo $lang[$language]['room_no2_name'] ?> </span>
              <span class="section-heading-lower"> <?php echo $lang[$language]['room_no2_title'] ?> </span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/room-no2.jpg" alt="">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0"> <?php echo $lang[$language]['room_no2_desc'] ?> </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper"> <?php echo $lang[$language]['room_no3_name'] ?> </span>
              <span class="section-heading-lower"> <?php echo $lang[$language]['room_no3_title'] ?> </span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/room-no3.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0"> <?php echo $lang[$language]['room_no3_desc'] ?> </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper"> <?php echo $lang[$language]['room_no4_name'] ?> </span>
              <span class="section-heading-lower"> <?php echo $lang[$language]['room_no4_title'] ?> </span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/room-no4.jpg" alt="">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0"> <?php echo $lang[$language]['room_no4_desc'] ?> </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small"> <a href="products.php?local=en">English</a> | <a href="products.php?local=ro">Romana</a></p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
