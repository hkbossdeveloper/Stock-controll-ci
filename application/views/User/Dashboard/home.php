<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <?php echo link_tag('Assets/css/min_style.css'); ?>
    <title>Stocko's</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Stocko</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?php echo anchor('Dashboard/index', 'Home', 'class="nav-link"'); ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Assets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Urls</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Whatsapp</a>
      </li>
      <li class="nav-item">
        <?php echo anchor('dashboard/logout', 'Logout', 'class="nav-link btn-outline-danger"'); ?>
        
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php foreach ($deatils as $key):?>

<div class="jumbotron">
  <h1 class="display-3">Wellcome, <?php echo $key->goodname; ?> </h1>
  <p class="lead">
  <?php echo anchor('Dashboard/shop', 'Shops', 'class="btn btn-outline-primary"'); ?>
  <?php echo anchor('Dashboard/product', 'Products', 'class="btn btn-outline-primary"'); ?>
  </p>
  <hr class="my-4">
  
</div>

<?php endforeach; ?>


<div class="container-fluid">
 <div class="row">
     
 </div>
</div>  

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>