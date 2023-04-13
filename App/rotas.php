<?php
use App\Controller\{
    CorrentistaController,
    ContaController,
    ChavePixController
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {

    default:
        http_response_code(403);
    break;
}