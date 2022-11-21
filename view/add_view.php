<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>

    <!-- CSS only Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="vh-100 gradient-custom">

    <div class="container text-center text-white">
        <form action="" method="post">
            <div class="container mt-3">
                <label for="name">Nom</label>
                <input type="text" name="name" id="">
            </div>

            <div class="container mt-3">
                <label for="to_do_at">Jours</label>
                <input type="date" name="to_do_at" id="" value="<?= date('Y-m-d')?>">
            </div>
            <div class="container mt-3">
                <input type="submit" class="btn btn-outline-light">
            </div>
        </form>
    </div>
</body>

</html>