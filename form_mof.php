<!DOCTYPE html>
<html>
<head>
	<title>ajouter une personne</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



</head>
	
	  <?php

       include("connexion.php");


       $num=$_GET['idPro'];

 		$sql="SELECT * FROM personne WHERE id=$num";

 		$resultat=mysqli_query($base,$sql);

 		if(mysqli_num_rows($resultat)==1)
 		{

      while($row2 = mysqli_fetch_assoc($resultat))
      {
        $id=$row2['id'];
        $nom=$row2['nom'];
        $prenom=$row2['prenom'];
        $age=$row2['age'];
        $adresse=$row2['adresse'];
     

 		}
    }
 			else
 			{
 				echo"erreur:";
 				}
?>

<body>

	 <h1>Modifier la Personne <?php echo $id; ?>  </h1>
	 <form method="post" action="modifier.php">
	 	
	 	<table class="table">
			<tr>
				<td><input type="hidden" name="id1" required="" value="<?php echo $id; ?>"></td>
			</tr>
			<tr>
				<td>Nom</td>
				<td><input type="text" name="nom1" required="" value="<?php echo $nom; ?>"></td>
			</tr>
			<tr>
				<td>Prenom</td>
				<td><input type="text" name="prenom1" required="" value="<?php echo $prenom; ?>"></td>
			</tr>	
			<tr>
				<td>Age</td>
				<td><input type="number" name="age1" required="" value="<?php echo $age; ?>"></td>
			</tr>	
			<tr>
				<td>Adresse</td>
				<td><input type="text" name="adresse1" required="" value="<?php echo $adresse; ?>"></td>
			</tr>	
			<tr>
				<td> <button class="btn btn--radius-2 btn--blue" type="submit" name="modifier">Modifier</button></td>
			</tr> 		
				
	 	</table>

	 </form>

<td> <a href="affichage.php"><button class="btn btn--radius-2 btn--blue" type="submit">Retour</button></a></td>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  
</body>
</html>