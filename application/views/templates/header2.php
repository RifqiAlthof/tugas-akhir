
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Scada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css">
    <style>
      .img-circle{
        display: block;
        border-radius: 50%;
        margin: 40px auto;
}
    </style>

    <script src="<?php echo base_url('assets/'); ?>js/Chart.min.js"></script>

    <title><?php echo $title ?></title>
  </head>
  <body>


   <nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-white rounded fixed-top">
    <div class="container">
  <a class="navbar-brand text-primary font-weight-bold" href="#sec1">E-VOTING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <?php if($this->session->userdata('id') != NULL) : ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link nav-active" href="<?php echo site_url('home'); ?>">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-active" href="<?php echo site_url('home/#sec2'); ?>">Voting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-active active" href="<?php echo site_url('home/profil'); ?>">Profil Taman Seruni</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $this->session->userdata('nama'); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
        </div>
      </li>
    </ul>
  </div>
<?php endif; ?>
  </div>
</nav>

    