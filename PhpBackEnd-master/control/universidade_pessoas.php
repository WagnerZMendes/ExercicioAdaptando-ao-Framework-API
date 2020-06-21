<?php

include __DIR__.'/../model/universidade_pessoas.php';

class UniversidadePessoasControl{
	function insert($obj){		
		$universidade_pessoas = new UniversidadePessoas();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $universidade_pessoas->insert($obj);		
	}

	function update($obj,$id){
		$universidade_pessoas = new UniversidadePessoas();
		return $universidade_pessoas->update($obj,$id);
	}

	function delete($obj,$id){
		$universidade_pessoas = new UniversidadePessoas();
		return $universidade_pessoas->delete($obj,$id);
	}

	function find($id = null){
		$universidade_pessoas = new UniversidadePessoas();
		return $universidade_pessoas->find($id);
	}

	function findAll(){
		$universidade_pessoas = new UniversidadePessoas();
		return $universidade_pessoas->findAll();
	}
}

?>