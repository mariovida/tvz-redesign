document.getElementById("prijava").onclick = function(event) {
  var slanjeForme = true;

  var poljeName = document.getElementById("ime");
  var name = document.getElementById("ime").value;
  if (name.length == 0) {
    slanjeForme = false;
    poljeName.style.border="1.5px dashed #E76F51";
  }

  // Korisničko ime mora biti uneseno
  var poljeUsername = document.getElementById("prezime");
  var username = document.getElementById("prezime").value;
  if (username.length == 0) {
    slanjeForme = false;
    poljeUsername.style.border="1.5px dashed #E76F51";
    document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>";
  }

  // Provjera podudaranja lozinki
  var poljePass = document.getElementById("lozinka");
  var pass = document.getElementById("lozinka").value;
  var poljePassRep = document.getElementById("lozinkaRep");
  var passRep = document.getElementById("lozinkaRep").value;
  if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
    slanjeForme = false;
    poljePass.style.border="1px dashed red";
    poljePassRep.style.border="1px dashed red";
    document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>";
  }

  if (slanjeForme != true) {
    event.preventDefault();
  }
};

function myFunction1() {
  var x = document.getElementById("lozinka");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction2() {
  var x = document.getElementById("lozinkaRep");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
