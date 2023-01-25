<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Controle de notas
      </title>
	  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&family=Titillium+Web&display=swap" rel="stylesheet">
    <style>
        	fieldset{
            font-family: 'Titillium Web', sans-serif;
            margin: auto;
            height: 300px;
            width: 400px;
            padding-top: 20px;
            font-size: 21px;
            text-align: center;
        }
        table{
         margin: auto;
        }
        .buttom{
            padding: 10px;
            border-radius: 10px;
            display: inline;
            margin-top: 10px;
        }
        .buttom:hover{
            background-color: black;
            color: white;
        }
        h1{
			   font-size: 30px;
            font-family: 'Titillium Web', sans-serif; 
        }

    </style>
   </head>
   <body>
   <?php
     session_start();
     if(!isset($_SESSION['totalalunos'])){
         $_SESSION['totalalunos']=0;

     }
        ?>
     <h1> <center><strong>Controle de notas</strong></center></h1>
	  <fieldset>
      <form action="media.php" method = "post">
	     <table>
		    <tr>
			   <td>Aluno</td>
			   <td><input type="text" name="aluno" size = "15" maxlength="50" style="text-transform:uppercase" required></td>
			</tr>
			<tr>
			   <td>Primeiro bimestre</td>
			   <td><input type="text" name="b1" size = "5" maxlength="5"></td>
			</tr>
			<tr>
			   <td>Segundo bimestre:</td>
			   <td><input type="text" name="b2" size = "5" maxlength="5"></td>
			</tr>
			<tr>
			   <td>Terceiro bimestre:</td>
			   <td><input type="text" name="b3" size = "5" maxlength="5"></td>
			</tr>			
			<tr>
			   <td>Quarto bimestre:</td>
			   <td><input type="text" name="b4" size = "5" maxlength="5"></td>
			</tr>
		 </table> 
       <br>
		 <input class="buttom" type="submit" value="Calcular media">
		 </form>
		 <form action="pagina3.php"> 
	    <input class="buttom" type="submit" value="Resultados">
	</form> 
   </fieldset>
   </body>
</html>