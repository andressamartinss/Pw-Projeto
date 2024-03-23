<form name="livro" method = "POST" action="">
    <style>
        body {
        
            background: linear-gradient(to bottom right, #D8BFD8, #FFFFFF);
            color: white;
            font-family: Arial, sans-serif;
            margin: 0 auto;
            margin-top: 190px;
            padding: 210px;
            border-radius: 10px;
    
        }

        h1 {
            position: absolute;
            top: 10%;
            left: 10%;
            transform: translate(-35%, -35%);
            margin: 199;
            float: left;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            
        }

        b{
            list-style-type: none;
            padding: 0;
            margin: 10px auto;
            width: 20px;
            float: left;
            position: absolute;
            transform: translate(-50%, -50%);
        
            
        }
  btnenviar{
            display: block;
            padding: 10px;
            width: 5%;
            background: #A1FFFF;
            text-decoration: none;
            border-radius: 10px;
            text-align: center;
            
              
            
            }
        li {
            margin-bottom: 10px;
          
        }

        button {
            display: block;
            padding: 10px;
            width: 5%;
            background:  #DDA0DD;
            text-decoration: none;
            border-radius: 10px;
            text-align: center;
        
            
        }
        

        a:hover {
            background: #DDA0DD;
          
        }
        </style>
 <fieldset id="a">
  <legend><h1> Dados do livro:</h1></legend>
   <p>Cod livro: <input name="txtc" type="text" size="40" maxlength="40" placeholder="0">
   <p> Título: <input name ="txtt" type="text" size="40" placeholder="Título"></p>
   <p> Categoria: <input name ="txtca" type="text" size="35" placeholder="Categoria"></p>
   <p> ISBN: <input name ="txti" type="text" size="35" placeholder="ISBN"></p>
   <p> Idioma: <input name ="txtid" type="text" size="35" placeholder="Idioma"></p>
   <p> Quant de páginas: <input name ="txtp" type="text" size="35" placeholder="0"></p>

   </fieldset>
   <br>
   <fieldset id="b">
     <legend><b> Opções: </b></legend>
      <br>
      <input name="btnenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
      <input name="limpar" type="reset" value="limpar">
      </fieldset>
      
      </form>
      <?php
      extract($_POST, EXTR_OVERWRITE);
      if(isset($btnenviar))
      {

        include_once 'Livros.php';
        $pro=new Livros();
        $pro->setCod_($txtc);
        $pro->setTitulo($txtt);
        $pro->setCategoria($txtca);
        $pro->setIsbn($txti);
        $pro->setIdioma($txtid);
        $pro->setQtde($txtp);
        echo "<h3><br><br>". $pro->salvar()."</h3>";
      }
        echo "<br><br><button><a href = 'menu.html'> Voltar </a></button> ";
      ?>
      <br>
        
          <body>
              <html>



