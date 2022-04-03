<?php
	session_start();
	include 'connect.php';
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Tehničko veleučilište u Zagrebu</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9f52e31018.js" crossorigin="anonymous"></script>
  <link rel="icon" href="img/logo.png">
  <style>
      body {
          background-image: url("img/background.jpg");
          background-position: center;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
      }
  </style>
</head>

<body>
  <?php
  if(!isset($_SESSION['username'])) {
    header('Location: login.php');
  }
  ?>
  <nav>
    <div class="nav_wrapper">
        <button id="studij" class="studij">Studij: Redovni informatika</button>
        <button onclick="openDropdown1()" class="dropbtn">TVZ<i class="fa-solid fa-sort-down"></i></button>
        <div id="showListTVZ" class="dropdown-content drop1">
            <a href="index.html">Obavijesti studentima</a>
            <a href="index.html">Stručno vijeće Veleučilišta</a>
            <a href="index.html">Stručno vijeće Odjela</a>
            <a href="index.html">Elektroničke usluge</a>
            <a href="index.html">Pretraživanje radova</a>
            <a href="index.html">Imenik djelatnika</a>
            <a href="index.html">Webmail</a>
        </div>
        <button onclick="openDropdown2()" class="dropbtn">Moj TVZ<i class="fa-solid fa-sort-down"></i></button>
        <div id="showListMojTVZ" class="dropdown-content drop2">
            <a href="index.html">Moji rokovi i ispitne liste</a>
            <a href="index.html">Moje vijesti</a>
            <a href="index.html">Moji predmeti</a>
            <a href="index.html">Izmjena osobnih podataka</a>
            <a href="index.html">Moji podaci</a>
        </div>
        <button onclick="openDropdown3()" class="dropbtn">Moj akcije<i class="fa-solid fa-sort-down"></i></button>
        <div id="showListMojeAkcije" class="dropdown-content drop3">
            <a href="index.html">Izračun školarine</a>
            <a href="index.html">Izrada molbe</a>
            <a href="index.html">Slanje molbe</a>
        </div>
        <button onclick="openDropdown4()" class="dropbtn">Nastava<i class="fa-solid fa-sort-down"></i></button>
        <div id="showListNastava" class="dropdown-content drop4">
            <a href="index.html">Nastavni i izvedbeni plan</a>
            <a href="index.html">Obavijesti studentske referade</a>
            <a href="index.html">Akademski kalendar</a>
            <a href="index.html">Raspored sati</a>
        </div>
        <button id="logout" class="logout">Odjava</button>
    </div>
  </nav>

  <div id="studiji" class="modal animate__animated animate__fadeInUp">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="column">
          <h2>REDOVNI</h2>
          <a href="index.html">Redovni elektrotehnika</a>
          <a href="index.html">Redovni graditeljstvo</a>
          <a href="index.html">Redovni informatika</a>
          <a href="index.html">Redovni mehatronika</a>
          <a href="index.html">Redovni računarstvo</a>
          <a href="index.html">Redovni strojarstvo</a>
      </div>
      <div class="column">
        <h2>IZVANREDNI</h2>
        <a href="index.html">Izvanredni elektrotehnika</a>
        <a href="index.html">Izvanredni graditeljstvo</a>
        <a href="index.html">Izvanredni informatika</a>
        <a href="index.html">Izvanredni mehatronika</a>
        <a href="index.html">Izvanredni računarstvo</a>
        <a href="index.html">Redovni strojarstvo</a>
      </div>
      <div class="column">
        <h2>SPECIJALISTIČKI</h2>
        <a href="index.html">Digitalna ekonomija</a>
        <a href="index.html">Informacijska sigurnost i digitalna forenzika</a>
      </div>
    </div>
  </div>

  <div class="main">
      <div class="student">
        <img src="img/avatar.jpg" alt="Avatar" class="avatar">
        <div class="student_info">
            <h1>Marko Marić</h1>
            <p>Preddiplomski studij informatike (III. godina)</p>
            <p>JMBAG: 0123456789</p>
        </div>
      </div>
  </div>

  <div class="documents">
      <div class="stipendije">
          <h3>STIPENDIJE</h3>
          <a href="index.html">Natječaj za socijalnu stipendiju</a>
          <a href="index.html">Izjava - kućanstvo</a>
          <a href="index.html">Izjava - sportska</a>
      </div>
      <div class="vodic">
        <h3>VODIČ ZA NOVE STUDENTE</h3>
        <a href="index.html">Vodič za nove studente (PDF)</a>
        <a href="index.html">Tlocrt fakulteta</a>
    </div>
  </div>

  <script src="js/main.js"></script>
  <script>
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
  </script>
</body>

</html>
