<!DOCTYPE html>
<html lang="fr">
<!-- Bon voici mon header qui me sert aussi de page de connexion -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Valentin VAIN</title>

  <link rel="stylesheet" href="<?php echo base_url("assets/css/cssbg.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Nosifer|Rock+Salt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<?php form_open_multipart(); ?>



<body>
  <div class="bgimg container-md bg_container">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url("assets/img/logoVV2.png") ?>" alt="" title="Logo VVain" id="Logo" height="70" class="d-inline-block align-top"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Portefolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <div class="justify-content-end row col-8">
            <a class="nav-link" href="#"><img src="<?php echo base_url("assets/img/icons-github-.png") ?>" alt="" title="Logo github" id="Logo" height="50" class=""></a>
            <a class="nav-link" href="#"><img src="<?php echo base_url("assets/img/icons-linkedin.png") ?>" alt="" title="Logo Linkedin" id="Logo" height="50" class=""></a>
          </div>
        </div>
      </nav>

    </header>