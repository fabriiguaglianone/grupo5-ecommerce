<?php require "db.php";

 $errors = [];

  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
  $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
  $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
  $address = isset($_POST['address']) ? $_POST['address'] : "";
  $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : "";
  $tel = isset($_POST['tel']) ? $_POST['tel'] : "";
  $password = isset($_POST['password']) ? $_POST['password'] : "";
  $confirm = isset($_POST['confirm']) ? $_POST['confirm'] : "";
  if ($_POST) {
    /* Nombre 3 o más caracteres */
    if (!$nombre) {
      $errors['nombre'] = "Debes ingresar un nombre.";
    } elseif (strlen($nombre) < 3) {
      $errors['nombre'] = "El nombre debe tener al menos 3 caracteres";
    }
    /* Apellido 3 o más caracteres */
    if (!$apellido) {
      $errors['apellido'] = "Debes ingresar un apellido.";
    } elseif (strlen($apellido) < 3) {
      $errors['apellido'] = "El apellido debe tener al menos 3 caracteres";
    }
    /* Email en formato válido */
    if (!$mail) {
      $errors['mail'] = "Debes ingresar un email.";
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $errors['mail'] = "El email deber tener un formato válido.";
    }
    /* Password 8 o más caracteres */
    if (!$password) {
      $errors['password'] = "Debes ingresar una contraseña.";
    } elseif (strlen($password) < 8) {
      $errors['password'] = "La contraseña debe tener al menos 8 caracteres";
    }
    /*Validar password*/
    if (!$confirm) {
        $errors['confirm'] =  "Confirma la contraseña";
    } else if ($_POST["password"] !== $_POST["confirm"]) {
      $errors['confirm'] =  "Las contraseñas no coinciden";
    }
  }
?>

<?php

  $datos = $db->prepare('INSERT INTO usuarios values (0, :nombre, :apellido, :mail, :address, :localidad, :tel, :password)');
  $datos->bindValue(":nombre", $nombre);
  $datos->bindValue(":apellido", $apellido);
  $datos->bindValue(":mail", $mail);
  $datos->bindValue(":password", $password);

   $datos->execute();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/registro.css">

  </head>
  <body>
    <div class="titulo">
  <h1 >REGISTRO</h1>
</div class="registro-completo">
    <form action="registro.php" method="post" class="form-register">
      <h2 class="form_titulo">Crea una cuenta</h2>
      <div class="contenedor-inputs">
      <label for="nombre" id="nombre" class="items">
        <p>Nombre</p>
      </label>
      <input type="text" name="nombre" value="<?php echo $nombre ?>">
      <?php if (isset($errors['nombre'])) : ?>
        <p class="errors"><?php echo $errors['nombre'] ?></p>
      <?php endif; ?>

      <label for="apellido" id="apellido" class="items">
         <p>Apellido</p>
      </label>

      <input type="text" name="apellido" value="<?php echo $apellido ?>">
      <?php if (isset($errors['apellido'])) : ?>
        <p class="errors"><?php echo $errors['apellido'] ?></p>
      <?php endif; ?>
      <label for="mail" id="mail" class="items">
        <p>E-mail</p>
      </label>
      <input type="mail" name="mail" value="<?php echo $mail ?>">
      <?php if (isset($errors['mail'])) : ?>
        <p class="errors"><?php echo $errors['mail'] ?></p>
      <?php endif; ?>
        <label for="free-element" id="free-element" class="free-element"> <p>Seleccione su rubro freelance</p> </label>

                <select class="free-element" name="free-element">
                  <option value="coding">Coding</option>
                  <option value="logo_design">Logo Design</option>
                  <option value="marketing">Marketing Digital</option>
                  <option value="traduccion">Traducción</option>
                </select>
        <label for="password" id="password" class="items">
        <p>Contraseña</p>
      </label>
      <input type="password" name="password" value="<?php echo $password ?>">
      <?php if (isset($errors['password'])) : ?>
        <p class="errors"><?php echo $errors['password'] ?></p>
      <?php endif; ?>

      <label for="confirm" id="confirm" class="items" id="rep-contraseña">
        <p>Repetir contraseña</p>
      </label>
      <input type="password" name="confirm" value="<?php echo $confirm ?>">
      <?php if (isset($errors['confirm'])) : ?>
        <p class="errors"><?php echo $errors['confirm'] ?></p>
      <?php endif; ?>
      <button type="submit" name="button" class="btn btn-success">Enviar</button>
        <p class="form__link">¿Ya tienes una cuenta? <a href="login.php">Ingresar</a> </p>
      </div>

    </form>
  </div>
  </body>
</html>
