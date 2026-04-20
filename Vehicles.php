<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car-zone";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Car Zone</title>
  <!--boot strap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
  <!--fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <!--main css-->
  <link rel="stylesheet" href="assist/Vihiclessss/Vehicles.css" />
</head>

<body>
  <header class="header position-sticky z-3 top-0 w-100 mt-1">
    <div class="container">
      <div class="flex-lg-nowrap d-flex justify-content-between align-items-center">
        <a href="index.php">
          <img class="img" src="assist/heder section/Logo.webp" alt="Car Zone" />
        </a>
        <nav class="nav d-none d-lg-block">
          <ul class="nav justify-content-end">
            <li class="nav-item"><a class="nav-link text-black" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link text-danger" href="Vehicles.php">Vehicles</a></li>
            <li class="nav-item"><a class="nav-link text-black" href="aboutus.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link text-black" href="Contact Us.php">Contact Us</a></li>
            <li class="nav-item">
    <a class="nav-link text-black" href="meeting us.php">Meeting Us</a>
</li>
          </ul>
        </nav>
        <img class="img d-none d-lg-block" src="assist/heder section/Icons+ text.webp" alt="Phone" />
      </div>
    </div>
</header>
  <section class="Button">
    <h1>Select a vehicle group</h1>
    <div class="container py-5 d-flex justify-content-center">
      <div class="vehicle-filter">
        <button class="vehicle-btn active">
          <!-- car icon -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
              d="M499.7 202.7 437.4 69.4C428.8 51.2 410.7 40 391.1 40H120.9C101.3 40 83.2 51.2 74.6 69.4L12.3 202.7C4.5 218.5 0 236.3 0 254.4V392c0 22.1 17.9 40 40 40h16c13.3 0 24-10.7 24-24V360H432v48c0 13.3 10.7 24 24 24h16c22.1 0 40-17.9 40-40V254.4c0-18.1-4.5-35.9-12.3-51.7zM120.9 88h270.3l62.3 132.8H58.6L120.9 88zM128 328c-22.1 0-40-17.9-40-40s17.9-40 40-40 40 17.9 40 40-17.9 40-40 40zm256 0c-22.1 0-40-17.9-40-40s17.9-40 40-40 40 17.9 40 40-17.9 40-40 40z" />
          </svg>
          All vehicles
        </button>

        <button class="vehicle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            <path d="M128 128h384l96 160H32L128 128zM64 320h512v32H64V320z" />
          </svg>
          Sedan
        </button>

        <button class="vehicle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path
              d="M528 128H48L0 256h576l-48-128zM128 288a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm320 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
          </svg>
          Cabriolet
        </button>

        <button class="vehicle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            <path d="M416 128H320v64H96l-32 64h416l-64-128zM64 320h512v32H64V320z" />
          </svg>
          Pickup
        </button>

        <button class="vehicle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            <path
              d="M480 128H160L96 256h448l-64-128zM128 288a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm384 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
          </svg>
          SUV
        </button>

        <button class="vehicle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            <path d="M512 160H192L128 288h416l-32-128zM96 320h448v32H96V320z" />
          </svg>
          Minivan
        </button>
      </div>
    </div>
  </section>
 
  <section id="cars-section" class="cars pt-5 pb-5">
    <div class="container">
      <div class="d-flex row gap-4 row-cols-md-3 row-cols-sm-2 row-cols-2 row-cols-lg-4 justify-content-between">
        
        <?php
        $sql = "SELECT * FROM cars";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="cards rounded-4 d-flex flex-column col">
              <div class="imge">
                <img src="assist/cars/<?php echo $row['image_url']; ?>" alt="car">
              </div>
              <div class="details">
                <div class="d-flex justify-content-between align-items-center mb-2 text-start">
                  <p class="card-title fw-bold mb-0"><?php echo $row['brand']; ?></p>
                  <p class="text-primary fw-bold mb-0">$<?php echo $row['price']; ?></p>
                </div>
                <div class="d-flex justify-content-between text-start">
                  <p class="text-secondary me-auto d-inline-block"><?php echo $row['type']; ?></p>
                  <p class="text-secondary d-inline-block ms-auto">per day</p>
                </div>
                <div class="d-flex justify-content-around text-muted mb-4 small">
                  <span><i class="bi bi-gear-fill me-1"></i><?php echo $row['transmission']; ?></span>
                  <span><i class="bi bi-fuel-pump me-1"></i><?php echo $row['fuel']; ?></span>
                  <span><i class="bi bi-snow me-1"></i>AC</span>
                </div>
              </div>
              <a class="btn rounded-3 fw-semibold" href="View Details.php?id=<?php echo $row['id']; ?>">View Details</a>
            </div>
        <?php 
            }
        } 
        ?>

      </div>
    </div>
  </section>
  <section class="logos p-5">
    <div class="container">
      <div
        class="rounded-4 row bg-light d-flex row-cols-2 align-items-center justify-content-center row-cols-lg-6 p-5 gap-3">
        <img class="col" src="assist/Contact Us/logos/audi-logo-2.webp" alt="logo" />
        <img class="col" src="assist/Contact Us/logos/BMW.svg.webp" alt="logo" />
        <img class="col" src="assist/Contact Us/logos/Honda_Logo.svg.webp" alt="logo" />
        <img class="col" src="assist/Contact Us/logos/Mercedes-Logo.svg.webp" alt="logo" />
        <img class="col" src="assist/Contact Us/logos/pngimg.com - mazda_PNG65.webp" alt="logo" />
      </div>
    </div>
  </section>
<?php include('includes/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>