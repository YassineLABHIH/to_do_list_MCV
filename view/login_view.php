<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS only Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="vh-100 gradient-custom">

    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-2">

                                <div class="container text-white my-3">
                                    <?php if (isset($_SESSION['registration_message'])) {
                                        echo $_SESSION['registration_message'];
                                    } ?>
                                </div>

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Entrez votre mail et votre mot de passe !</p>
                                <form action="" method="post">
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="login_email" id="login_email"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="login_email">Mail</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="login_password" id="login_password"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="login_password">Mot de passe</label>
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Vous avez oublé
                                            votre mot de passe ?</a></p>

                                    <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Se
                                        connecter</button>
                                </form>

                                <div class="container text-white mt-3">
                                    <?php 
                                        if (isset($message)){
                                            echo $message;
                                        } 
                                    ?>
                                </div>


                            </div>

                            <div>
                                <p class="mb-0">Vous n'avez pas de compte ? <a href="register.php"
                                        class="text-white-50 fw-bold"> S'inscrire</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>


</html>