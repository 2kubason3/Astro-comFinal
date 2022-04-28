function telewizory() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("polecane").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "js/ajax/telewizory.php", true);
    xhttp.send();
  }
  function smartfony() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("polecane").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "js/ajax/smartfony.php", true);
    xhttp.send();
  }
  function polecane() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("polecane").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "js/ajax/polecane.php", true);
    xhttp.send();
  }
  function monitory() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("polecane").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "js/ajax/monitory.php", true);
    xhttp.send();
  }
  function konsole() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("polecane").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "js/ajax/konsole.php", true);
    xhttp.send();
  }
  function komputery() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("polecane").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "js/ajax/komputery.php", true);
    xhttp.send();
  }
  function akcesoria() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("polecane").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "js/ajax/akcesoria.php", true);
    xhttp.send();
  }
  
  function zamowienia() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("polecane").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "js/ajax/zamowienia.php", true);
    xhttp.send();
  }
  function dodawanie() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("polecane").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "js/ajax/dodawanie.php", true);
    xhttp.send();
  }