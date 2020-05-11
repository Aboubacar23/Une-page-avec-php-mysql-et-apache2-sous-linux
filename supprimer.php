<?php

   include('connexion.php');

    if(isset($_GET['idPro'])){

    $sup="DELETE FROM  personne WHERE id='" .$_GET['idPro']."' LIMIT 1";

    $resultat=mysqli_query($base,$sup);

    if ($resultat)
     {

      header("location:affichage.php");
      exit();
    }

    else
     {
      echo " l'emploi n'a pas été supprimer";
    }
    
    }
    else {
      echo "erreur:";
    }


 ?>