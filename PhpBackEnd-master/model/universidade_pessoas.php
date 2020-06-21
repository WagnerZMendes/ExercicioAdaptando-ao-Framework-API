<?php

class UniversidadePessoas{

    private $id_pessoa;
    private $id_universidade;

    public function getIdPessoa() {
        return $this->id_pessoa;
    }

    public function setId($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
    }

    public function getidUniversidade() {
        return $this->id_universidade;
    }

    public function setNome($id_universidade) {
        $this->id_universidade = $id_universidade;
    }  

    public function insert($obj){    
        $sql = "INSERT INTO universidade_pessoas(id_pessoa,id_universidade) VALUES (:id_pessoa,:id_universidade)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_pessoa',  $obj->id_pessoa);
        $consulta->bindValue('id_universidade' , $obj->id_universidade);
        $consulta->execute();
        return Conexao::lastId(); /*Aqui vc tem o ID da pessoa, você pode não retornar ele e adicionar uma nova query para inserção e inserir nas duas tabelas ao mesmo tempo se for sempre assim */        
    }

    public function update($obj,$id = null){
        $sql = "UPDATE universidade_pessoas SET 
            id_pessoa = :id_pessoa, 
            id_universidade = :id_universidade
        WHERE id = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_pessoa', $obj->id_pessoa);
        $consulta->bindValue('id_universidade' , $obj->id_universidade);		
        return $consulta->execute();
    }

    public function delete($obj,$id = null){
        $sql =  "DELETE FROM universidade_pessoas WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
        return $consulta->execute();
    }

    public function find($id = null){
        $sql =  "SELECT * FROM universidade_pessoas WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
        return $consulta->fetch();
    }

    public function findAll(){
        $sql = "SELECT * FROM universidade_pessoas";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }
}

?>