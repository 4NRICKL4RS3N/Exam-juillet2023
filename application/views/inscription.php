<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="inscription.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Inscription</h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="username"><i class="fas fa-user"></i></label>
                    <input type="text" class="form-control" id="username" placeholder="Entrez votre nom d'utilisateur">
                  </div>
                  <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i></label>
                    <input type="text" class="form-control" id="email" placeholder="Entrez votre adresse email">
                  </div>
                  <div class="form-group">
                    <label for="password"><i class="fas fa-lock"></i></label>
                    <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                  </div>
                  <div class="form-group">
                    <label for="confirm-password"><i class="fas fa-lock"></i></label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirmez votre mot de passe">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="remember-password">
                    <label class="form-check-label" for="remember-password">Se souvenir du mot de passe</label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                  <a href="login.html" class="btn btn-secondary btn-block">Se connecter</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>