<?php

require_once '../requires/config.php';
if (isset($_POST["email"]) && isset($_POST["password"]) ) {     

        $email = $_POST["email"]; 
        $password = $_POST["password"]; 

        // $email = stripslashes($_POST["email"]); 
        // $email = ($_POST["email"]);

        // $password = stripslashes($_POST["password"]); 
        // $password = ($_POST["password"]); 

        $sql = ("SELECT * FROM katochi WHERE email LIKE '{$_POST["email"]}' AND password LIKE '{$_POST["password"]}' ");
        $pre = $pdo->prepare($sql); 
        $pre->execute();

        $user = current($pre->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau

    if (empty($user)) {  //vérifie si le resultat est vide !
         //non connecté
         echo "Email or password is incorrect !";
          
        header('Location:../main.php');
    } else {

        if ($user['admin'] == 1) {  
            header('Location:../page_admin.php');
        } else {
            echo "You're not allowed to go on this page.";
        }
        if ($user['edito'] == 1) {  
            header('Location:../page_edito.php');
        } else {
            echo "You're not allowed to go on this page.";
        }
    }      
}
// header('Location:../index.php');
