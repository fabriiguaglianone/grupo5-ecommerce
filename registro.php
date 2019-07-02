<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/registro.css">
    <title></title>
  </head>
  <body>
    <div class="titulo">
  <h1>Formulario de registro</h1>
</div>
    <form action="registrar.php" method="post" class="form-register">
      <h2 class="form_titulo">Crea una cuenta</h2>
      <div class="contenedor-inputs">
        <input type="text" name="nombre" placeholder="Nombre"class="input-half" required>
        <input type="text" name="apellido" placeholder="Apellido"class="input-half" required>
        <input type="email" name="correo" value=""placeholder="Email" class="input-100" required>
        <label for="free-element" id="free-element" class="free-element"> <p>Seleccione su rubro freelance</p> </label>

                <select class="free-element" name="free-element">
                  <option value="coding">Coding</option>
                  <option value="logo_design">Logo Design</option>
                  <option value="marketing">Marketing Digital</option>
                  <option value="traduccion">Traducción</option>
                </select>
        <input type="text" name="usuario" value="" placeholder="Nombre de usuario"class="input-half" required>
        <input type="password" name="clave" value=""placeholder="Contraseña"class="input-half" required>
        <input type="submit" name="" value="Registrar" class="btn-enviar">
        <p class="form__link">¿Ya tienes una cuenta? <a href="index.php">Ingresar</a> </p>


      </div>
    </form>
  </div>
  </body>
</html>
