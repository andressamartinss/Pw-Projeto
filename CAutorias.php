<form name="autoria" method = "POST" action="">
   
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
        .btn {
    border-radius: 15px;
    text-transform: uppercase;
    color: #fff;
    font-size: 10px;
    padding: 10px 50px;
    cursor: pointer;
    font-weight: bold;
    width: 150px;
    align-self: center;
    border: none;
    margin-top: 1rem;
}

.btn-con {
    background-color: transparent;
    border: 1px solid #fff;
    transition: background-color .5s;
}
.btn-con:hover {
   
    background-color: #fff;
    color:  #ce85ce;
}

.btn-lim {
    background-color: transparent;
    border: 1px solid #fff;
    transition: background-color .5s;
}
.btn-lim:hover {
    background-color: #fff;
    c
            
            }
        li {
            margin-bottom: 10px;
          
        }

        button {
            display: block;
            padding: 10px;
            width: 5%;
            background: #A1FFFF;
            background-color:  #ce85ce;
    border: 1px solid  #ce85ce;
    transition: background-color .5s;
            
        
            
        }
        a{
            text-decoration: none;
            color:  #fff;
        }

        a:hover {
            background: #DDA0DD;
          
        }
        </style>
 <fieldset id="a">
  <legend><h1> Dados do autoria:</h1></legend>
   <p>Editora: <input name="txte" type="text" size="40" maxlength="40" placeholder="Editora">
   <p> Dta de Lancamento: <input name ="txtd" type="date" size="40" placeholder="00/00/0000"></p>
   <p> Cod livro: <input name ="txtc" type="text" size="35" placeholder="0"></p>
   <p> Cod Autor: <input name ="txtca" type="text" size="35" placeholder="0"></p>

   </fieldset>
   <br>
   <fieldset id="b">
     <legend><b> Opções: </b></legend>
      <br>
      <input class="btn btn-con" type="submit" value="Cadastrar"> &nbsp;&nbsp;
      <input class="btn btn-lim" type="reset" value="limpar">
      </fieldset>
      
      </form>
      <?php
      extract($_POST, EXTR_OVERWRITE);
      if(isset($btnenviar))
      {

        include_once 'Autorias.php';
        $pro=new Autorias();
        $pro-> setEditora($txte);
        $pro->setDatal($txtd);
        $pro->setCodl($txtc);
        $pro->setCoda($txtca);
        echo "<h3><br><br>". $pro->salvar()."</h3>";
      }
        echo "<br><br><button><a href = 'menu.html'> Voltar </a></button> ";
      ?>
      <br>
        
     
          <body>
              <html>



