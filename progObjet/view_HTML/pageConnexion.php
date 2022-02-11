<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title> Page accueil </title>
  <link rel="stylesheet" type="text/css" href="neonCSS.css">
    <div class="login-box">

      <h2> Formulaires </h2>

      <form action = "../model_DAO/créationUser.php" method = "GET">

        <div class="user-box">
          <input type="text" placeholder="Nom" name = "login">
        </div>

        <div class="user-box">
          <input type="password" placeholder="Mot de passe" name = "mdp">
        </div>

        <a>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <input id="btn-send" type="submit" value="Validé">
        </a>

      </form>

    </div> 
</html>