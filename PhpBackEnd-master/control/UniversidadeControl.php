<?php
    include __DIR__.'/../model/Universidade.php';

    class UniversidadeControl{
        function insert($obj){		
            $Universidade = new Universidade();	
            /* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
            return $Universidade->insert($obj);		
        }
    
        function update($obj,$id){
            $Universidade = new Universidade();
            return $Universidade->update($obj,$id);
        }
    
        function delete($obj,$id){
            $Universidade = new Universidade();
            return $Universidade->delete($obj,$id);
        }
    
        function find($id = null){
            $Universidade = new Universidade();
            return $Universidade->find($id);
        }
    
        function findAll(){
            $Universidade = new Universidade();
            return $Universidade->findAll();
        }
    }
?>