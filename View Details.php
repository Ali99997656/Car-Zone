<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car-zone"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_GET['id'])) {
    $car_id = mysqli_real_escape_string($conn, $_GET['id']);
    
 
    $sql = "SELECT * FROM cars WHERE id = '$car_id'";
    $result = mysqli_query($conn, $sql);
    $car = mysqli_fetch_assoc($result);


    if (!$car) {
        die("السيارة غير موجودة في قاعدة البيانات.");
    }
} else {

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $car['brand']; ?> - Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Work+Sans:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assist/Vehicles/View Details.css" />
  <link rel="stylesheet" href="assist/js/js.js">
</head>

<body>
<?php include('includes/header.php'); ?>

  <section class="hero pt-5 pb-5">
    <div class="container">
      <div class="d-flex row row-cols-1 row-cols-lg-2">
        
        <div class="detailes col text-start">
          <p class="type"><?php echo $car['brand']; ?> (<?php echo $car['type']; ?>)</p>
          <p class="price">$<?php echo $car['price']; ?> <span>/day</span></p>
          
          <img class="car img-fluid" src="assist/cars/<?php echo $car['image_url']; ?>" alt="<?php echo $car['brand']; ?>" />
          
          <div class="d-flex row row-cols-3 mt-3">
            <img src="assist/Vehicles/imge/Img (1).png" alt="other img" />
            <img src="assist/Vehicles/imge/Img (1).png" alt="other img" />
            <img src="assist/Vehicles/imge/Img (1).png" alt="other img" />
          </div>
        </div>

        <div class="CarEquipment col">
          <div class="d-flex flex-column gap-5 align-items-start">
            <p class="title fw-bold">Technical Specification</p>
            <div class="d-flex row gap-3 row-cols-2 row-cols-md-3 w-100">
              <div class="card p-3 d-flex flex-column gap-2 rounded-3 flex-grow-1">
                <p class="mb-0 text-muted small">Gear Box</p>
                <span class="fw-bold"><?php echo $car['transmission']; ?></span>
              </div>
              <div class="card p-3 d-flex flex-column gap-2 rounded-3 flex-grow-1">
                <p class="mb-0 text-muted small">Fuel</p>
                <span class="fw-bold"><?php echo $car['fuel']; ?></span>
              </div>
              <div class="card p-3 d-flex flex-column gap-2 rounded-3 flex-grow-1">
                <p class="mb-0 text-muted small">Type</p>
                <span class="fw-bold"><?php echo $car['type']; ?></span>
              </div>
              <div class="card p-3 d-flex flex-column gap-2 rounded-3 flex-grow-1">
                <p class="mb-0 text-muted small">Air Conditioner</p>
                <span class="fw-bold">Yes</span>
              </div>
            </div>
            
            <button class="btn btn-primary rounded-4 w-100 py-3 fw-bold" type="submit">Rent a car now</button>
            
            <div class="more-detailes w-100">
              <p class="Car fw-bold mb-3">Car Equipment</p>
              <div class="frame d-flex row row-cols-2 g-2 text-start">
                <div class="gap-2 col d-flex align-items-center">
                  <img src="assist/Vehicles/imge/Frame 125.png" alt="icon" />
                  <p class="mb-0">ABS</p>
                </div>
                <div class="gap-2 col d-flex align-items-center">
                  <img src="assist/Vehicles/imge/Frame 125.png" alt="icon" />
                  <p class="mb-0">Air Bags</p>
                </div>
                <div class="gap-2 col d-flex align-items-center">
                  <img src="assist/Vehicles/imge/Frame 125.png" alt="icon" />
                  <p class="mb-0">Cruise Control</p>
                </div>
                <div class="gap-2 col d-flex align-items-center">
                  <img src="assist/Vehicles/imge/Frame 125.png" alt="icon" />
                  <p class="mb-0">Bluetooth</p>
                </div>
              </div>
            </div>
          </div>
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
  <?php include('includes/footer.php'); ?>
  <script  src="assist/js/js.js"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>