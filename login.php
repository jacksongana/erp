<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LGX Login Form </title>
  <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
  
  <div class="wrapper">
    <form action="#">
     <img class="logo"  src="image/Fichier 1.png" alt="logo LGX France">
        <div class="input-field">
        <label class="text">Email</label>
        <input type="text" required>
      </div>
      <div class="input-field">
      <label class="text" >Mot de passe</label>
        <input type="password" required>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Se souvenir de moi</p>
        </label>
        <a href="mdp.php">Mot de passe oubliè ?</a>
      </div>
      <button type="submit">Se connecter</button>
    </form>
  </div>
  
</body>
</html>