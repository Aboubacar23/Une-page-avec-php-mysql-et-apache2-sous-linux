<!DOCTYPE html>
<html>
<head>
	<title>liste</title>
	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link href="bootstrap.min.css" rel="stylesheet" />
</head>

<body>

     <h1>La Liste des personnes</h1>
    <div class="container">
        <div class="row">
           <div class="col-sm-8">
      <table class="table table-dark">
         <tr class="tr_class">
            <td>ID</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Age</td>
            <td>Adresse</td>
         </tr>
    
    <?php

     include("connexion.php");

           $req="SELECT * FROM personne";

           $resultat=mysqli_query($base,$req);
           
           if (mysqli_num_rows($resultat)>0) {

              while ($ligne=mysqli_fetch_assoc($resultat)) {
                echo "</tr>";
                echo"<td>".$ligne['id']."</td>";
                echo"<td>".$ligne['nom']."</td>";
                echo"<td>".$ligne['prenom']."</td>";
                echo"<td>".$ligne['age']."</td>";
                echo"<td>".$ligne['adresse']."</td>";
                echo "<td><a href='supprimer.php?idPro=" .$ligne['id']."'><i class='fa fa-trash'></i></a></td>";
                echo "<td><a href='form_mof.php?idPro=" .$ligne['id']."'><i class='fa fa-edit'></i></a></td>";
                echo "</tr>";
              }
           }

      ?>

 </table>
 
           </div>
           <div class="col-sm-4">
              <p><a href="formulaire.html" target="secbox"><button type="button" id='idbt'>Ajouter</button></a></p>
              <p><a href="index.html" target="secbox"><button type="button" id='idbt'>Retour à l'index</button></a></p>
           </div>
        </div>
      </div>  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>