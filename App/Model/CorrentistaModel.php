<?php
namespace App\Model;

use App\DAO\CorrentistaDAO;

class CorrentistaModel extends Model {
    public $id, $nome, $cpf, $senha, $data_nascimento;

	public $tipo; // Tabela Conta

	public function cadastrar() 
	{
		$dao = new CorrentistaDAO();
		return $dao->cadastrar($this);
	}

	public function autenticar() {
		$dao = new CorrentistaDAO();
		return $dao->selectCorrentistaByCpfAndSenha($this);
	}
}
