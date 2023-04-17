<?php
use App\Controller\{
    CorrentistaController,
    ContaController,
    ChavePixController
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {

    // Criar conta de um usuário / correntista.
    // [OK] http://localhost:8000/correntista/save
    case "/correntista/save":

    break;
    
    // Exibe o extrato referente a uma conta.
    // [OK] http://localhost:8000/conta/extrato
    case "/conta/extrato":

    break;

    // Enviar pix de uma determinada conta.
    // [OK] http://localhost:8000/conta/pix/enviar
    case "/conta/pix/enviar":

    break;

    // Receber pix de uma determinada conta.
    // [OK] http://localhost:8000/conta/pix/receber
    case "/conta/pix/receber":

    break;
    
    // Logar em uma conta já existente
    // [OK] http://localhost:8000/correntista/entrar
    case "/correntista/entrar":

    break;

    default:
        http_response_code(403);
    break;
}