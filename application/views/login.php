<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="card">
          <div class="card-header">
            <!-- <img src="utilisateur.png" alt="utilisateur"> -->
            <h3 class="card-title">Log in</h3>
          </div>
          <div class="card-body">

            <?php if (isset($error)) { ?>
              <div class="form-group error">
                <?php echo $error ?>
              </div>
            <?php } ?>
            <form action="<?php echo base_url('user/login') ?>" method="post">
              <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i></label>
                <input name="email" type="text" class="form-control" id="email" placeholder="Entrez votre adresse email">
              </div>
              <div class="form-group">
                <label for="password"><i class="fas fa-lock"></i></label>
                <input name="mdp" type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
              </div>
              <input type="submit" class="btn btn-primary btn-block" value="Se connecter">
              <a href="" class="btn btn-secondary btn-block">S'inscrire</a>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>