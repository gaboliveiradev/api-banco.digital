<?php
namespace App\DAO;

use \PDO;

class ContaDAO extends DAO {

	public function __construct()
    {
        parent::__construct();      
    }

    public function selectContaById(int $id) 
    {
        $sql = "SELECT * FROM Conta WHERE id_correntista = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }
}
