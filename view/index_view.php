<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>

  <!-- CSS only Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="css/style.css">
</head>

<body class="vh-100 gradient-custom">

  <div class="container col-12 d-flex flex-row-reverse">
    <a href="disconnect.php" class="btn btn-danger mt-5">Se déconnecter</a>
  </div>


  <div class="container col-12">
    <h2 class="text-white">Bonjour <?= $name['user_first_name'] ?></h2>
  </div>

  <div class="container col-12">
    <form method="GET" id="orderForm" class="d-flex justify-content-end">
      <select name="order" id="order">
        <option value="">Trier par</option>
        <option value="ASC">Date croissant</option>
        <option value="DESC">Date décroissant</option>
      </select>
    </form>
  </div>
  </div>

  <div class="container col-12">
    <a href="add.php" class=" btn btn-primary btn-lg text-center mb-2">Ajouter tache</a>
  </div>


  <form action="" method="post">

    <?php 
foreach($tasks as $task) : ?>

    <div class="container col-12">
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">

          <div class="align-items-center col-4">
            <input value="<?= $task['id'] ?>" type="checkbox" name="selectedTask[]" id="">

            <span class="<?php 
      if($task['is_done'] == 1){ echo "text-decoration-line-through";
      }else{echo "";} ?>"><?= $task['name'] ?></span>

          </div>


          <div class="col-3 text-center">
            <?php 

      if($task['is_done'] == 1){
      echo '<p class="w-50" id="dejaFait">Déja fait<p>';
      }elseif ($task['to_do_at'] > $today){
         echo '<p class="w-50" id="enCours">En cours<p>';
      }else{
        echo '<p class="w-50" id="enRetard">En Retard<p>';
      }
        ?>
          </div>
          <div class="col-2">
            <?= $task['to_do_at']?>
          </div>

          <div class="col-2">
            <a href="edit.php?id=<?=$task['id']?>" class="btn btn-warning btn-sm">Modifier</a>
          </div>
        </li>
      </ul>

    </div>
    <?php endforeach ?>

    <?php  
if (isset($_POST['selectedTask'])){

  $_SESSION['selectedTask']= $_POST['selectedTask'];
}

if(isset($task['id']) == null){

echo '<div class="text-center text-white h3">Aucune tâche prévue<div>';
}
?>

    <div class="container text-center mt-4">
      <button type="submit" class="btn btn-danger btn-lg" name="delete">Supprimer</button>
      <button type="submit" class="btn btn-success btn-lg" name="is_done">Déja fait</button>
    </div>
  </form>

<script src="js/index.js"></script>
</body>

</html>