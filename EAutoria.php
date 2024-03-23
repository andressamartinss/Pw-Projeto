<html>
    <body>
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
            position: center;
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
<center><font face="Century Gothic" size="6"><b>Exclusão de Autoria</b><font size = "4">
    <font face = "Century Gothic" size="3"><b>

</b></center>
<br>
<font size="4">

<form name ="autoria" method="POST" action="">
    <fieldset id="a">
        <legend><b>Informe o Cod autor desejado:</b></legend>
        <p>Cod Autor:<input name="txtid" type="text" size="20" maxlength="5" placeholder="Cod Autor..">
        <br><br><center>
            <input name="btnenviar" type="submit" value="Excluir">&nbsp; &nbsp;
            <input name=limpar type="reset" value="Limpar">
</fieldset>
</form>

<fieldset id="b">
    <legend><b> Resultado:</b></legend>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
        include_once'Autorias.php';
        $p = new Autorias();
        $p->setCoda($txtid);
        echo "<h3>" . $p->exclusao(). "</h3>";
    }
    ?>
    </fieldset>
    <center> <br><br><br><br>
    <button><a href="menu.html">Voltar</a></button>
</body>
</html>