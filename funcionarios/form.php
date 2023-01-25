<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>folha php</folha></title>
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
      <h1><legend>Folha de Pagamento</legend></h1>
      <fieldset>
      <form action="calculo.php" method="post">
          <table>
          <tr>
              <td>Funcionario:</td>
              <td>
                  <input type="text" name="funcionario" size="20" maxlength="50" style="text-transform:uppercase" PLACEHOLDER="Digite seu nome" require>
              </td>
          </tr>
          <br>
          <tr>
              <td>Mes:</td>
              <td>
              <select name="mes">
                <option value="janeiro" selected>janeiro</option>
                <option value="fevereiro">fevereiro</option>
                <option value="março">março</option>
                <option value="abril">abril</option>
                <option value="maio">maio</option>
                <option value="junho">junho</option>
                <option value="julho">julho</option>
                <option value="agosto">agosto</option>
                <option value="setembro">setembro</option>
                <option value="outubro">outubro</option>
                <option value="novembro">novembro</option>
                <option value="dezembro">dezembro</option>
            </select>
              </td>
          </tr>
          <tr>
              <td>Ano:</td>
              <td>
              <input type="text" name="ano" size="4" maxlength="4" value="aaaa" require>
              </td>
          </tr>
          <tr>
              <td>Horas:</td>
              <td>
              <input type="text" name="horas" size="4" maxlength="4" require>
              </td>
          </tr>
          <tr>
              <td>Valor Hora:</td>
              <td>
              <input type="text" name="valor" size="4" maxlength="6" require>
              </td>
          </tr>
          </table>
          <br>
          <input class="buttom" type="submit" value="Calcular folha">
        </fieldset>
        <a href='listagem.php'>Listar Funcionarios</a>
    </form>
</body>

</html>