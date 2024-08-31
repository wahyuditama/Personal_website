<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Person website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
      body,section {
        background-image: url(img/bg-dashboard.jpg) ;
        background-size: cover;
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body class="bg-dark text-light">
      <!-- main page -->
      <nav class="navbar bg-transparent" style="overflow: hidden;">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/StockCake-login.png" alt="Bootstrap" width="40" height="auto">
          </a>
          <form action="logout.php" class="d-flex" method="get">
            <button type="submit" class="btn btn-outline-success">logout</button>
          </form>
        </div>
      </nav>
      <!-- section-1/landing-page -->
     <section class="landing">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-5 m-auto">
                 <div class="text-body ms-5">
                  <h5>Branding | Image making </h5>
                  <h1>Visual Designer</h1>
                  <p>This is a template Figma file, turned into code using Anima. 
                      Learn more at AnimaApp.com</p>
                 </div>
              </div>
              <div class="col-md-6 offset-1">
                   <img src="img/landing-img.png" class="img-fluid " style="width: 28rem;height: auto;">
              </div>
          </div>
      </div>
     </section>

     <!-- section-items -->
      <section class="item ">
        <div class="container mt-5">
          <div class="row my-5">
            <div class="col-md-12">
                <h1 class="text-center fw-bold text-danger">Latest work</h1>
            </div>
           </div>
          <div class="row row-cols-md-4 row-cols-2 gx-4 p-6">
            <?= include 'includes/section-2.html'?>
          </div>
        </div>
      </section>

      <!-- section-flower -->
      <section class=" container-fluid flower-showcase my-md-5 pt-md-5">
        <div class="container">
          <div class="row mt-md-5">
            <div class="col-md-12">
                <h1 class="text-center mb-5 text-light">Desain Flowers</h1>
            </div>
           </div>
           <div class="row row-cols-md-4 row-col-2 gx-4">
           <?= include 'includes/section-3.html'?>
           </div>
        </div>
      </section>

      <!-- section-Desain -->
      <section class="logo py-5">
        <div class="container my-5">
          <div class="row">
         <?= include 'includes/section-4.html'?>
          </div>
        </div>
      </section>

      <!-- contact -->
      <section class="contact py-5">
          <div class="container">
            <?= include 'includes/contact.html'?>
        </div>
      </section>

      <!-- Modal-section -->
      <button type="button" class="btn btn-primary d-none btnModal" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch demo modal</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 modalTitle" id="exampleModalLabel"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
              <div class="modalImage col-md-6 col-12"></div>
              <div class="col-md-6 col-12">
                <div class="modaldetails"></div>
                <div class="d-md-flex">
                  <a href="" target="blank" class="btn btn-sm btn-warning d-block btnbuying">Payment this Book</a>
                  <span class="ms-auto text-danger fw-bold d-block text-center modalprice"></span>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end/modals -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="format/style.js"></script>
  </body>
</html>