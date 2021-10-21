<?php
require './koneksidb.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css" />
    <title>Portfolio</title>
    
  </head>
  <body id="home">
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#home"><i class="bi bi-cpu"> Portfolio</i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home"><i class="bi bi-house-fill">  Home</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about"><i class="bi bi-file-person-fill">  About Me</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#favourite"><i class="bi bi-heart-fill">  My Favourites</i></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#project"><i class="bi bi-kanban-fill">  Project</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills"><i class="bi bi-flag-fill">  Skills</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact"><i class="bi bi-person-lines-fill">  Contact</i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="jumbotron text-center">

</div>
  <img src="images/Fadli Fauzi.jpg" alt="Fadli Fauzi" width="200" class="rounded-circle img-thumbnail">
  <h1 class="display-4"><?php echo ucwords($data[0]['Name']);?></h1>
  <p class="lead"><?php echo ucwords($data[0]['Text']);?></p>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L0,96L36.9,96L36.9,128L73.8,128L73.8,160L110.8,160L110.8,64L147.7,64L147.7,32L184.6,32L184.6,224L221.5,224L221.5,128L258.5,128L258.5,160L295.4,160L295.4,192L332.3,192L332.3,32L369.2,32L369.2,224L406.2,224L406.2,0L443.1,0L443.1,128L480,128L480,256L516.9,256L516.9,288L553.8,288L553.8,288L590.8,288L590.8,192L627.7,192L627.7,32L664.6,32L664.6,288L701.5,288L701.5,256L738.5,256L738.5,160L775.4,160L775.4,128L812.3,128L812.3,128L849.2,128L849.2,160L886.2,160L886.2,64L923.1,64L923.1,160L960,160L960,256L996.9,256L996.9,128L1033.8,128L1033.8,0L1070.8,0L1070.8,288L1107.7,288L1107.7,32L1144.6,32L1144.6,32L1181.5,32L1181.5,96L1218.5,96L1218.5,128L1255.4,128L1255.4,224L1292.3,224L1292.3,160L1329.2,160L1329.2,160L1366.2,160L1366.2,96L1403.1,96L1403.1,128L1440,128L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"></path></svg>
</section>

<section id="about">
<div class="container">
  <div class="row text-center mb-3">
    <div class="col">
      <h2>About Me</h2>
    </div>
  </div>
  <div class="row justify-content-center fs-5 text-center">
    <div class="col-md-8">
      <p><?php echo ucwords($data[0]['About']);?></p>
    </div>
  </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5d4d4" fill-opacity="1" d="M0,128L0,160L36.9,160L36.9,32L73.8,32L73.8,320L110.8,320L110.8,192L147.7,192L147.7,288L184.6,288L184.6,160L221.5,160L221.5,160L258.5,160L258.5,256L295.4,256L295.4,96L332.3,96L332.3,64L369.2,64L369.2,160L406.2,160L406.2,288L443.1,288L443.1,64L480,64L480,96L516.9,96L516.9,64L553.8,64L553.8,320L590.8,320L590.8,160L627.7,160L627.7,160L664.6,160L664.6,0L701.5,0L701.5,96L738.5,96L738.5,160L775.4,160L775.4,160L812.3,160L812.3,224L849.2,224L849.2,320L886.2,320L886.2,288L923.1,288L923.1,128L960,128L960,128L996.9,128L996.9,0L1033.8,0L1033.8,96L1070.8,96L1070.8,256L1107.7,256L1107.7,0L1144.6,0L1144.6,128L1181.5,128L1181.5,192L1218.5,192L1218.5,320L1255.4,320L1255.4,160L1292.3,160L1292.3,256L1329.2,256L1329.2,32L1366.2,32L1366.2,192L1403.1,192L1403.1,192L1440,192L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5d4d4" fill-opacity="1" d="M0,128L0,288L36.9,288L36.9,128L73.8,128L73.8,64L110.8,64L110.8,160L147.7,160L147.7,128L184.6,128L184.6,192L221.5,192L221.5,192L258.5,192L258.5,64L295.4,64L295.4,256L332.3,256L332.3,96L369.2,96L369.2,224L406.2,224L406.2,160L443.1,160L443.1,64L480,64L480,192L516.9,192L516.9,64L553.8,64L553.8,192L590.8,192L590.8,256L627.7,256L627.7,256L664.6,256L664.6,32L701.5,32L701.5,96L738.5,96L738.5,96L775.4,96L775.4,96L812.3,96L812.3,128L849.2,128L849.2,192L886.2,192L886.2,288L923.1,288L923.1,192L960,192L960,192L996.9,192L996.9,288L1033.8,288L1033.8,96L1070.8,96L1070.8,128L1107.7,128L1107.7,224L1144.6,224L1144.6,96L1181.5,96L1181.5,64L1218.5,64L1218.5,64L1255.4,64L1255.4,64L1292.3,64L1292.3,0L1329.2,0L1329.2,224L1366.2,224L1366.2,32L1403.1,32L1403.1,32L1440,32L1440,0L1403.1,0L1403.1,0L1366.2,0L1366.2,0L1329.2,0L1329.2,0L1292.3,0L1292.3,0L1255.4,0L1255.4,0L1218.5,0L1218.5,0L1181.5,0L1181.5,0L1144.6,0L1144.6,0L1107.7,0L1107.7,0L1070.8,0L1070.8,0L1033.8,0L1033.8,0L996.9,0L996.9,0L960,0L960,0L923.1,0L923.1,0L886.2,0L886.2,0L849.2,0L849.2,0L812.3,0L812.3,0L775.4,0L775.4,0L738.5,0L738.5,0L701.5,0L701.5,0L664.6,0L664.6,0L627.7,0L627.7,0L590.8,0L590.8,0L553.8,0L553.8,0L516.9,0L516.9,0L480,0L480,0L443.1,0L443.1,0L406.2,0L406.2,0L369.2,0L369.2,0L332.3,0L332.3,0L295.4,0L295.4,0L258.5,0L258.5,0L221.5,0L221.5,0L184.6,0L184.6,0L147.7,0L147.7,0L110.8,0L110.8,0L73.8,0L73.8,0L36.9,0L36.9,0L0,0L0,0Z"></path></svg>
</section>

<section id="favourite">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Favourites</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card project-tile">
              <img src="images/fh4.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body">
                <h5 class="card-title">Favourite Games - Forza Horizon 4</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card project-tile">
              <img src="images/a7x.jpg" class="card-img-top" alt="Project 2" />
              <div class="card-body">
                <h5 class="card-title">Favourite Band - Avenged Sevenfold</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card project-tile">
              <img src="images/rtx.png" class="card-img-top" alt="Project 3" />
              <div class="card-body">
                <h5 class="card-title">Favourite Graphic Card - RTX 3070</h5>
              </div>
            </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5d4d4" fill-opacity="1" d="M0,256L0,224L110.8,224L110.8,192L221.5,192L221.5,192L332.3,192L332.3,320L443.1,320L443.1,96L553.8,96L553.8,288L664.6,288L664.6,256L775.4,256L775.4,288L886.2,288L886.2,32L996.9,32L996.9,128L1107.7,128L1107.7,160L1218.5,160L1218.5,320L1329.2,320L1329.2,64L1440,64L1440,320L1329.2,320L1329.2,320L1218.5,320L1218.5,320L1107.7,320L1107.7,320L996.9,320L996.9,320L886.2,320L886.2,320L775.4,320L775.4,320L664.6,320L664.6,320L553.8,320L553.8,320L443.1,320L443.1,320L332.3,320L332.3,320L221.5,320L221.5,320L110.8,320L110.8,320L0,320L0,320Z"></path></svg>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5d4d4" fill-opacity="1" d="M0,224L0,224L36.9,224L36.9,96L73.8,96L73.8,224L110.8,224L110.8,96L147.7,96L147.7,256L184.6,256L184.6,64L221.5,64L221.5,224L258.5,224L258.5,128L295.4,128L295.4,160L332.3,160L332.3,256L369.2,256L369.2,128L406.2,128L406.2,128L443.1,128L443.1,192L480,192L480,32L516.9,32L516.9,224L553.8,224L553.8,256L590.8,256L590.8,64L627.7,64L627.7,32L664.6,32L664.6,288L701.5,288L701.5,0L738.5,0L738.5,128L775.4,128L775.4,192L812.3,192L812.3,32L849.2,32L849.2,288L886.2,288L886.2,64L923.1,64L923.1,32L960,32L960,64L996.9,64L996.9,288L1033.8,288L1033.8,320L1070.8,320L1070.8,160L1107.7,160L1107.7,160L1144.6,160L1144.6,64L1181.5,64L1181.5,0L1218.5,0L1218.5,64L1255.4,64L1255.4,64L1292.3,64L1292.3,128L1329.2,128L1329.2,160L1366.2,160L1366.2,0L1403.1,0L1403.1,288L1440,288L1440,0L1403.1,0L1403.1,0L1366.2,0L1366.2,0L1329.2,0L1329.2,0L1292.3,0L1292.3,0L1255.4,0L1255.4,0L1218.5,0L1218.5,0L1181.5,0L1181.5,0L1144.6,0L1144.6,0L1107.7,0L1107.7,0L1070.8,0L1070.8,0L1033.8,0L1033.8,0L996.9,0L996.9,0L960,0L960,0L923.1,0L923.1,0L886.2,0L886.2,0L849.2,0L849.2,0L812.3,0L812.3,0L775.4,0L775.4,0L738.5,0L738.5,0L701.5,0L701.5,0L664.6,0L664.6,0L627.7,0L627.7,0L590.8,0L590.8,0L553.8,0L553.8,0L516.9,0L516.9,0L480,0L480,0L443.1,0L443.1,0L406.2,0L406.2,0L369.2,0L369.2,0L332.3,0L332.3,0L295.4,0L295.4,0L258.5,0L258.5,0L221.5,0L221.5,0L184.6,0L184.6,0L147.7,0L147.7,0L110.8,0L110.8,0L73.8,0L73.8,0L36.9,0L36.9,0L0,0L0,0Z"></path></svg>
    </section>
    <section id="project">
  
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>My Projects</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-3">
        <div class="card project-tile">
          <img src="images/tinkercad.jpg" class="card-img-top" alt="Project 1" />
          <div class="card-body">
            <h5 class="card-title">Sistem Tertanam - Project Sensor Temperature dan Photoresistor</h5>
            <p class="card-text">Project Pak Prio Handoko untuk Sistem Tertanam, saya membuat project AC dengan sensor temperature dan photoresistor.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card project-tile">
          <img src="images/Prog.jpg" class="card-img-top" alt="Project 3" />
          <div class="card-body">
            <h5 class="card-title">Pemrograman Web - Project Portfolio</h5>
            <p class="card-text">Project Pak Hendi Ananta untuk Pemrograman Web, saya membuat project web menggunakan bahasa php dan css.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card project-tile">
          <img src="images/artikel.jpg" class="card-img-top" alt="Project 4" />
          <div class="card-body">
            <h5 class="card-title">Artikel Ilmiah</h5>
            <p class="card-text">Saya membuat artikel ilmiah yang berisi tentang rasisme.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5d4d4" fill-opacity="1" d="M0,96L0,160L36.9,160L36.9,192L73.8,192L73.8,96L110.8,96L110.8,64L147.7,64L147.7,32L184.6,32L184.6,96L221.5,96L221.5,32L258.5,32L258.5,160L295.4,160L295.4,288L332.3,288L332.3,96L369.2,96L369.2,224L406.2,224L406.2,320L443.1,320L443.1,256L480,256L480,96L516.9,96L516.9,160L553.8,160L553.8,160L590.8,160L590.8,320L627.7,320L627.7,224L664.6,224L664.6,224L701.5,224L701.5,64L738.5,64L738.5,288L775.4,288L775.4,288L812.3,288L812.3,288L849.2,288L849.2,192L886.2,192L886.2,192L923.1,192L923.1,256L960,256L960,96L996.9,96L996.9,96L1033.8,96L1033.8,192L1070.8,192L1070.8,160L1107.7,160L1107.7,64L1144.6,64L1144.6,160L1181.5,160L1181.5,160L1218.5,160L1218.5,320L1255.4,320L1255.4,32L1292.3,32L1292.3,192L1329.2,192L1329.2,288L1366.2,288L1366.2,192L1403.1,192L1403.1,192L1440,192L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"></path></svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5d4d4" fill-opacity="1" d="M0,224L0,128L36.9,128L36.9,160L73.8,160L73.8,192L110.8,192L110.8,160L147.7,160L147.7,160L184.6,160L184.6,224L221.5,224L221.5,256L258.5,256L258.5,96L295.4,96L295.4,160L332.3,160L332.3,160L369.2,160L369.2,96L406.2,96L406.2,192L443.1,192L443.1,288L480,288L480,128L516.9,128L516.9,96L553.8,96L553.8,32L590.8,32L590.8,160L627.7,160L627.7,128L664.6,128L664.6,256L701.5,256L701.5,256L738.5,256L738.5,288L775.4,288L775.4,128L812.3,128L812.3,0L849.2,0L849.2,224L886.2,224L886.2,256L923.1,256L923.1,128L960,128L960,288L996.9,288L996.9,32L1033.8,32L1033.8,256L1070.8,256L1070.8,192L1107.7,192L1107.7,32L1144.6,32L1144.6,32L1181.5,32L1181.5,32L1218.5,32L1218.5,32L1255.4,32L1255.4,320L1292.3,320L1292.3,288L1329.2,288L1329.2,288L1366.2,288L1366.2,64L1403.1,64L1403.1,288L1440,288L1440,0L1403.1,0L1403.1,0L1366.2,0L1366.2,0L1329.2,0L1329.2,0L1292.3,0L1292.3,0L1255.4,0L1255.4,0L1218.5,0L1218.5,0L1181.5,0L1181.5,0L1144.6,0L1144.6,0L1107.7,0L1107.7,0L1070.8,0L1070.8,0L1033.8,0L1033.8,0L996.9,0L996.9,0L960,0L960,0L923.1,0L923.1,0L886.2,0L886.2,0L849.2,0L849.2,0L812.3,0L812.3,0L775.4,0L775.4,0L738.5,0L738.5,0L701.5,0L701.5,0L664.6,0L664.6,0L627.7,0L627.7,0L590.8,0L590.8,0L553.8,0L553.8,0L516.9,0L516.9,0L480,0L480,0L443.1,0L443.1,0L406.2,0L406.2,0L369.2,0L369.2,0L332.3,0L332.3,0L295.4,0L295.4,0L258.5,0L258.5,0L221.5,0L221.5,0L184.6,0L184.6,0L147.7,0L147.7,0L110.8,0L110.8,0L73.8,0L73.8,0L36.9,0L36.9,0L0,0L0,0Z"></path></svg>
</section>

<section id="skills">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h4>Skills</h4>
                    
                    <br>
                    <p style="text-align: left;">Adobe Illustrator</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%; background-color: #dc3545;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                    <br>
                    <p style="text-align: left;">HTML</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 60%; background-color: #dc3545;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>
                    <br>
                    <p style="text-align: left;">CSS</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 60%; background-color: #dc3545;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>
                    <br>
                    
                    <br>
                    <p style="text-align: left;">Bootstrap</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #dc3545;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5d4d4" fill-opacity="1" d="M0,192L0,64L36.9,64L36.9,288L73.8,288L73.8,160L110.8,160L110.8,192L147.7,192L147.7,224L184.6,224L184.6,32L221.5,32L221.5,224L258.5,224L258.5,224L295.4,224L295.4,32L332.3,32L332.3,256L369.2,256L369.2,128L406.2,128L406.2,0L443.1,0L443.1,32L480,32L480,96L516.9,96L516.9,64L553.8,64L553.8,32L590.8,32L590.8,128L627.7,128L627.7,192L664.6,192L664.6,160L701.5,160L701.5,224L738.5,224L738.5,288L775.4,288L775.4,96L812.3,96L812.3,128L849.2,128L849.2,192L886.2,192L886.2,96L923.1,96L923.1,160L960,160L960,32L996.9,32L996.9,160L1033.8,160L1033.8,32L1070.8,32L1070.8,64L1107.7,64L1107.7,288L1144.6,288L1144.6,160L1181.5,160L1181.5,256L1218.5,256L1218.5,192L1255.4,192L1255.4,32L1292.3,32L1292.3,192L1329.2,192L1329.2,128L1366.2,128L1366.2,192L1403.1,192L1403.1,64L1440,64L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5d4d4" fill-opacity="1" d="M0,288L0,96L36.9,96L36.9,224L73.8,224L73.8,96L110.8,96L110.8,288L147.7,288L147.7,128L184.6,128L184.6,224L221.5,224L221.5,32L258.5,32L258.5,224L295.4,224L295.4,288L332.3,288L332.3,128L369.2,128L369.2,320L406.2,320L406.2,288L443.1,288L443.1,224L480,224L480,288L516.9,288L516.9,192L553.8,192L553.8,128L590.8,128L590.8,256L627.7,256L627.7,64L664.6,64L664.6,64L701.5,64L701.5,128L738.5,128L738.5,96L775.4,96L775.4,160L812.3,160L812.3,288L849.2,288L849.2,128L886.2,128L886.2,256L923.1,256L923.1,128L960,128L960,192L996.9,192L996.9,192L1033.8,192L1033.8,32L1070.8,32L1070.8,96L1107.7,96L1107.7,32L1144.6,32L1144.6,288L1181.5,288L1181.5,224L1218.5,224L1218.5,160L1255.4,160L1255.4,160L1292.3,160L1292.3,64L1329.2,64L1329.2,224L1366.2,224L1366.2,224L1403.1,224L1403.1,128L1440,128L1440,0L1403.1,0L1403.1,0L1366.2,0L1366.2,0L1329.2,0L1329.2,0L1292.3,0L1292.3,0L1255.4,0L1255.4,0L1218.5,0L1218.5,0L1181.5,0L1181.5,0L1144.6,0L1144.6,0L1107.7,0L1107.7,0L1070.8,0L1070.8,0L1033.8,0L1033.8,0L996.9,0L996.9,0L960,0L960,0L923.1,0L923.1,0L886.2,0L886.2,0L849.2,0L849.2,0L812.3,0L812.3,0L775.4,0L775.4,0L738.5,0L738.5,0L701.5,0L701.5,0L664.6,0L664.6,0L627.7,0L627.7,0L590.8,0L590.8,0L553.8,0L553.8,0L516.9,0L516.9,0L480,0L480,0L443.1,0L443.1,0L406.2,0L406.2,0L369.2,0L369.2,0L332.3,0L332.3,0L295.4,0L295.4,0L258.5,0L258.5,0L221.5,0L221.5,0L184.6,0L184.6,0L147.7,0L147.7,0L110.8,0L110.8,0L73.8,0L73.8,0L36.9,0L36.9,0L0,0L0,0Z"></path></svg>
    </section>

<section id="contact">
<div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>My Contact</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-3">
        <div class="card project-tile">
          <img src="images/fb.png" class="card-img-top" alt="Project 1" />
          <div class="card-body">
            <h5 class="card-title">Facebook</h5>
            <p><i class="bi bi-facebook"></i> <a href="https://www.facebook.com/fadli.fauzi.5815/" class="fw-bold text-center">Fadli Fauzi</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card project-tile">
          <img src="images/ig.png" class="card-img-top" alt="Project 3" />
          <div class="card-body">
            <h5 class="card-title">Instagram</h5>
            <p><i class="bi bi-instagram"></i> <a href="https://www.instagram.com/fadlifauzi256/" class="fw-bold text-center">fadlifauzi256</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card project-tile">
          <img src="images/gmail.png" class="card-img-top" alt="Project 3" />
          <div class="card-body">
            <h5 class="card-title">Gmail</h5>
            <p><i class="bi bi-envelope-fill"> </i> <a href="fadlimemangsv@gmail.com" class="fw-bold text-center"> fadlimemangsv@gmail.com</a></p>
          </div>
        </div>
      </div>
  
</section>

<footer class="bg-danger text-white text-center p-3">
  <p>Created by Fadli Fauzi</p>
  <p><i class="bi bi-github"></i> <a href="https://github.com/fadlifauzi123" class="text-white fw-bold text-center">Github</a></p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
