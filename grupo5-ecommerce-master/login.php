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

<main>
  <div class="container-fluid sectionHeader">
    <h1 class="text-center">Iniciar Sesión</h1>
  </div>

  <div class="container form col-xs-8 col-lg-5 formSection">
    <form action="" method="post">
      <label for="mail" id="mail" class="items">
        <p>E-mail</p>
      </label>
      <input type="mail" name="mail" value="">
      <?php if (isset($errors['mail'])) : ?>
        <p class="errors"><?php echo $errors['mail'] ?></p>
      <?php endif; ?>

      <label for="password" id="password" class="items">
        <p>Contraseña</p>
      </label>
      <input type="password" name="password" value="">
      <?php if (isset($errors['password'])) : ?>
        <p class="errors"><?php echo $errors['password'] ?></p>
      <?php endif; ?>

      <button type="submit" name="button" class="btn btn-success btn-form">Acceder</button>

      <div class="createAccount">
        <p>¿Aún no tienes cuenta?</p>
        <a href="registro.php">¡Creala ahora!</a>
      </div>
    </form>
  </div>
</main>
