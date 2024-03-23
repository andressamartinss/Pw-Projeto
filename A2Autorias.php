<style>
         body {
        
        background: linear-gradient(to bottom right, #ce85ce, #FFFFFF);
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

   /* b{
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
        
          
        
        }*/
    li {
        margin-bottom: 10px;
      
    }

   /* button {
        display: block;
        padding: 10px;
        width: 5%;
        background:  #DDA0DD;
        text-decoration: none;
        border-radius: 10px;
        text-align: center;
    
        
    }*/
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
.btn-alt {
    background-color: transparent;
    border: 1px solid #fff;
    transition: background-color .5s;
}
.btn-alt:hover {
    background-color: #fff;
    color:  #ce85ce;
}
.btn-volt {
    background-color:#ce85ce;
    border: 1px solid #fff;
    transition: background-color .5s;
}
.btn-volt:hover {
    background-color: #fff;
    color:  #ce85ce;
}
    
a{

    text-decoration:none;
    color:#fff;
}
    a:hover {
        background: #ce85ce;
      
    }
    </style>
<center><font face= "Century Gothic" size="4"><h1> Alteração de Autoria Cadastrados </h1><font size="4">
<font face= "Century Gothic" size="3"><br>
<fieldset>
    <legend><b> Alterar: </b></legend>

<?php
    $txtid=$_POST["txtid"];
    include_once 'Autorias.php';
    $p = new Autorias();
    $p->setCoda($txtid);
    $pro_bd=$p->alterar();
    ?>
 <br><form name="autoria2" method= "POST" action = "">
     <?php
     foreach($pro_bd as $pro_mostrar)
     {
         ?>
         <input type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0]?>'>
         <b> <?php echo "ID:" . $pro_mostrar[0]; // como é matriz - posição 0 ?></b>
         <br><br><b> <?php echo "Cod_livro:" ;?></b>
         <input type="text" name="txtcl" size="25" value='<?php echo $pro_mostrar[1]?>'>
         <br><br><b> <?php echo "Data: "  ;?></b>
         <input type="text" name="txtdl" size="15" value='<?php echo $pro_mostrar[2]?>'>
         <br><br><b> <?php echo "Editora: "  ;?></b>
         <input type="text" name="txtE" size="30" value='<?php echo $pro_mostrar[3]?>'>
         <br><br><br><center>
         <input class="btn btn-alt" type="submit" value="Alterar" >
    <?php
     }
?>
</form>
    </fieldset>
      
    <?php
    extract ($_POST, EXTR_OVERWRITE);
    if(isset($btnalterar))
    {
        include_once 'Autorias.php';
        $pro = new Autorias();
        $pro->setCodl($txtcl);
        $pro->setDatal($txtdl);
        $pro->setEditora($txtE);
        $pro->setCoda($txtid);
       
        
        echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
        header("location:AAutorias.php");
    }
    ?>
    <center> <br><br><br><br>
    <button class= "btn btn-volt"><a href="menu.html">Voltar</a></button>
</body>
</html>