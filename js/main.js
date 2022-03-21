function openDropdown1() {
  document.getElementById("showListTVZ").classList.toggle("show");
}
function openDropdown2() {
  document.getElementById("showListMojTVZ").classList.toggle("show");
}
function openDropdown3() {
  document.getElementById("showListMojeAkcije").classList.toggle("show");
}
function openDropdown4() {
  document.getElementById("showListNastava").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}

var modal = document.getElementById("studiji");
var btn = document.getElementById("studij");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}