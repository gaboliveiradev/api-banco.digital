<?php
namespace App\Controller;

use App\Model\ContaModel;
use Exception;

class ContaController extends Controller {

	public static function selectContaById() 
	{
		try {
			$json_obj = json_decode(file_get_contents('php://input'));

			$model = new ContaModel();
			parent::getResponseAsJSON($model->selectContaById((int) $json_obj->id_correntista));
		} catch (Exception $err) {
			parent::getExceptionAsJSON($err);
		}
	}
}
