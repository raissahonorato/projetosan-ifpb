<?php
//Banco de dados foi criado. Senha para o usuário do banco de dados u267030251_tely definida para singlejackboy
class BDClass{
	
	//***************************************************************************************
	//**************************   CONFIGURAÇÕES DE CONEXÃO *********************************
	private $servidor = 'localhost'; // ENDEREÇO DO BANCO DE DADOS
	private $usuario = 'root'; // NOME DE USUÁRIO PARA ACESSO AO BANCO DE DADOS
	private $senha = 'sms'; // SENHA PARA ACESSO AO BANCO DE DADOS
	private $banco = 'gatewaysms'; // NOME DO BANCO DE DADOS
	//***************************************************************************************


	private function conectar() {
		return new mysqli($this->servidor, $this->usuario, $this->senha, $this->banco);
	}





	

	public function inserir($tabela, $campos, $valores) {
		$query = "INSERT INTO ".$tabela." (".$campos.") VALUES (".$valores.")";
		$db = $this->conectar();
		$result = $db->query($query);
		//return $results;
	}
	


	public function listaOrdenada($tabela, $campo_ordem, $ordem_asc_desc) {
		$results = array();
		
		$query = "SELECT * FROM ".$tabela." ORDER BY ".$campo_ordem." ".$ordem_asc_desc."";
		$db = $this->conectar();
		$result = $db->query($query);

		while ( $row = $result->fetch_array()) {
			$results[] = $row;
		}
		
		return $results;
	}

	

	public function listaLimitada($tabela, $campo_ordem, $ordem_asc_desc, $limite) {
		$results = array();
		
		$query = "SELECT * FROM ".$tabela." ORDER BY ".$campo_ordem." ".$ordem_asc_desc." LIMIT ".$limite."";
		$db = $this->conectar();
		$result = $db->query($query);

		while ( $row = $result->fetch_array() ) {
			$results[] = $row;
		}

		return $results;
	}


	
	public function busca($tabela, $busca, $campoBusca) {
		$results = array();
		
		$query = "SELECT * FROM ".$tabela." WHERE ".$campoBusca." LIKE '%".$busca."%'";
		$db = $this->conectar();
		$result = $db->query($query);
		
		while ( $row = $result->fetch_array() ) {
			$results[] = $row;
		}
		
		return $results;
	}


	
	public function buscaExata($tabela, $busca, $campoBusca) {
		$results = array();
		
		$query = "SELECT * FROM ".$tabela." WHERE ".$campoBusca."='".$busca."'";
		$db = $this->conectar();
		$result = $db->query($query);

		while ( $row = $result->fetch_array() ) {
			$results[] = $row;
		}

		return $results;
	}

	

	public function atualizar($tabela, $campos_e_valores, $idCampo) {
		$query = "UPDATE ".$tabela." SET ".$campos_e_valores." WHERE id=".$idCampo."";
		$db = $this->conectar();
		$result = $db->query($query);
		//return $results;
	}

	

	public function deletar($tabela, $Campo, $idCampo) {
		$query = "DELETE FROM ".$tabela." WHERE ".$Campo."=".$idCampo."";
		$db = $this->conectar();
		$result = $db->query($query);
		//return $results;
	}

	}//final da classe
?>
