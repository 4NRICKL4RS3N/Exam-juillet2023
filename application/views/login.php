<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="card">
              <div class="card-header">
                <img src="utilisateur.png" alt="utilisateur">
                <h3 class="card-title">Sign in</h3>
              </div>
              <div class="card-body">
                <form>
                      <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i></label>
                        <input type="text" class="form-control" id="email" placeholder="Entrez votre adresse email">
                      </div>
                      
                      <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i></label>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                      </div>
                  <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                  <a href="inscription.html" class="btn btn-secondary btn-block">S'inscrire</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

     
</body>
</html>