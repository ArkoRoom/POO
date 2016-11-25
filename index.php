<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RPG Maker</title>
        <link rel="stylesheet" href="private/vendor/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>
        <div class="container">
            <form action="private/controllers/RpgController.php" method="post">
                <fieldset>
                    <legend>Créer votre héros</legend>
                    <div class="form-group">
                      <label for="inputName">Nom du héros</label>
                      <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Nom du Héros...">
                    </div>
                    <div class="form-group">
                      <label for="inputClass">Classe du héros</label>
                      <select multiple class="form-control" name="inputClass[]">
                        <option>Guerrier</option>
                        <option>Mage</option>
                        <option>Assasin</option>
                      </select>
                    </div>
                </fieldset>
              <fieldset>
                  <legend>Inventaire du héros</legend>
                  <div class="form-group">
                    <label for="inputWeapon">Arme de votre héros</label>
                    <select multiple class="form-control" name="inputWeapon[]">
                      <option>Epée</option>
                      <option>Arc</option>
                      <option>Couteau</option>
                      <option>Baton</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputPotion">Potion de votre héros</label>
                    <select multiple class="form-control" name="inputPotion[]">
                      <option>Potion de Soin</option>
                      <option>Potion de Mana</option>
                      <option>Potion d'Expérience</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputObjects">Objets de votre héros</label>
                    <select multiple class="form-control" name="inputObjects[]">
                      <option>Branche</option>
                      <option>Cailloux</option>
                      <option>Os</option>
                      <option>Poisson</option>
                      <option>Viande</option>
                    </select>
                  </div>
              </fieldset>
              <input type="submit" class="btn btn-default" id="createCharacters" name="createCharacters" value="Valider">
          </form>
        </div>

        <script src="private/vendor/jquery/dist/jquery.min.js" charset="utf-8"></script>
        <script src="private/vendor/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
        <script src="public/js/script.js" charset="utf-8"></script>
    </body>
</html>
