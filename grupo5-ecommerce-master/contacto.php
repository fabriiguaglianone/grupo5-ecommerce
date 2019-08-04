<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/estilos.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
            <h1 class="display-4 text-center"> Contacto </h1>
          </div>

          <div class="container form col-xs-8 col-lg-5 formSection">
            <form action="index.php" method="post">
              <label for="name" id="name" class="items">
                <p>Nombre y apellido</p>
              </label>
              <input type="text" name="name" value="" required>

                <label for="mail" id="mail" class="items">  <p>E-mail</p> </label>
              <input type="mail" name="mail" value="" required>

              <label for="telephone" id="telephone" class="items">
                <p>Teléfono</p>
              </label>
              <input type="tel" name="telephone" value="">

<label for="free-element" id="free-element" class="free-element"> <p>Seleccione su rubro freelance</p> </label>

              <select class="free-element" name="free-element">
                <option value="coding">Coding</option>
                <option value="logo_design">Logo Design</option>
                <option value="marketing">Marketing Digital</option>
                <option value="traduccion">Traducción</option>
              </select>

              <label for="contactMessage" id="contactMessage" class="contactMessage">
                <p>Dejanos tu consulta</p>
              </label>
              <textarea name="contactMessage" rows="8"></textarea>

              <button type="submit" name="button" class="btn btn-success btn-form">Enviar</button>
            </form>
          </div>
  </body>
</html>
