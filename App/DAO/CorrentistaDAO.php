<?php
namespace App\DAO;

use App\Model\CorrentistaModel;
use \PDO;

class CorrentistaDAO extends DAO {

	public function __construct()
    {
        parent::__construct();      
    }

    public function cadastrar(CorrentistaModel $model) 
    {
        $sql = "INSERT INTO Correntista (nome, cpf, senha, data_nascimento) VALUES (?, ?, ?, ?);";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->senha);
        $stmt->bindValue(4, $model->data_nascimento);
        $stmt->execute();

        if($model->tipo == "CORRENTE") 
        {
            $sql = "INSERT INTO Conta (tipo, saldo, limite, id_correntista) VALUES (?, 0, 200, LAST_INSERT_ID());";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->tipo);
            $stmt->execute();
        } else {
            $sql = "INSERT INTO Conta (tipo, saldo, limite, id_correntista) VALUES (?, 0, 0, LAST_INSERT_ID());";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->tipo);
            $stmt->execute();
        }
    }

    public function selectCorrentistaByCpfAndSenha(CorrentistaModel $model) 
    {
        $sql = "SELECT * FROM Correntista WHERE cpf = ? AND senha = ?;";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->cpf);
        $stmt->bindValue(2, $model->senha);
        $stmt->execute();

        return $stmt->fetchObject();
    }
}
