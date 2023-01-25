<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Calculo de notas
      </title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&family=Titillium+Web&display=swap" rel="stylesheet">
    <style>
	  fieldset{
            font-family: 'Titillium Web', sans-serif;
            margin: auto;
            height: 400px;
            width: 500px;
            font-size: 20px;
            padding: 25px;
            text-align: center;
        }
        .buttom{
            padding: 10px;
            border-radius: 10px;
            display: block;
            margin-left: 400px;
        }
        .buttom:hover{
            background-color: black;
            color: white;
        }
		</style>
   </head>
   <body>
    <fieldset>
	  <?php
          session_start();
          echo "Numero de alunos: ".$_SESSION['totalalunos']+=1;
          echo "<br>";
          echo "Media da turma: ".$_SESSION['medias']/$_SESSION['totalalunos'];
          echo "<br>";
          echo "O aluno ". $_SESSION['nome']." teve a maior media: ".$_SESSION['maior'];
          echo "<br>";
          echo "O aluno ". $_SESSION['nomeum']." teve a menor media: ".$_SESSION['menor'];
          echo "<br>";
          echo "Numero de alunos aprovados: ". $_SESSION['aprovados'];
          echo "<br>";
          echo "Porcentagem de alunos aprovados: ".(100*($_SESSION['totalalunos']-$_SESSION['reprovados']-$_SESSION['recup']))/$_SESSION['totalalunos']. "%";
          echo "<br>";
          echo "Numero de alunos em recuperação: ". $_SESSION['recup'];
          echo "<br>";
          echo "Porcentagem de alunos em recuperação: ". (100*($_SESSION['totalalunos']-$_SESSION['aprovados']-$_SESSION['reprovados']))/$_SESSION['totalalunos'] . "%";
          echo "<br>";
          echo "Numero de alunos reprovados: ".$_SESSION['reprovados'];
          echo "<br>";
          echo "Porcentagem de alunos reprovados: ". (100*($_SESSION['totalalunos']-$_SESSION['aprovados']-$_SESSION['recup']))/$_SESSION['totalalunos'] . "%";
          echo "<br>";   
	  ?>
      <br>
	  <button onclick="history.back()" class="buttom"> Voltar </button> 
  	</fieldset>
    </body>
</html>