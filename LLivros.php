<html>
<body>
  <style>
    body {
      background: linear-gradient(to bottom right, #D8BFD8, #FFFFFF);
      background-repeat: no-repeat;
      background-attachment: fixed;
      margin: 0 auto;
      margin-top: 100px;
      padding: 50px;
      border-radius: 10px;
    }

    b {
      color: #fff;
      text-align: center;
    }

    h1 {
      position: absolute;
      top: 10%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 45px;
      margin-bottom: 20px;
      color: #fff;
    }

    button {
      display: block;
      padding: 10px;
      width: 5%;
      background: #ECD4EA;
      border-radius: 20px;
      text-align: center;
      color: #A586E3;
      font-family: Arial, sans-serif;
    }

    button:hover {
      background: #CC99FE;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 50px;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      color: #fff;
      background-color:  #DDA0DD;
    }

    tr:nth-child(even) {
      background-color: #CC99FE;
    }

    th {
      background-color: #CC99FE;
    }
  </style>

  <section>
    <center>
      <font face="Century Gothic">
        <h1>Livros</h1>
        <br><br>
        <font size="4">
          <table>
          <?php
            include_once 'Livros.php';
            $livros = new Livros();
            $lista_livros = $livros->listar();
          ?>

          <table>
            <tr>
              <th>Código do Livro</th>
              <th>Título</th>
              <th>Categoria</th>
              <th>ISBN</th>
              <th>Idioma</th>
              <th>Quantidade de Páginas</th>
            </tr>
            <?php
              if (is_array($lista_livros)) {
                foreach ($lista_livros as $livro) {
                  echo "<tr>";
                  echo "<td>" . $livro[0] . "</td>";
                  echo "<td>" . $livro[1] . "</td>";
                  echo "<td>" . $livro[2] . "</td>";
                  echo "<td>" . $livro[3] . "</td>";
                  echo "<td>" . $livro[4] . "</td>";
                  echo "<td>" . $livro[5] . "</td>";
                  echo "</tr>";
                }
              }
            ?>
          </table>
          <br><br>
          <?php
            echo "<br><br><button><a href='menu.html'>Voltar</a></button> ";
          ?>
</body>
</html>
