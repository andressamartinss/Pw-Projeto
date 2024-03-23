<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> Validação na entrada de dados</title>

    <script language=javascript>

        function bloqueio(keypress)
        {
            
        if(keypress>=48 && keypress<=57)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
        </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css_/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo de volta!</h2>
                <p class="description description-primary">Para se manter conectado conosco,</p>
                <p class="description description-primary">faça login com suas informações pessoais</p>
                <button id="signin" class="btn btn-primary">Logar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Criar Conta</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class ="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use seu nome para registro:</p>
                <form class="form" method="post" onsubmit="return validateCadastro()">
                <form class="form" method="post">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nomee" placeholder="Nome" required>
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                      
                        <input type="password" name="senhaa" maxlength="4" onkeypress="return bloqueio(window.event.keyCode)" placeholder="Senha" required>
                    </label>
                    <button name="btncontato" class=" btn btn-faleconosco"><a href="contato.php" class="btn-faleconosco">Fale Conosco</button></a>
                    <button class="btn btn-second" name="btncad">Cadastrar</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá, amigo!</h2>
                <p class="description description-primary">Insira seus detalhes pessoais</p>
                <p class="description description-primary">e comece seu login</p>
               
                <button id="signup" class="btn btn-primary">Cadastrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Entrar</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use seu nome:</p>
                <form class="form" method="post">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" placeholder="Nome" required>
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password"  name="senha" maxlength="4" onkeypress="return bloqueio(window.event.keyCode)" placeholder="Senha" required> 
                    </label>
                    <button class="btn btn-second" name="btnacesso">Entrar</button>
                    <script>
                    function validateCadastro() {
                            const nameInput = document.querySelector('.form [name="nomee"]');
                            const passwordInput = document.querySelector('.form [name="senhaa"]');
                            const name = nameInput.value;
                            const password = passwordInput.value;

                            // Verifica se o nome contém apenas letras (sem números)
                            if (/\d/.test(name)) {
                                alert('O nome não pode conter números.');
                                return false; // Impede o envio do formulário
                            }

                      /*      // Verifica se a senha não está vazia e contém apenas letras
                            if (password === '' || !/^[a-zA-Z]+$/.test(password)) {
                                alert('A senha deve conter apenas letras e não pode estar vazia.');
                                return false; // Impede o envio do formulário
                            }

                            // Restante do código para processar o formulário de cadastro
                            // ...*/

                            return true;
                        }
                    </script>
                </form>
            </div>
        </div>
       
    </div>
    
    <style>
    .message-welcome {
    text-align: center;
    margin-top: -150px; 
    font-size: 20px;
    font-weight: bold;
    color: #000;
    }
    .btn-faleconosco{
    background-color:  #ce85ce;
    border: 1px solid  #ce85ce;
    transition: background-color .5s;
}
.btn-faleconosco:hover{
    background-color: #fff;
    border: 1px solid  #ce85ce;
    color:  #ce85ce;
}
    .btn-enter {
        background-color:  #ce85ce;
    border: 1px solid  #ce85ce;
    transition: background-color .5s;

}
.btn-enter:hover {
    background-color: #fff;
    border: 1px solid  #ce85ce;
    color:  #ce85ce; 
}
 a{
    text-decoration: none;
    color: #fff;
 }
    </style>
    <?php
    if (isset($_POST["btnacesso"])) {
        include_once 'Usuarios.php';
        $u = new Usuarios();
        $u->setUsu($_POST["nome"]);
        $u->setSenha($_POST["senha"]);
        $pro_bd = $u->logar();
        $existe = false;
        foreach ($pro_bd as $pro_mostrar) {
            $existe = true;
            ?>
              <div class="message-welcome">
                <p>Bem-vinda(o)!</p>
                <?php echo $pro_mostrar[0]; ?>
            </div>
            <center>
                <button name="btnentrar" class=" btn btn-enter"><a href="menu.html" class="btn-enter">Entrar</button></a>
            </center>
            <?php 
        }
        if ($existe == false)
         {
            echo '<script>window.location.href = "erro.html";</script>';

        }
        
    }
    ?>
    <?php
  extract($_POST, EXTR_OVERWRITE);
  if(isset($btncad))
  {

    include_once 'Usuarios.php';
    $pro=new Usuarios();
    $pro-> setUsu($nomee);
    $pro->setSenha($senhaa);
   
   
    echo "<h3><br><br>". $pro->salvar()."</h3>";
  }
?>
    <script src="js/app.js"></script>
  
</body>
</html>