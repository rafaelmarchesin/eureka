<?php

// Isso faz com que todas as classes sejam orquestradas pelo Composer
// Dessa maneira, não é mais preciso ficar utilizando o "require"

use App\Route;

require_once __DIR__ . "/../vendor/autoload.php";

$route = new Route;

