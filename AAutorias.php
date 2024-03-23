

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

 /*   b{
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
        text-align: center;*/
        
          
        
        
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
.btn-con {
    background-color: transparent;
    border: 1px solid #fff;
    transition: background-color .5s;
}
.btn-con:hover {
   
    background-color: #fff;
    color:  #ce85ce;
} 
.btn-vol {
    background-color:#ce85ce;
    border: 1px solid #fff;
    transition: background-color .5s;
}
.btn-vol:hover {
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
    color:  #ce85ce;
}
    
a{
    text-decoration: none;
    color: #fff;
}
    a:hover {
        background: #DDA0DD;
      
    }
        </style>
<center><font face= "Century Gothic" size="4"><h1>Alteração de Autoria Cadastrados</h1><font size="4"></center><br>
<font size= "3">
    <form name="autoria" method= "POST" action = "A2Autorias.php">
        <fieldset>
            <legend><b>Informe o ID do autor desejado: </b></legend>
            <p> Id: <input name="txtid" type="text"
            <br><br><center>
            <input class="btn btn-con" type="submit" value="Consultar"> &nbsp;&nbsp;
            <input class="btn btn-lim" type="reset" value="Limpar">
    </fildset>
    </form>
    <center> <br><br><br><br>
    <button class= "btn btn-vol"><a href="menu.html">Voltar</a></button>
    </body>
    </html>
 