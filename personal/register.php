<?php 
include 'database/db.php';
session_start();
$message = "";

if(isset($_POST['register'])){
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $email = filter_var($_POST['email']);

    if(empty($username) || empty($password) || empty($email)) {
        $message = "Enter your username and password first";
    } elseif (!filter_var($email)) {
        $message = "email format not valid !!";
    } else {     
        try {
            $data = $db->prepare("INSERT INTO personal (username, password, email) VALUES (?, ?, ?)");
            $data->bind_param("sss", $username, $password, $email);
            
            if($data->execute()){
                $message = "Registration successful. Please log in";
            } else {
                $message = "Error: " . $data->error;
            }
            $data->close();
        } catch(mysqli_sql_exception $e) {
            $message = "Username or email already exists. Please use another one";
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
    .register{
      background-image: url(img/Featured.jpg);
      background-size: cover;
      overflow: hidden;
    }
  </style>
  <body class="register">
  <?php include 'includes/header.html'; ?>
  <section class="text-light">
    <div class="container pt-5 h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card bg-transparent" >
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="img/StockCake-register.png"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-light">

                  <form method="post" action="">

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Logo</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                    <div class="form-outline mb-4">
                      <input type="text" id="username" class="form-control form-control-lg" name="username" required/>
                      <label class="form-label" for="username">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="password" class="form-control form-control-lg" name="password" required/>
                      <label class="form-label" for="password">Password</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="email" id="email" class="form-control form-control-lg" name="email" required/>
                      <label class="form-label" for="email">Email address</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit" name="register">Register</button>
                    </div>

                    <?php if(!empty($message)): ?>
                      <div class="alert alert-info" role="alert">
                        <?php echo $message; ?>
                      </div>
                    <?php endif; ?>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>