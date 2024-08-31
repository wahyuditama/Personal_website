<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parallax Effect with Fixed Button</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- nabar -->
 <?= include 'includes/header.html' ?>

<div class="parallax-section parallax-layer-1">
   <form action="register.php" method="get">
   <button class="centered-button">Lanjut Register</button>
   </form>
</div>

<div class="container"></div>
<div class="parallax-section parallax-layer-2"></div>
<div class="container"></div>
<div class="parallax-section parallax-layer-3">
</div>

</body>
</html>
