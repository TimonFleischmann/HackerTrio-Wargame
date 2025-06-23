<?php
session_start();
if (count($_POST["password"]) > 0) {
  if ($_POST["password"] == "J4aBfd87ksnH4sDa") {
    header('Location: ..\homepage.html');
  } else {
    echo "<h2>Das ist falsch. Du kriegst nur Zugang mit dem richtigen Passwort.<br></h2>";
  }
}
?>

<html>

<head>
  <title>Passwort eingabe</title>
  <link rel="stylesheet" href="style2.css">
</head>

<body>

  <div class="login-box">
    <h2>Hallo Joe, benutze die automatischen Skripte um die Sounddateien in lesbare Bilder umzuwandeln. Pass auf, dass
      niemand die Skripte in die Hände bekommt.</h2>
    <form method="post">
      <div class="user-box">
        <p>Passwort:
          <input type="text" name="password" />

      </div>
      <input type="submit" class="senden">
      <a href="#">
      </a>
      </input>

      <a href="Passwort.tar.gz" download="Passwort.tar.gz" class="download">
        Download
      </a>

    </form>
  </div>

</body>

</html>