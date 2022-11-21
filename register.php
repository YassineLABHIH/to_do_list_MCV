<?php


require_once 'partials/_check_is_not_logged.php';
require_once 'models/User.php';

if(isset($_POST['submit'])){



    require_once 'partials/_start_session.php';
    // vérification de la présence des datas dans tous les champs
    if (empty($_POST['register_email']) || empty($_POST['user_name'] ) || empty($_POST['user_first_name'] ) || empty($_POST['user_password'] ) || empty($_POST['user_confirm_password'] )) {
        $_SESSION['errors'][] = "veuillez remplir tous les champs";
        
    }else{
    // vérifier l'adresse mail 
    $secured_data = [
        'register_email' => htmlspecialchars($_POST['register_email']),
        'user_name' => htmlspecialchars($_POST['user_name']),
        'user_first_name' => htmlspecialchars($_POST['user_first_name']),
        'user_password' => htmlspecialchars($_POST['user_password']),
        'user_confirm_password' => htmlspecialchars($_POST['user_confirm_password'])
    ];
    
 
    //      1- vérifier la structure de l'adresse mail
    try {
        $user = new User();
        $user->setMail($secured_data['register_email']);
        $user->setPassword($secured_data['user_password']);
    } catch (Exception $e) {
        var_dump($e->getMessage()); die;
        $_SESSION['errors'] = $e->getMessage();
    }
    
    if(empty($_SESSION['errors']))    {
       
        if ($user->isExisted()) {
            $_SESSION['errors'][] = "cette adresse mail existe déjà";
        }
        
    }

    if(empty($_SESSION['errors']))    {

        if($secured_data['password'] != $secured_data['password_repeat']){
            $_SESSION['errors'][] = "Les deux mots de passe ne correspondent pas";
        }   
        
    }

    
    if(empty($_SESSION['errors']))    {
    
        $user->insert();
        header('Location: login.php');
        exit;
    }

        
    }

    
}

require_once 'views/register.php'; 