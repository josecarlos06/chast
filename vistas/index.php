<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: usuarios.php");
  }
?>

<?php include_once "header.php"; ?>
<style>


 
</style>
<body>

  

  <div class="wrapper">
    <section class="form signup">
      <header class="header">Bienvenido a ConoceApp</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombre</label>
            <input type="text" name="fname" placeholder="Nombre" required>
          </div>
          <div class="field input">
            <label>Apellido</label>
            <input type="text" name="lname" placeholder="Apellido" required>
          </div>
        </div>
        <div class="field input">
          <label>Dirección de correo electrónico</label>
          <input type="text" name="email" placeholder="Introduce tu correo electrónico" required>
        </div>
        <div class="field">
            <label>Contraseña</label>
            <input type="password" name="password" placeholder="Introduzca nueva contraseña" required>
          
        </div>
        <div class="field image">
          <input type="file" id="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required class="fileS">
          <label class="lb" for="file">Agregar foto</label>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Entrar">
        </div>
      </form>
      <div class="link">Ya te inscribiste? <a href="login.php" class="rg">Inicia sesión ahora</a></div>
    </section>
    <section class="video">
      <video src="../img/1.mp4" muted loop autoplay></video>
    </section>
  </div>

  <script src="../js/pass-show-hide.js"></script>
  <script src="../js/signup.js"></script>

</body>
</html>
