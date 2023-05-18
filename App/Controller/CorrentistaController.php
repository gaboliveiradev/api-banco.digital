<?php
namespace App\Controller;

use App\Model\CorrentistaModel;
use Exception;

class CorrentistaController extends Controller {

	public static function cadastrar() 
	{
		try {
			$json_obj = json_decode(file_get_contents('php://input'));

			$model = new CorrentistaModel();
			$model->nome = $json_obj->nome;
			$model->cpf = $json_obj->cpf;
			$model->senha = $json_obj->senha;
			$model->data_nascimento = $json_obj->data_nascimento;
			$model->tipo = $json_obj->tipo;
	
			parent::getResponseAsJSON($model->cadastrar());
		} catch (Exception $err) {
			parent::getExceptionAsJSON($err);
		}
	}

	public static function autenticar() 
	{
		try {
			$json_obj = json_decode(file_get_contents('php://input'));

			$model = new CorrentistaModel();
			$model->cpf = $json_obj->cpf;
			$model->senha = $json_obj->senha;

			parent::getResponseAsJSON($model->autenticar());
		} catch (Exception $err) {
			parent::getExceptionAsJSON($err);
		}
	}
}
