<?php

  include("connexion.php");

  if(isset($_POST["modifier"]))
  {

     $id1=$_POST['id1'];
     $nom1=$_POST['nom1'];
     $prenom1=$_POST['prenom1'];
     $age1=$_POST['age1'];
     $adresse1=$_POST['adresse1'];

     

   $modif="UPDATE personne SET nom='$nom1' , prenom='$prenom1' , age='$age1' , adresse='$adresse1'
    WHERE id='$id1'";

     $resultat=mysqli_query($base,$modif);

    if ($resultat)
     {
        header("location:affichage.php");
        exit();
    }
    else {
      echo "erreur modification";
    }

 }


?>