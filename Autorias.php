<?php


include_once 'conectar.php';

// 1 - Atributos
class Autorias
{
    private $coda;
    private $codl;
    private $datal;
    private $editora;

    private $conn;

//  2 - os getts e setters

public function getCoda()
{
    return $this -> coda;

}

public function setCoda($Codiga)
{
    $this->coda = $Codiga;

}

public function getCodl()
{
    return $this -> codl;

}

public function setCodl($codliv)
{
    $this->codl = $codliv;

}

public function getDatal()
{
    return $this -> datal;

}
public function setDatal($datala)
{
    $this ->datal = $datala;
}

public function getEditora()
{
    return $this -> editora;

}

public function setEditora($edi)
{
    $this->editora = $edi;

}
function alterar(){
    try{
        $this-> conn= new Conectar();
        $sql = $this->conn->prepare("select * from autoria where Cod_Autor = ?");
        @$sql->bindParam(1, $this->getCoda(), PDO::PARAM_STR);
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
         $sql = $this->conn->prepare("update autoria set Cod_livro = ?, DataLancamento = ?, Editora = ? where Cod_Autor = ?");
         @$sql->bindParam(1, $this->getCodl(), PDO::PARAM_STR);
         @$sql->bindParam(2, $this->getDatal(), PDO::PARAM_STR);
         @$sql->bindParam(3, $this->getEditora(), PDO::PARAM_STR);
         @$sql->bindParam(4, $this->getCoda(), PDO::PARAM_STR);
    
        
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
        $sql = $this->conn->prepare("select * from autoria where Editora like ?"); // informei ?
        @$sql->bindParam(1, $this->getEditora(), PDO::PARAM_STR);
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
         $sql = $this->conn->prepare("insert into autoria values (?,?,?,?)");
         @$sql->bindParam(1, $this->getEditora(), PDO::PARAM_STR);
         @$sql->bindParam(2, $this->getDatal(), PDO::PARAM_STR);
         @$sql->bindParam(3, $this->getCodl(), PDO::PARAM_STR);
         @$sql->bindParam(4, $this->getCoda(), PDO::PARAM_STR);
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
        $sql = $this ->conn->query("select * from autoria order by Cod_Autor"); // informei o ? (parametro)
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
       $sql = $this->conn->prepare("delete from autoria where Cod_Autor = ?");
       @$sql->bindParam(1, $this->getCoda(), PDO::PARAM_STR);
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