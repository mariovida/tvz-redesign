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
  } else {
    if ($dbc) {
      $mail = $_SESSION['username'];
      $query = "SELECT * FROM studenti WHERE mail='$mail'";
      $result = mysqli_query($dbc, $query);
      while($row = mysqli_fetch_array($result)) {
          $ime = $row['ime'];
          $prezime = $row['prezime'];
          $jmbag = $row['jmbag'];
      }
    }
  }
  ?>
  <nav>
    <div class="nav_wrapper">
        <button id="studij" class="studij">Studij: Redovni informatika</button>
        <button onclick="openDropdown1()" class="dropbtn">TVZ<i class="fa-solid fa-sort-down"></i></button>
        <div id="showListTVZ" class="dropdown-content drop1">
            <a href="index.php">Obavijesti studentima</a>
            <a href="index.php">Stručno vijeće Veleučilišta</a>
            <a href="index.php">Stručno vijeće Odjela</a>
            <a href="index.php">Elektroničke usluge</a>
            <a href="index.php">Pretraživanje radova</a>
            <a href="index.php">Imenik djelatnika</a>
            <a href="index.php">Webmail</a>
        </div>
        <button onclick="openDropdown2()" class="dropbtn">Moj TVZ<i class="fa-solid fa-sort-down"></i></button>
        <div id="showListMojTVZ" class="dropdown-content drop2">
            <a href="index.php">Moji rokovi i ispitne liste</a>
            <a href="izbornik/mojevijesti.php">Moje vijesti</a>
            <a href="index.php">Moji predmeti</a>
            <a href="index.php">Izmjena osobnih podataka</a>
            <a href="index.php">Moji podaci</a>
        </div>
        <button onclick="openDropdown3()" class="dropbtn">Moj akcije<i class="fa-solid fa-sort-down"></i></button>
        <div id="showListMojeAkcije" class="dropdown-content drop3">
            <a href="index.php">Izračun školarine</a>
            <a href="index.php">Izrada molbe</a>
            <a href="index.php">Slanje molbe</a>
        </div>
        <button onclick="openDropdown4()" class="dropbtn">Nastava<i class="fa-solid fa-sort-down"></i></button>
        <div id="showListNastava" class="dropdown-content drop4">
            <a href="index.php">Nastavni i izvedbeni plan</a>
            <a href="index.php">Obavijesti studentske referade</a>
            <a href="index.php">Akademski kalendar</a>
            <a href="index.php">Raspored sati</a>
        </div>
        <a id="logout" class="logout" href="logout.php">Odjava</a>
    </div>
  </nav>

  <div id="studiji" class="modal animate__animated animate__fadeInUp">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="column">
          <h2>REDOVNI</h2>
          <a href="index.php">Redovni elektrotehnika</a>
          <a href="index.php">Redovni graditeljstvo</a>
          <a href="index.php">Redovni informatika</a>
          <a href="index.php">Redovni mehatronika</a>
          <a href="index.php">Redovni računarstvo</a>
          <a href="index.php">Redovni strojarstvo</a>
      </div>
      <div class="column">
        <h2>IZVANREDNI</h2>
        <a href="index.php">Izvanredni elektrotehnika</a>
        <a href="index.php">Izvanredni graditeljstvo</a>
        <a href="index.php">Izvanredni informatika</a>
        <a href="index.php">Izvanredni mehatronika</a>
        <a href="index.php">Izvanredni računarstvo</a>
        <a href="index.php">Redovni strojarstvo</a>
      </div>
      <div class="column">
        <h2>SPECIJALISTIČKI</h2>
        <a href="index.php">Digitalna ekonomija</a>
        <a href="index.php">Informacijska sigurnost i digitalna forenzika</a>
      </div>
    </div>
  </div>

  <div class="main">
      <div class="student">
        <img src="img/avatar.jpg" alt="Avatar" class="avatar">
        <div class="student_info">
            <h1><?php echo "$ime $prezime";?></h1>
            <p>Preddiplomski studij informatike (III. godina)</p>
            <p>JMBAG: <?php echo $jmbag;?></p>
            <p>Mail: <?php echo $mail;?></p>
        </div>
      </div>
  </div>

  <div class="board">
    <h2>OBAVIJESTI</h2>
    <p>&bull; Zahvaljujući korisničkom imenu kojim raspolažete nudimo Vam mogućnost prilagođavanja stranica i bržeg saznavanja Vama bitnih obavijesti. Nemojte se zaboraviti odjaviti jer će samo Vaše stranice ostati vidljive i drugima.</p>
    <p>&bull; Koristeći opciju Moj TVZ -> Moji predmeti izaberite predmete i sadržaje čije vijesti želite pratiti. Pretplaćivanjem na njihove vijesti, svaki puta kada se prijavite koristeći opciju Moj TVZ -> Moje vijesti možete brzo pregledati sve novosti vezane uz vaš predmet. Također pomoću popisa pretplačenih sadržaja u opciji Moji predmeti možete jednostavno i brzo doći do stranice koja Vas interesira.</p>
  </div>

  <div class="documents">
    <div class="aktualno">
      <h3>AKTUALNO</h3>
      <a href="index.php">Pravilnik o studiranju</a>
      <a href="index.php">Odluka o školarinama za akademsku godinu 2021./2022.</a>
      <a href="index.php">Odluka o rokovima za Završni rad u ak. god. 2021./2022.</a>
      <a href="index.php">Molba za promjenu statusa studenta iz redovitog u izvanrednog</a>
    </div>
    <div class="stipendije">
      <h3>STIPENDIJE</h3>
      <a href="index.php">Natječaj za socijalnu stipendiju</a>
      <a href="index.php">Izjava - kućanstvo</a>
      <a href="index.php">Izjava - sportska</a>
    </div>
    <div class="kalendar">
      <h3>AKADEMSKI KALENDAR</h3>
      <a href="index.php">Akademski kalendar za 2021./2022.</a>
    </div>
    <div class="vodic">
      <h3>VODIČ ZA NOVE STUDENTE</h3>
      <a href="index.php">Vodič za nove studente</a>
      <a href="index.php">Tlocrt fakulteta</a>
    </div>
    <div class="spec">
      <h3>SPECIJALISTIČKI STUDIJ</h3>
      <a href="index.php">Natječaj - Specijalistički studij Strojarstva</a>
      <a href="index.php">Natječaj - Specijalistički studij Digitalne forenzike</a>
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
