<?php


include ('../db_gl.php');

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `login` WHERE id ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Nom dutilisateur et mot de passe ajoutés") </script>';
							
						
				}
			header("Location: usersetting.php");
		
?>