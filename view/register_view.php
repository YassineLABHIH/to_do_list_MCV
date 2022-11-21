<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="vh-100 gradient-custom">

  <section>
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body pt-5 pb-2 px-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Inscription</h2>
                <p class="text-white-50 mb-5">Pour accéder à 2do veuillez vous inscrire</p>
                <form action="" method="post">
                  <div class="form-outline form-white mb-4">
                    <input type="text" name="register_email" id="register_email" class="form-control form-control-lg" />
                    <label class="form-label" for="register_email">Mail</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" name="user_name" id="user_name" class="form-control form-control-lg" />
                    <label class="form-label" for="user_name">Nom</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" name="user_first_name" id="user_first_name"
                      class="form-control form-control-lg" />
                    <label class="form-label" for="user_first_name">Prénom</label>
                  </div>


                  <div class="form-outline form-white mb-4">
                    <input type="password" name="user_password" id="user_password"
                      class="form-control form-control-lg" />
                    <label class="form-label" for="user_password">Mot de passe</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" name="user_confirm_password" id="user_confirm_password"
                      class="form-control form-control-lg" />
                    <label class="form-label" for="user_confirm_password">Confirmez votre mot de passe</label>
                  </div>

                  <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">S'inscrire</button>
                </form>

                <div class="container text-white mt-3 mb-0 p-0">
                  <p class="text-white mt-3 mb-0 p-0"> 
                  <?php 
                    if(isset($message)){ 
                      echo $message;
                     } ?></p>
                </div>

              </div>
              <div>
                <p class="">Vous avez déja un compte ? <a href="index.php" class="text-white-50 fw-bold"> Se
                    connecter</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

</body>

</html>