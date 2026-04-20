<?php


$status_message = "";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car-zone"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $car_name = isset($_POST['car_name']) ? mysqli_real_escape_string($conn, $_POST['car_name']) : "";
    $customer_name = isset($_POST['customer_name']) ? mysqli_real_escape_string($conn, $_POST['customer_name']) : "";
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : "";
    $booking_date = isset($_POST['booking_date']) ? mysqli_real_escape_string($conn, $_POST['booking_date']) : "";
    $user_msg = isset($_POST['message']) ? mysqli_real_escape_string($conn, $_POST['message']) : "";

    if (!empty($customer_name) && !empty($email)) {
        $sql = "INSERT INTO bookings (car_name, customer_name, email, booking_date, message) 
                VALUES ('$car_name', '$customer_name', '$email', '$booking_date', '$user_msg')";

        if (mysqli_query($conn, $sql)) {
            $status_message = "<div class='alert alert-success mt-3 text-center'>تم تسجيل موعدك بنجاح!</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Meeting Us - Car Zone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assist/aboutus/AboutUs.css" />
  <style>
    .form-box { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
    .btn-book { background-color: #5937E0; color: white; border: none; padding: 12px; }
  </style>
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
            <li class="nav-item"><a class="nav-link text-black" href="Vehicles.php">Vehicles</a></li>
            <li class="nav-item"><a class="nav-link text-black" href="aboutus.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link text-black" href="Contact Us.php">Contact Us</a></li>
            <li class="nav-item">
    <a class="nav-link text-danger" href="meeting us.php">Meeting Us</a>
</li>
          </ul>
        </nav>
        <img class="img d-none d-lg-block" src="assist/heder section/Icons+ text.webp" alt="Phone" />
      </div>
    </div>
</header>

  <section class="text-center py-5 bg-light">
    <div class="container">
      <h1 class="fw-bold">Meeting Us</h1>
      <p class="text-muted">Schedule your visit to Car Zone - Amman Branch</p>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="form-box border p-4">
            <h4 class="mb-4 text-center">Request an Appointment</h4>
            
            <?php echo $status_message; ?>

            <form action="meeting us.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="customer_name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Appointment Date</label>
                <input type="date" name="booking_date" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Vehicle</label>
                <select name="car_name" class="form-select">
                    <option value="Audi SUV">Audi SUV</option>
                    <option value="Kia Spectra">ford</option>
                    <option value="Kia Spectra">jeep</option>
                    <option value="Kia Spectra">Kia </option>
                    <option value="Kia Spectra">Other</option>
                </select>
              </div>
              <button type="submit" class="btn btn-book w-100 rounded-pill mt-3">Confirm Booking</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php 
    if(file_exists('includes/footer.php')){
        include('includes/footer.php'); 
    }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>