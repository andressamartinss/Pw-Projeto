<html>
    <body>
    <style>
        body {
        
            background: linear-gradient(to bottom right, #ce93ce, #E6E6FA);
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
            transform: translate(-50%, -50%);
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

<center><font face="Century Gothic" size="6"><b>Consulta de Autores Cadastrados</b><font size = "4">
    <font face = "Century Gothic" size="3"><b>

</b></center>
<br>
<font size="4">

<form name ="autor" method="POST" action="">
    <fieldset id="a">
        <legend><b>Informe o nome do autor desejado:</b></legend>
        <p>Nome:<input name="txtnome" type="text" size="0" maxlength="40" placeholder="Nome do autor..">
        <br><br><center>
            <input name="btnenviar" type="submit" value="Consultar">&nbsp; &nbsp;
            <input name=limpar type="reset" value="Limpar">
</fieldset>


<br>


<fieldset id="b">
    <legend><b>Resultado:</b></legend>
    
    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
        include_once 'Autores.php';
        $p = new Autores();
        $p->setNome($txtnome.'%');//o % serve para buscar o a pesquisa      
        $pro_bd=$p->consultar();
        foreach($pro_bd as $pro_mostrar)
        {
            ?> <br>
            <b> <?php echo "Cod_Autor: " . $pro_mostrar[0];//como é mariz - posição 0 ?></b> &nbsp;  &nbsp; &nbsp; &nbsp;
            <b> <?php echo "NomeAutor: " . $pro_mostrar[1];//como é mariz - posição 1 ?></b>&nbsp;  &nbsp;  &nbsp; &nbsp;
            <b> <?php echo "Sobrenome: " .$pro_mostrar[2];//como é mariz - posição 2 ?></b>&nbsp;  &nbsp;  &nbsp;  &nbsp;
            <b> <?php echo "Email: " .$pro_mostrar[3];//como é mariz - posição 3 ?></b>&nbsp;  &nbsp;  &nbsp;  &nbsp;
            <b> <?php echo "Nasc: " .$pro_mostrar[4];//como é mariz - posição 4 ?></b>&nbsp;  &nbsp;  &nbsp;  &nbsp;
            <?php

        }
    }
    ?>
    </fieldset>
<center>  <br><br><br><br>
  <button><a href="menu.html">Voltar</a></button>
</form>
</html>