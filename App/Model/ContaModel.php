<?php
namespace App\Model;

use App\DAO\ContaDAO;

class ContaModel extends Model {
    public $id, $tipo, $saldo, $limite, $id_correntista;

	public function selectContaById(int $id) 
	{
		$dao = new ContaDAO();
		return $dao->selectContaById((int) $id);
	}
}
