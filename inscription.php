<?php
  include('connexion.php');

   if (!$base)
   {
      die("Connection failed: ".mysqli_connect_error());
   }
   else
   {


     $nom=addslashes($_POST['nom']);
     $prenom=addslashes($_POST['prenom']);
     $age=addslashes($_POST['age']);
     $adresse=addslashes($_POST['adresse']);

     // ajouter avec sql

     $sql="INSERT INTO personne(nom,prenom,age,adresse) VALUES ('$nom','$prenom','$age','$adresse')";

     $resultat=mysqli_query($base, $sql);

     if ($resultat)
      {
        header("location:affichage.php");
        exit();

      } else
      {
      echo "Erreur: ".$sql."<br>".mysqli_error($base);
      }
      mysqli_close($base);
    }

?>