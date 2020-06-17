<?php
    if (php_sapi_name() != "cli") {
        header('Content-Type:text/plain');
    }

    echo 'INICIANDO DEPLOY'.PHP_EOL;
    echo '======='.PHP_EOL;

    echo 'Atualizando o repositório'.PHP_EOL;
    passthru('git pull');
    echo 'OK'.PHP_EOL;
    echo '======='.PHP_EOL;


echo 'Deploy finalizado!'.PHP_EOL;