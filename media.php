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
		body{
			text-align: center;
            font-family: 'Titillium Web', sans-serif;
            font-size: 20pt;
		}
		h1{
			font-size: 30px;
		}
		.buttom{
            padding: 10px;
            border-radius: 10px;
            margin-top: 30px;
			margin: auto;
        }
        .buttom:hover{
            background-color: black;
            color: white;
        }
    </style>
   </head>
   <body>
    <strong><h1>Controle de notas</h1></strong> 
	  <?php
	  	 session_start();
	     $b1 = floatval($_POST['b1']);
		 $b2 = floatval($_POST['b2']);
		 $b3 = floatval($_POST['b3']);
		 $b4 = floatval($_POST['b4']);
		 $media = ($b1+$b2+$b3+$b4)/4;
		if(!isset($_SESSION['medias'])){
		$_SESSION['medias']=0;
		}
		$_SESSION['medias']+=$media;
		 echo "A média do aluno " . strtoupper($_POST['aluno']) . " é $media <br><br>";
		 if(!isset($_SESSION['nome'])){
		 $_SESSION['nome']=$_POST['aluno'];
		 }
		 if(!isset($_SESSION['nomeum'])){
			$_SESSION['nomeum']=$_POST['aluno'];
			}
		 if(!isset($_SESSION['maior'])){
			$_SESSION['maior']=$media;
			} 
			if($_SESSION['maior']<$media){
				$_SESSION['maior']=$media;
				$_SESSION['nome']=$_POST['aluno'];
			 }	
			if(!isset($_SESSION['menor'])){
				$_SESSION['menor']=$media;
				} 
				if($_SESSION['menor']>$media){
					$_SESSION['menor']=$media;
					$_SESSION['nomeum']=$_POST['aluno'];
				 }	
		if(!isset($_SESSION['aprovados'])){
			$_SESSION['aprovados']=0;
			}
			if(!isset($_SESSION['reprovados'])){
				$_SESSION['reprovados']=0;
				}
				if(!isset($_SESSION['recup'])){
					$_SESSION['recup']=0;
					}
		 if($media >= 7){
		    echo "APROVADO";
			$_SESSION['aprovados']+=1;
		 } else if($media < 2.5){	 
			   echo "REPROVADO";
				$_SESSION['reprovados']+=1;
				}	
			else{
			   echo "RECUPERAÇÃO";
				$_SESSION['recup']+=1;
				}  	 
	  ?>
	  <br>
	  <button onclick="history.back()" class="buttom"> Voltar </button> 
   </body>
</html>