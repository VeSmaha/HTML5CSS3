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
            font-family: 'Titillium Web', sans-serif;
            margin: auto;
            height: 300px;
            width: 500px;
        }
        table{
            margin: auto;
            font-size: 20px;
            line-height: 2em;
			padding: 20px;
        }
        .buttom{
            padding: 10px;
            border-radius: 10px;
            display: block;
            margin-left: 300px;
        }
        .buttom:hover{
            background-color: black;
            color: white;
        }
        h1{
            text-align: center;
        }
		</style>
   </head>
   <body>
<strong><h1>Controle de notas</h1></strong>  
	  <fieldset>
		<table>
					<tr>
					   <td>Funcionário</td>
					   <td>
					   <?php
						echo strtoupper($_POST['funcionario']);
					   ?>
					   </td>
					</tr>
					<tr>
					   <td>Mês</td>
					   <td align = "right">
					   <?php
						  echo $_POST['mes'];
					   ?>
					   </td>
					</tr>
					<tr>
					   <td>Ano</td>
					   <td align = "right">
					   <?php
						  echo $_POST['ano'];
					   ?>
					   </td>
					</tr>
					<tr>
					   <td>Horas trabalhadas</td>
					   <td align = "right">
					   <?php
						  echo $_POST['horas'];
					   ?>
					   </td>
					</tr>
					<tr>
					   <td>Valor</td>
					   <td align = "right">
					   <?php
						 echo $_POST['valor'];
						 session_start();
						 if(!isset($_SESSION['funcionarios'])){
							$_SESSION['funcionarios']=array();
						 }
						 $funcionariosTemp=array();
						 $funcionariosTemp["funcionario"]=$_POST['funcionario'];
						 $funcionariosTemp['mes'] = intval($_POST['mes']);
						 $funcionariosTemp['ano'] = intval($_POST['ano']);
						 $funcionariosTemp['horas'] = intval($_POST['horas']);
						 $funcionariosTemp['valor'] = floatval($_POST['valor']);
						 array_push( $_SESSION['funcionarios'], $funcionariosTemp);
						
						 
					   ?>
					   </td>
					</tr>
					<tr>
					   <td>Salário bruto</td>
					   <td align = "right">
					   <?php
						  $horas = intval($_POST['horas']);
						  $valor = floatval($_POST['valor']);
						  $bruto = $horas * $valor;
						  echo "$bruto";
					   ?>
					   </td>
					</tr>
					<tr>
					   <td>IR</td>
					   <td align = "right">
					   <?php
						  if($bruto <= 1903.98){
							 $ir = 0;	  
						  }
						  else{
							 if($bruto <= 2826.65){
								$ir = ($bruto * 0.075) - 142.80;						
							 }	
							 else{
								if($bruto <= 3751.06){
								   $ir = ($bruto * 0.15) - 354.80;							   
								}
								else{
								   if($bruto <= 4664.68){ 
									  $ir = ($bruto * 0.225) - 636.13;      	   							  
								   }			
								   else{
									  $ir = ($bruto * 0.275) - 869.36;							  
								   }							   
								}
							 }						 
						  }
						  echo "$ir";
					   ?>
					   </td>
					</tr>
					<tr>
					   <td>INSS</td>
					   <td align = "right">
					   <?php
						  if($bruto <= 1212){
							 $inss = $bruto * 0.075; 	  
						  }
						  else{
							 if($bruto <= 2427.35){
								$inss = $bruto * 0.09;	 
							 }						 
							 else{
								if($bruto <= 3641.03){
								   $inss = $bruto * 0.12;		
								}
								else{
								   $inss = $bruto * 0.14;		
								}							
							 }
						  }
						  echo $inss;
					   ?>
					   </td>
					</tr>
					<tr>
					   <td>FGTS</td>
					   <td align = "right">
					   <?php
						  $fgts = $bruto * 0.08;
						  echo "$fgts";
					   ?>
					   </td>
					</tr>
					<tr>
					   <td>Salário líquido</td>
					   <td align = "right">
					   <?php
						  $liquido = $bruto - $ir - $inss;
						  echo "$liquido";
					   ?>
					   </td>
					</tr>
		</table>
		<button class="buttom" onclick="history.back()"> Voltar </button>
	  </fieldset>
   </body>
</html>