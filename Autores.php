<?php


include_once 'conectar.php';

// 1 - Atributos
class Autores
{
    private $cod;
    private $nome;
    private $sobrenome;
    private $email;
    private $nasc;

    private $conn;

//  2 - os getts e setters

public function getCod()
{
    return $this -> cod;

}

public function setCod($Codig)
{
    $this->cod = $Codig;

}

public function getNome()
{
    return $this -> nome;

}

public function setNome($name)
{
    $this->nome = $name;

}

public function getSobrenome()
{
    return $this -> Sobrenome;

}
public function setSobrenome($Sobre)
{
    $this ->sobrenome = $Sobre;
}

public function getEmail()
{
    return $this -> email;

}

public function setEmail($emai)
{
    $this->email = $emai;

}

public function getNasc()
{
    return $this -> nasc;

}

public function setNasc($nasci)
{
    $this->nasc = $nasci;

}
function alterar(){
    try{
        $this-> conn= new Conectar();
        $sql = $this->conn->prepare("select * from autor where Cod_Autor = ?");
        @$sql->bindParam(1, $this->getCod(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao alterar." . $exc->getMessage();
    }
 }
 function alterar2()
 {
     try
     {
         $this->conn = new Conectar();
         $sql = $this->conn->prepare("update autor set NomeAutor = ?, Sobrenome = ?, Email = ?,  Nasc = ?  where Cod_Autor = ?");
         @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
         @$sql->bindParam(2, $this->getSobrenome(), PDO::PARAM_STR);
         @$sql->bindParam(3, $this->getEmail(), PDO::PARAM_STR);
         @$sql->bindParam(4, $this->getNasc(), PDO::PARAM_STR);
         @$sql->bindParam(5, $this->getCod(), PDO::PARAM_STR);
        
         if($sql->execute()== 1)
         {
             return "Registro alterado com sucesso!";
         }
         $this->conn = null;
     }
     catch(PDOException $exc)
     {
         echo "Erro ao salvar o registro." . $exc->getMessage();
     }
    }
function consultar(){

    try{
        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("select * from autor where NomeAutor like ?"); // informei ?
        @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao executar consulta. " . $exc->getMessage();
    }
 } 
function salvar()
{
    try{
         $this->conn=new Conectar();
         $sql = $this->conn->prepare("insert into `autor` values (?,?,?,?,?)");
         @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
         @$sql->bindParam(2, $this->getSobrenome(), PDO::PARAM_STR);
         @$sql->bindParam(3, $this->getEmail(), PDO::PARAM_STR);
         @$sql->bindParam(4, $this->getCod(), PDO::PARAM_STR);
         @$sql->bindParam(5, $this->getNasc(), PDO::PARAM_STR);
        
         if($sql->execute()==1)
         {
             return "Registro salvo com sucesso";

         }
         $this->conn= null;

    }
    catch(PDOException $exc)
          {
              echo "Erro ao salvar o registro.".$exc->getMessage();
          }
      }



function listar()
{
    try
    {

        $this -> conn = new conectar();
        $sql = $this ->conn->query("select * from autor order by Cod_Autor"); // informei o ? (parametro)
        $sql -> execute();
        return $sql -> fetchAll();
        $this -> conn = null;

    }
    catch(PDOExcepion $exc)
    {
        echo "Erro ao Executar consulta." . $exc -> getMessage();
    }
}
function exclusao()
{
   try
   {
       $this-> conn = new Conectar();
       $sql = $this->conn->prepare("delete from autor where Cod_Autor = ?");
       @$sql->bindParam(1, $this->getCod(), PDO::PARAM_STR);
       if($sql->execute()==1)
       {
           return"Excluido com sucesso!";
       }
       else
       {
           return"Erro na exclusão!";
       }
       $this->conn = null;
   }
   catch(PDOException $exc)
   {
       echo "Erro ao excluir". $exc->getMessage();
   }
}

} // Encerramento da classe produto
?>