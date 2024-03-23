<?php


include_once 'conectar.php';

// 1 - Atributos
class Livros
{
    private $cod_;
    private $titulo;
    private $categoria;
    private $isbn;
    private $idioma;
    private $qtde;
    private $conn;

//  2 - os getts e setters

public function getCod_()
{
    return $this -> cod_;

}

public function setCod_($Codig)
{
    $this->cod_ = $Codig;

}

public function getTitulo()
{
    return $this -> titulo;

}

public function setTitulo($title)
{
    $this->titulo = $title;

}

public function getCategoria()
{
    return $this -> categoria;

}
public function setCategoria($cate)
{
    $this ->categoria = $cate;
}

public function getIsbn()
{
    return $this -> isbn;

}

public function setIsbn($ISBN)
{
    $this->isbn = $ISBN;

}

public function getIdioma()
{
    return $this -> idioma;

}

public function setIdioma($idi)
{
    $this->idioma = $idi;

}

public function getQtde ()
{
    return $this -> qtde;
}
public function setQtde($quantidade)
{
    $this-> qtde = $quantidade;
}
function alterar(){
    try{
        $this-> conn= new Conectar();
        $sql = $this->conn->prepare("select * from livro where Cod_livro = ?");
        @$sql->bindParam(1, $this->getCod_(), PDO::PARAM_STR);
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
         $sql = $this->conn->prepare("update livro set Título = ?, Categoria = ?, ISBN = ?, Idioma = ?, QtdePag = ?  where Cod_livro = ?");
         @$sql->bindParam(1, $this->getTitulo(), PDO::PARAM_STR);
         @$sql->bindParam(2, $this->getCategoria(), PDO::PARAM_STR);
         @$sql->bindParam(3, $this->getIsbn(), PDO::PARAM_STR);
         @$sql->bindParam(4, $this->getIdioma(), PDO::PARAM_STR);
         @$sql->bindParam(5, $this->getQtde(), PDO::PARAM_STR);
         @$sql->bindParam(6, $this->getCod_(), PDO::PARAM_STR);
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
        $sql = $this->conn->prepare("select * from livro where  Título  like ?"); // informei ?
        @$sql->bindParam(1, $this->getTitulo(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao executar consulta. " . $exc->getMessage();
    }
 } 

function exclusao()
{
   try
   {
       $this-> conn = new Conectar();
       $sql = $this->conn->prepare("delete from livro where Cod_livro = ?");
       @$sql->bindParam(1, $this->getCod_(), PDO::PARAM_STR);
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
 
function listar()
{
    try {
        $this->conn = new Conectar();
        $sql = $this->conn->query("SELECT * FROM livro ORDER BY Cod_livro");
        $sql->execute();
        return $sql->fetchAll();
    } catch (PDOException $exc) {
        echo "Erro ao Executar consulta: " . $exc->getMessage(); // Adicionando a mensagem de erro
    }
}

    
   


function salvar()
{
    try{
         $this->conn=new Conectar();
         $sql = $this->conn->prepare("insert into livro values (?,?,?,?,?,?)");
         @$sql->bindParam(1, $this->getCod_(), PDO::PARAM_STR);
         @$sql->bindParam(2, $this->getTitulo(), PDO::PARAM_STR);
         @$sql->bindParam(3, $this->getCategoria(), PDO::PARAM_STR);
         @$sql->bindParam(4, $this->getIsbn(), PDO::PARAM_STR);
         @$sql->bindParam(5, $this->getIdioma(), PDO::PARAM_STR);
         @$sql->bindParam(6, $this->getQtde(), PDO::PARAM_STR);
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

}
      ?>