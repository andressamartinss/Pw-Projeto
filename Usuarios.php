<?php


include_once 'conectar.php';
class Usuarios
{
    private $usu;
    private $senha;
    private $conn;

    public function getUsu()
    {
        return $this->usu;
    }
    public function setUsu($usuario)
    {
        $this-> usu = $usuario;
    
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
       $this->  senha= $senha;
    }

    function logar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("SELECT * FROM usuarios WHERE Login LIKE ? and Senha = ?");
            @$sql-> bindParam(1, $this->getUsu(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getSenha(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn= null;
        }
      
      catch(PDOException $exc)  
    {
        echo "<span class='text-grenn-200'>Erro ao executar consulta.</span>" . $exc->getMessage();
    }
 }

 function salvar()
 {
     try {
         $this->conn = new Conectar();
         $sql = $this->conn->prepare("INSERT INTO usuarios VALUES (?, ?)");
         $usuario = $this->getUsu();
         $senha = $this->getSenha();
         
         $sql->bindParam(1, $usuario, PDO::PARAM_STR);
         $sql->bindParam(2, $senha, PDO::PARAM_STR);
         if ($sql->execute()) {
             $this->conn = null;
             echo '<div class="message-welcome"> <p>Registro salvo!</p>
                   </div>';
         }
     } catch (PDOException $exc) {
         echo '<div class="message-welcome">
                 <p>Erro ao salvar o registro.' . $exc->getMessage() . '</p>
               </div>';
     }
 }
 
    }
?>