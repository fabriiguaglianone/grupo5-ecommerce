<?php //require "db.php";

$errors = [];
$mail = isset($_POST['mail']) ? $_POST['mail'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
if ($_POST) {
  /* Email en formato válido */
  if (!$mail) {
    $errors['mail'] = "Debes ingresar un email.";
  } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $errors['mail'] = "El email no tiene un formato válido.";
  }
  /* Password 8 o más caracteres */
  if (!$password) {
    $errors['password'] = "Debes ingresar una contraseña.";
  } elseif (strlen($password) < 8) {
    $errors['password'] = "La contraseña no es correcta";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <main>
      <div class="form_titulo">
        <h1 class="text-center">Iniciar Sesión</h1>
      </div>
      <br>

      <div class="container-fluid col-xs-8 col-lg-5 formSection" >
        <form action="" method="post" class="form-register">
          <label for="mail" id="mail" class="items">
            <p>E-mail</p>
          </label>
          <input type="mail" name="mail" value="">
          <?php if (isset($errors['mail'])) : ?>
            <p class="errors"><?php echo $errors['mail'] ?></p>
          <?php endif; ?>

          <br> <br>
          <label for="password" id="password" class="items">
            <p>Contraseña</p>
          </label>
          <input type="password" name="password" value="">
          <?php if (isset($errors['password'])) : ?>
            <p class="errors"><?php echo $errors['password'] ?></p>
          <?php endif; ?>
          <br>
          <br>
          <button type="submit" name="button" class="btn-enviar ">Acceder</button>

          <div class="createAccount">
            <p>¿Aún no tienes cuenta?</p>
            <a href="registro.php">¡Creala ahora!</a>
          </div>
        </form>
      </div>

    </main>
  </body>
</html>
