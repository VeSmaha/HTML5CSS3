<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Listagem
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
            padding-top: 10px;
        }
    </style>
   </head>
   <body>
      <table>
         <tr>
            <td>Nome &nbsp; &nbsp;</td> 
            <td>Mes &nbsp;&nbsp;</td>
            <td>Ano &nbsp; &nbsp;</td>
            <td>Horas &nbsp;&nbsp;</td>
            <td>Valor &nbsp;&nbsp;</td>
         </tr>
         <tr>
            <td>
         <?php
         session_start();
         foreach( $_SESSION['funcionarios']as $x){
            echo $x['funcionario'].'<br>';
         }
         ?>
         </td>
            <td>
               <?php
            foreach( $_SESSION['funcionarios'] as $x){
            echo $x['mes'].'<br>';
         }
         ?>
          </td>
          <td>
            <?php
          foreach( $_SESSION['funcionarios'] as $x){
            echo $x['ano'].'<br>';
         }
         ?>
         </td>
         <td>
            <?php
         foreach( $_SESSION['funcionarios'] as $x){ 
            echo $x['horas'].'<br>';
         }
         ?>
         </td>
         <td>
            <?php
         foreach( $_SESSION['funcionarios'] as $x){
            echo $x['valor'].'<br>';
         }
         ?>
     
      </tr>
        
     
      </table>
   </body>
</html>