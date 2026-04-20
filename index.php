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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assist/css/main.css" />
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
            <li class="nav-item"><a class="nav-link text-danger" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link text-black" href="Vehicles.php">Vehicles</a></li>
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

 <section class="hero position-relative">
    <div class=" container">
      <div class="text-white textandform rounded-4">

        <div class="row  gap-5 position-relative z-1 row-cols-xxxl-6">
          <div class="col text d-flex flex-column  align-content-center justify-content-center gap-3">
            <h1>Experience the road <br> like never before</h1>
            <p>
              Aliquam adipiscing velit semper morbi. Purus non eu cursus
              porttitor tristique et gravida.Quis nunc interdum gravida ullamcorper
            </p>
            <a href="#" class="btn btn-warning">View all cars</a>
          </div>

          <div class="col hero-form bg-white rounded-4 text-black p-5">
            <h2>Book your car</h2>
            <form class="d-flex flex-column gap-5 ">

              <select class="form-select">
                <option class="d-none">Select car</option>
                <option>Sedan</option>
                <option>SUV</option>
                <option>Sport</option>
                <option>Hybrid</option>
              </select>


              <input type="text" class="form-control " placeholder="Place of rental">


              <input type="text" class="form-control" placeholder="Place of return">
              <div>
                <label for="#1">Rental date</label>
                <input id="1" type="date" class="form-control">
              </div>
              <div>
                <label for="#1">Return date</label>
                <input type="date" class="form-control">
              </div>
              <button class="btn btn-warning" type="submit">Book now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="imge d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none d-none  position-absolute z-0 bottom-0 ">
      <img class="" src="assist/hero section/Img.webp" alt="">
    </div>
  </section>
  <section class="info ">
    <div class=" container">
      <div class="row justify-content-between row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-4 row-cols-xm-1">
        <div class="cards  d-flex flex-column align-items-center gap-1">
          <img src="./assist/info section/g3453.webp" alt="icon">
          <h2>Availability</h2>
          <p>Diam tincidunt tincidunt erat at semper fermentum. Id ultricies quis</p>
        </div>
        <div class="cards d-flex flex-column align-items-center gap-1">
          <img src="./assist/info section/g582.webp" alt="icon">
          <h2>Comfort</h2>
          <p>Gravida auctor fermentum morbi vulputate ac egestas orcietium convallis</p>
        </div>
        <div class="cards d-flex flex-column align-items-center gap-1">
          <img src="./assist/info section/g135.webp" alt="icon">
          <h2>Savings</h2>
          <p>Pretium convallis id diam sed commodo vestibulum lobortis volutpat</p>
        </div>
      </div>
    </div>
  </section>
  <section class="info2">
    <div class=" container">
      <div class="row  justify-content-md-center justify-content-sm-center justify-content-center justify-content-lg-between justify-content-xl-between justify-content-xxl-between ">
        <div class="col col-8 d-none d-md-none d-xl-block d-xxl-block d-lg-block d-sm-none">
          <img src="./assist/cars/marcedes-gt.webp" alt="">
        </div>
        <div class="col col-xxl-4 col-xl-4 col-lg-4 col-auto">
          <div class="span d-inline-block pt-1 ">
            <span class="">1</span>
          </div>
          <h2 class="d-inline">Erat at semper </h2>
          <p>Non amet fermentum est in enim at sit ullamcorper. Sit elementum rhoncus nullam feugiat. Risus sem
            fermentum</p>
          <div class="span d-inline-block pt-1 ">
            <span class="">2</span>
          </div>
          <h2 class="d-inline">Urna nec vivamus risus duis arcu </h2>
          <p>Aliquam adipiscing velit semper morbi. Purus non eu cursus porttitor tristique et gravida. Quis nunc
            interdum gravida ullamcorper</p>
          <div class="span d-inline-block pt-1 "> <span class="">3</span></div>
          <h2 class="d-inline">Lobortis euismod imperdiet tempus </h2>
          <p>Viverra scelerisque mauris et nullam molestie et. Augue adipiscing praesent nisl cras nunc luctus viverra
            nisi</p>
          <div class="span d-inline-block pt-1"><span class="">4</span></div>
          <h2 class="d-inline">Cras nulla aliquet nam eleifend amet et </h2>
          <p>Aliquam adipiscing velit semper morbi. Purus non eu cursus porttitor tristique et gravida. Quis nunc
            interdum gravida ullamcorper sed integer. Quisque eleifend tincidunt vulputate libero </p>
        </div>
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
  <section class="Banner pt-5">
    <div class="container">
      <div class="p-5 rounded-4 contact">
        <h2 class="mb-3 text-white">Facts In Numbers</h2>
        <p class="text-light mb-5 mx-auto" style="max-width: 600px;">
          Amet cras hac orci lacus. Faucibus ipsum arcu lectus nibh sapien bibendum ullamcorper in.
          Diam tincidunt tincidunt erat at semper fermentum.
        </p>

        <div class="row  g-4 justify-content-between ">
          <div class="col-lg-2 col-md-4 col-sm-6 rounded-3 bg-white p-3">
            <div class="fact-box d-flex row row-cols-3 gap-4">
              <div class="fact-icon rounded-4 col"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                  <path fill="#ffffff" d="M135.2 117.4l-26.1 74.6 293.8 0-26.1-74.6C372.3 104.6 360.2 96 346.6 96L165.4 96c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32l181.2 0c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2l0 192c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-32-320 0 0 32c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32L0 256c0-26.7 16.4-49.6 39.6-59.2zM128 304a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"></path>
                </svg></div>
              <div class="col "> <span class=" d-block fact-number">540+</span>
                <span class="fact-text">Cars</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-6 rounded-3 bg-white p-3 ">
            <div class="fact-box d-flex row row-cols-3 gap-4">
              <div class="fact-icon rounded-4 col"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                  <path fill="#ffffff" d="M241 87.1l15 20.7 15-20.7C296 52.5 336.2 32 378.9 32 452.4 32 512 91.6 512 165.1l0 2.6c0 112.2-139.9 242.5-212.9 298.2-12.4 9.4-27.6 14.1-43.1 14.1s-30.8-4.6-43.1-14.1C139.9 410.2 0 279.9 0 167.7l0-2.6C0 91.6 59.6 32 133.1 32 175.8 32 216 52.5 241 87.1z"></path>
                </svg></div>
              <div class="col "><span class="fact-number d-block">20k+</span>
                <span class="fact-text">Customers</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-6 rounded-3 bg-white p-3">
            <div class="fact-box d-flex row row-cols-3 gap-4">
              <div class="fact-icon rounded-4 col"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                  <path fill="#ffffff" d="M128 0C110.3 0 96 14.3 96 32l0 32-32 0C28.7 64 0 92.7 0 128l0 48 448 0 0-48c0-35.3-28.7-64-64-64l-32 0 0-32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 32-128 0 0-32c0-17.7-14.3-32-32-32zM0 224L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-192-448 0z"></path>
                </svg></div>
              <div class="col "> <span class="fact-number d-block">25+</span>
                <span class="fact-text">Years</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-6 rounded-3 bg-white p-3">
            <div class="fact-box d-flex row row-cols-3 gap-4">
              <div class="fact-icon rounded-4 col"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                  <path fill="#ffffff" d="M0 256a256 256 0 1 1 512 0 256 256 0 1 1 -512 0zm320 96c0-16.2-6-31.1-16-42.3l69.5-138.9c5.9-11.9 1.1-26.3-10.7-32.2s-26.3-1.1-32.2 10.7L261.1 288.2c-1.7-.1-3.4-.2-5.1-.2-35.3 0-64 28.7-64 64s28.7 64 64 64 64-28.7 64-64z"></path>
                </svg></div>
              <div class="col "><span class="fact-number d-block">20m+</span>
                <span class="fact-text">Miles</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mobile-app pt-5">
    <div class="container">
      <div class="d-flex row  justify-content-between align-items-center">
        <div class="col d-flex flex-column gap-4">
          <h2 class="text-black">Download mobile app</h2>
          <p>Imperdiet ut tristique viverra nunc. Ultrices orci vel auctor cursus turpis nibh placerat massa. Fermentum
            urna ut at et in. Turpis aliquet cras hendrerit enim condimentum. Condimentum interdum risus bibendum urna
          </p>
          <div class="d-flex row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-2">
            <a class="col" href="#"><img src="assist/mobile app section/App Store.webp" alt="app store"></a>
            <a class="col" href="#"><img src="./assist/mobile app section/Group.webp" alt="google play"></a>
          </div>
        </div>
        <div class="col d-none d-md-block d-lg-block d-xl-block d-xxl-block">
          <img src="assist/mobile app section/Group 12.webp" alt="mobile">
        </div>
      </div>
    </div>
  </section>
  <section class="Banner2 pt-5">
    <div class="container">
      <div class=" Bannerbox d-flex row row-cols-xl-2 row-cols-xxl-2 row-cols-lg-2 justify-content-between ">
        <div class=" col content d-flex flex-column gap-3 justify-content-center">

          <h2>Enjoy every mile with <br> adorable companionship.</h2>
          <p class="text-light">
            Amet cras hac orci lacus. Faucibus ipsum arcu lectus nibh sapien bibendum ullamcorper in.
            Diam tincidunt tincidunt erat.
          </p>

          <div class="search-box">
            <input type="text" placeholder="City">
            <button type="button">Search</button>
          </div>
        </div>

        <div class="col text-center d-none d-lg-block d-xl-block d-xxl-block">
          <img src="assist/banner2 section/car(3) 1.webp" alt="car">
        </div>
      </div>
    </div>
    
  </section>
  <?php include('includes/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>