<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Daftar</title>
  <link rel="icon" href="./assets/img/silele.png" type="image/x-icon"/>
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<!-- register -->
<div class="login-page">
  <div class="form" >
    <div style="padding-top: 10px;"><img src="assets/img/silele.png" class="rounded-circle" style="height:100px;" alt=""></div>
    <form class="login-form" method="POST" action="proses_tambah.php" enctype="multipart/form-data">
      <input type="text" placeholder="nama" name="nama"/>
      <input type="text" placeholder="alamat" name="alamat"/>
      <input type="text" placeholder="no telepon" name="no_telp"/>
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <input type="password" placeholder="comfirm password" name="cpassword"/>
      <!--<input type="file" name="foto_profil"/>-->
      <div>
            <label>Gambar Profil</label>
            <input type="file" name="foto_profil" />
        </div>
      <button type="submit">create</button>
      <p class="message">Already registered? <a href="index.php">Sign In</a></p>
    </form>
  </div>
</div>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./assets/js/script.js"></script>

</body>
</html>
