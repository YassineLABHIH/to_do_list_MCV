<?php

class User{
    private int $id;
    private string $user_mail;
    private string $user_name;
    private string $user_first_name;
    private string $user_password;

// Id
    public function getId() : int{
        return $this->id;
    }

//Mail
    public function getMail() : string{
        return $this->user_mail;
    }

    public function setMail($user_mail) : void{
       //vérification que l'adresse mail saisie est valide
        if (filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Veuillez saisir une adresse mail valide");
        }
 
      $this->user_mail = $user_mail;
    }
//User Name
    public function getUserName() : string{
        return $this->user_name;
    }

    public function setUserName($user_name) : void{
        $this->user_name = $user_name;
    }

//User First Name
    public function getUserFirstMame() : string{
        return $this->user_first_name;
    }

    public function setUserFirstMame($user_first_name) : void{
        $this->user_first_name = $user_first_name;
    }
//Password
    public function getUserPassword() : string{
        return $this->user_password;
    }

    public function setUserPassword($user_password) : void{
       
       // Verification force mot de passe
        $point = 0;
        $longueur = strlen($user_password);

        for($i = 0; $i < $longueur; $i++) 	{
            $lettre = isset($user_passwordp[$i]);
            if ($lettre>='a' && $lettre<='z'){
                $point = $point + 1;
            }
            if ($lettre>='A' && $lettre <='Z'){
                $point = $point + 1;
            }
            if ($lettre>='0' && $lettre<='9'){
                $point = $point + 1;
            }
            else {
                $point = $point + 1;
            }

            if ($point > 4 && $longueur > 8){
                throw new Exception("Votre mot de passe doit : Faire au moins 8 caractères et contenir au moins une minuscule, une majuscule, un caractère spécial et un chiffre");
            }
        }
        $this->user_password = $user_password;
    }

// Verification que l'email  saisie ne se trouve dans la table user de la base donnée

public function isExisted(){

$cnx = new Connexion;
$pdo = $cnx->getPdo();

$recup_user = $pdo->prepare('SELECT * FROM user WHERE email = ?');
$recup_user->execute[$this->user_mail];
$count = $recup_user->rowCount();
if ($count > 0) {
    throw new Exception("Vous ne pouvez pas vous inscrire avec ce mail car il est déja inscrit");

};}

//Insertion dans la base de donnée
    public function insertUser(){

        try {
        // START : ouverture du canal de discussion  
    $pdo = new PDO(
        "mysql:host=localhost;dbname=to_do_list",
        "root",
       "",
   
      );
        // END : ouverture du canal de discussion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $registration = $pdo->prepare("INSERT INTO user (username, user_first_name, email, pass) VALUES (:username, :user_first_name, :email, :pass)");
        $registration->execute([
            ':username' => $this->user_name,
            ':user_first_name' => $this->user_first_name,
            ':email' => $this->user_mail,
            ':pass' => $this->user_password
        ]);

    unset($pdo);
    }


}

