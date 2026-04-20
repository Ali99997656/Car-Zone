<?php

$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "car-zone"; 

$conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    if ($pass !== $confirm_pass) {
        $message = "<div class='alert alert-danger'>Passwords do not match!</div>";
    } else {
        
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$hashed_password')";
        
        if (mysqli_query($conn, $sql)) {
           
            session_start();
            $_SESSION['user_id'] = mysqli_insert_id($conn); 
            $_SESSION['username'] = $user;

            header("Location:index.php");
            exit(); 
        } else {
            $message = "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="assist/login/ca.css">
</head>
<body>

    <div class="container-fluid p-0">
        <div class="row g-0 align-items-center">
            <div class="col-md-6">
                <img src="assist/login/0b347e105d353eae4c7b063b0da73eddb78c3a89.png" class="img-side" alt="NFT Artwork">
            </div>

            <div class="col-md-6 p-5">
                <div class="mx-auto" style="max-width: 400px;">
                    <h1 class="fw-bold mb-3">Create Account</h1>
                    <p class="text-secondary mb-4">Welcome! Enter Your Details And Start Creating.</p>

                    <?php echo $message; ?>

                    <form action="signup.php" method="POST">
                        <div class="mb-3 position-relative">
                            <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-3 position-relative">
                            <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3 position-relative">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="mb-4 position-relative">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                        </div>
                        <button type="submit" class="btn btn-purple w-100 py-3">Create account</button>                   
                </div>
            </div>
        </div>
    </div>

</body>
</html>